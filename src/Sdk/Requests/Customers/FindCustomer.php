<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findCustomer
 *
 * This endpoint retrieves an existing customer.
 */
class FindCustomer extends Request
{
    protected Method $method = Method::GET;

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
