<?php

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

Kirby::plugin('bvdputte/cookie-banner', [
    'snippets' => [
        'cookie-modal' => __DIR__ . '/snippets/cookie-modal.php',
        'cookie-modal-option' => __DIR__ . '/snippets/cookie-modal-option.php',
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
