<?php

namespace IBroStudio\Lago\Sdk\Requests\Taxes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTax
 *
 * This endpoint creates a new tax representing a customizable tax rate applicable to either the
 * organization or a specific customer.
 */
class CreateTax extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/taxes";
	}


	public function __construct()
	{
	}
}
