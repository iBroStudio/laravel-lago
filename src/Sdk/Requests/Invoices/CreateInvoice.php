<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createInvoice
 *
 * This endpoint is used for issuing a one-off invoice.
 */
class CreateInvoice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/invoices";
	}


	public function __construct()
	{
	}
}
