<?php

use IBroStudio\Lago\DataObjects\CustomerBillingConfiguration;
use IBroStudio\Lago\DataObjects\CustomerData;
use IBroStudio\Lago\DataObjects\CustomerOverrideData;
use IBroStudio\Lago\Sdk\LagoSdk;
use IBroStudio\Lago\Sdk\Requests\Customers\CreateCustomer;
use Illuminate\Support\Facades\App;
use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\Name;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Http\Request;

it('can create a customer', function () {
    $mockClient = new MockClient([
        CreateCustomer::class => MockResponse::make('Server Created', 200),
    ]);

    $connector = App::make(LagoSdk::class);

    $connector->withMockClient($mockClient);

    $user = \IBroStudio\Lago\Tests\Support\Models\User::factory()->create();

/*
    dd(
        \IBroStudio\Lago\DataObjects\CustomerOverrideData::from($user)->toArray()
    );
//*/
    $connector->send(
        new CreateCustomer(
            CustomerData::from($user)
        )
    );

    $mockClient->assertSent(CreateCustomer::class);
    /*
    $mockClient->assertSent(function (Request $request) {
        return $request->body()->all() === ['name' => $name, 'ip' => $ip];
    });
    */
});
