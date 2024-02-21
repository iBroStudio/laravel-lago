<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use IBroStudio\Lago\DataObjects\Contracts\CustomerDataContract;
use IBroStudio\Lago\Sdk\Concerns\HasDefaultBodyFromDataObject;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * createCustomer
 *
 * This endpoint creates a new customer.
 */
class CreateCustomer extends Request implements HasBody
{
    use HasDefaultBodyFromDataObject;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/customers';
    }

    public function __construct(
        protected CustomerDataContract $bodyData
    ) {
    }
}
