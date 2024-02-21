<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyCustomer
 *
 * This endpoint deletes an existing customer.
 */
class DestroyCustomer extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->externalId}";
    }

    /**
     * @param  string  $externalId  External ID of the existing customer
     */
    public function __construct(
        protected string $externalId,
    ) {
    }
}
