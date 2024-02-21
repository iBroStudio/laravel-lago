<?php

use IBroStudio\Lago\Sdk\LagoSdk;
use IBroStudio\Lago\Sdk\Requests\Customers\CreateCustomer;
use Illuminate\Support\Facades\App;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

it('can create a customer', function () {
    $mockClient = MockClient::global([
        CreateCustomer::class => MockResponse::make(
            body: [
                'data' => [
                    ['name' => 'WEB-1', 'ip' => '192.168.0.1'],
                    ['name' => 'WEB-2', 'ip' => '192.168.0.2'],
                ],
            ],
            status: 200,
        ),
    ]);
    $user = \IBroStudio\Lago\Tests\Support\Models\User::factory()->create();
    $connector = App::make(LagoSdk::class);
    $connector->customers()->createFrom($user);

    $mockClient->assertSent(CreateCustomer::class);
});
