<?php
declare(strict_types = 1);

namespace Embed;

use Exception;
use ML\JsonLD\Document as LdDocument;
use ML\JsonLD\DocumentInterface;
use ML\JsonLD\GraphInterface;
use ML\JsonLD\Node;

class LinkedData
{
    use ApiTrait;

    private ?DocumentInterface $document;

    private function get(string ...$keys)
    {
        $graph = $this->getGraph();

        if (!$graph) {
            return null;
        }

        foreach ($graph->getNodes() as $node) {
            $value = self::getValue($node, ...$keys);

            if ($value) {
                return $value;
            }
        }

        return null;
    }

    private function getGraph(string $name = null): ?GraphInterface
    {
        if (!isset($this->document)) {
            $this->document = LdDocument::load(json_encode($this->all()));
        }

        return $this->document->getGraph();
    }

    protected function fetchData(): array
    {
        $document = $this->extractor->getDocument();
        $content = $document->select('.//script', ['type' => 'application/ld+json'])->str();

        if (empty($content)) {
            return [];
        }

        try {
            return json_decode($content, true) ?: [];
        } catch (Exception $exception) {
            return [];
        }
    }

    private static function getValue(Node $node, string ...$keys)
    {
        foreach ($keys as $key) {
            $node = $node->getProperty("http://schema.org/{$key}");

            if (!$node) {
                return null;
            }
        }

        return self::detectValue($node);
    }

    private static function detectValue($value)
    {
        if (is_array($value)) {
            return array_map(
                fn ($val) => self::detectValue($val),
                array_values($value)
            );
        }

        if (is_scalar($value)) {
            return $value;
        }

        if ($value instanceof Node) {
            return $value->getId();
        }

        return $value->getValue();
    }
}
