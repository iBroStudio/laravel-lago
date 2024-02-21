<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * generateCustomerCheckoutURL
 *
 * This endpoint regenerates the Payment Provider Checkout URL of a Customer.
 */
class GenerateCustomerCheckoutUrl extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->externalCustomerId}/checkout_url";
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application).
     */
    public function __construct(
        protected string $externalCustomerId,
    ) {
    }
}
