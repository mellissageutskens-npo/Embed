<?php
declare(strict_types = 1);

return [
    'headers' => [
        'server' => [
            'Varnish',
            'nginx'
        ],
        'retry-after' => [
            '0'
        ],
        'location' => [
            'https://www.kickstarter.com/services/oembed?url=https%3A%2F%2Fwww.kickstarter.com%2Fprojects%2F1452363698%2Fgood-seed-craft-veggie-burgers&format=json'
        ],
        'content-length' => [
            '0'
        ],
        'accept-ranges' => [
            'bytes',
            'bytes',
            'bytes'
        ],
        'date' => [
            'Sun, 23 Feb 2020 00:01:19 GMT',
            'Sun, 23 Feb 2020 00:01:19 GMT'
        ],
        'via' => [
            '1.1 varnish',
            '1.1 varnish'
        ],
        'connection' => [
            'close'
        ],
        'x-served-by' => [
            'cache-mad22025-MAD',
            'cache-mad22025-MAD'
        ],
        'x-cache' => [
            'HIT',
            'MISS'
        ],
        'x-cache-hits' => [
            '0',
            '0'
        ],
        'x-timer' => [
            'S1582416079.416168,VS0,VE0',
            'S1582416080.521352,VS0,VE130'
        ],
        'strict-transport-security' => [
            'max-age=31557600  HTTP/2 200',
            'max-age=31557600'
        ],
        'content-type' => [
            'application/json; charset=utf-8'
        ],
        'x-frame-options' => [
            'SAMEORIGIN'
        ],
        'x-xss-protection' => [
            '1; mode=block'
        ],
        'x-content-type-options' => [
            'nosniff'
        ],
        'heartbleed' => [
            'NO; see http://heartbleedheader.com'
        ],
        'etag' => [
            'W/"cb87bfa1ab31345a3bd3cc59c4d218e8"'
        ],
        'cache-control' => [
            'max-age=0, private, must-revalidate'
        ],
        'x-request-id' => [
            '4bf64dfe-f7cc-4afa-ba32-aa9fe1af1b6f'
        ],
        'x-runtime' => [
            '0.037007'
        ],
        'content-encoding' => [
            'gzip'
        ],
        'age' => [
            '0',
            '0'
        ],
        'Content-Location' => [
            'https://www.kickstarter.com/services/oembed?url=https%3A%2F%2Fwww.kickstarter.com%2Fprojects%2F1452363698%2Fgood-seed-craft-veggie-burgers&format=json'
        ]
    ],
    'statusCode' => 200,
    'reasonPhrase' => 'OK',
    'body' => '{"version":"1.0","type":"rich","provider_name":"Kickstarter","provider_url":"https://www.kickstarter.com/","title":"Good Seed Craft Veggie Burgers","author_name":"Oliver Ponce and Erin Shotwell","author_url":"https://www.kickstarter.com/profile/1452363698","thumbnail_url":"https://ksr-ugc.imgix.net/assets/011/647/643/9e80f11b5b125b5b50d1694cbf7f0ba0_original.jpg?ixlib=rb-2.1.0&crop=faces&w=560&h=315&fit=crop&v=1463686200&auto=format&frame=1&q=92&s=551e5f9430e497f3954a21ab81b30c6a","thumbnail_width":560,"thumbnail_height":315.0,"width":480,"height":270.0,"html":"<iframe src=\\"https://www.kickstarter.com/projects/1452363698/good-seed-craft-veggie-burgers/widget/video.html\\" height=\\"270.0\\" width=\\"480\\" frameborder=\\"0\\" scrolling=\\"no\\"></iframe>"}
'
];
