<?php

// config for IBroStudio/Lago

return [
    'api' => [
        'url' => env('LAGO_API_URL', 'http://lago.test:81'), // 3000
        'key' => env('LAGO_API_KEY', '641a6bc7-a4b0-427a-af88-3ce413b21a5d'),
    ],

    'data-objects' => [
        'customer' => \IBroStudio\Lago\DataObjects\CustomerOverrideData::class,
    ],

    'default' => [

        'billing_configuration' => [
            'document_locale' => 'fr',
            'invoice_grace_period' => 3,
        ],

        'currency' => \IBroStudio\Lago\Enums\Currencies::EUR,

        'timezone' => \IBroStudio\Lago\Enums\Timezones::UTC,
    ],
];
