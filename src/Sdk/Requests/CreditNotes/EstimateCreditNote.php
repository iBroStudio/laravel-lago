<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * estimateCreditNote
 *
 * This endpoint allows you to retrieve amounts for a new credit note creation.
 */
class EstimateCreditNote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/credit_notes/estimate";
	}


	public function __construct()
	{
	}
}
