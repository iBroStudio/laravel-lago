<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * retryPayment
 *
 * This endpoint resends an invoice for collection and retry a payment.
 */
class RetryPayment extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/invoices/{$this->lagoId}/retry_payment";
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
