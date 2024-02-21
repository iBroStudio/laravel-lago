<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * downloadCreditNote
 *
 * This endpoint downloads the PDF of an existing credit note.
 */
class DownloadCreditNote extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/credit_notes/{$this->lagoId}/download";
	}


	/**
	 * @param string $lagoId The credit note unique identifier, created by Lago.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
