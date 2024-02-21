<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * downloadInvoice
 *
 * This endpoint is used for downloading a specific invoice PDF document.
 */
class DownloadInvoice extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/invoices/{$this->lagoId}/download";
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
