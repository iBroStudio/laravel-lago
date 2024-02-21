<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllCreditNotes
 *
 * This endpoint list all existing credit notes.
 */
class FindAllCreditNotes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/credit_notes";
	}


	/**
	 * @param null|int $page Page number.
	 * @param null|string $externalCustomerId Unique identifier assigned to the customer in your application.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?string $externalCustomerId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'external_customer_id' => $this->externalCustomerId]);
	}
}
