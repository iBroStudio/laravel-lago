<?php

namespace IBroStudio\Lago\Sdk\Requests\Plans;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllPlans
 *
 * This endpoint retrieves all existing plans.
 */
class FindAllPlans extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/plans";
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
