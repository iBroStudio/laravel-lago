<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCustomerPortalUrl
 *
 * Retrieves an embeddable link for displaying a customer portal.
 *
 * This endpoint allows you to fetch
 * the URL that can be embedded to provide customers access to a dedicated portal
 */
class GetCustomerPortalUrl extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->externalCustomerId}/portal_url";
    }

    /**
     * @param  string  $externalCustomerId  External ID of the existing customer
     */
    public function __construct(
        protected string $externalCustomerId,
    ) {
    }
}
