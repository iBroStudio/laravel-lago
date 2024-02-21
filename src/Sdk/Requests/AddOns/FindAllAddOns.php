<?php

namespace IBroStudio\Lago\Sdk\Requests\AddOns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllAddOns
 *
 * This endpoint is used to list all existing add-ons.
 */
class FindAllAddOns extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/add_ons";
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
