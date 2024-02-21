<?php

namespace IBroStudio\Lago\Sdk\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllTaxes
 *
 * This endpoint retrieves all existing taxes representing a customizable tax rate applicable to either
 * the organization or a specific customer.
 */
class FindAllTaxes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/taxes";
	}


	/**
	 * @param null|int $page Page number.
	 */
	public function __construct(
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page]);
	}
}
