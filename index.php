<?php

use Kirby\Cms\App;

@include_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/lib/CookieMethods.php';

const DEFAULT_CONTENT = [
    'title' => 'Cookie settings',
    'text' => 'We use cookies to provide you with the best possible experience. They also allow us to analyze user behavior in order to constantly improve the website for you. (link: privacy-policy text: Privacy Policy)',
    'essentialText' => 'Essential',
    'denyAll' => 'Reject All',
    'acceptAll' => 'Accept All',
    'save' => 'Save settings',
];

App::plugin('bvdputte/cookie-banner', [
    'snippets' => [
        'cookie-modal/modal' => __DIR__ . '/snippets/modal.php',
        'cookie-modal/option' => __DIR__ . '/snippets/option.php',
    ],
    'translations' => [
        'en' => [
            'cookie-banner' => DEFAULT_CONTENT
        ]
    ],
    'options' => [
        'features' => [],
        'content' => DEFAULT_CONTENT
    ]
]);
