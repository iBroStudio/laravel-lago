<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findInvoice
 *
 * This endpoint is used for retrieving a specific invoice that has been issued.
 */
class FindInvoice extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/invoices/{$this->lagoId}";
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
