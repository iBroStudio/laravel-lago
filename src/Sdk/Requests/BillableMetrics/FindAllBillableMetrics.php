<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllBillableMetrics
 *
 * This endpoint retrieves all existing billable metrics that represent pricing components of your
 * application.
 */
class FindAllBillableMetrics extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/billable_metrics";
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
