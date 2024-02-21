<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * voidCreditNote
 *
 * This endpoint voids an existing credit note.
 */
class VoidCreditNote extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/credit_notes/{$this->lagoId}/void";
	}


	/**
	 * @param string $lagoId The credit note unique identifier, created by Lago.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
