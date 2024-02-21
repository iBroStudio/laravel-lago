<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use DateTime;
use IBroStudio\Lago\DataObjects\Contracts\CustomerDataContract;
use IBroStudio\Lago\DataObjects\CustomerData;
use IBroStudio\Lago\Sdk\Concerns\HasDefaultBodyFromDataObject;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

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
		return "/customers";
	}

	public function __construct(
        protected CustomerDataContract $bodyData
    )
	{
	}
}
