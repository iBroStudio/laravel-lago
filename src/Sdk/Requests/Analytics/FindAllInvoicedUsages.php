<?php

namespace IBroStudio\Lago\Sdk\Requests\Analytics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllInvoicedUsages
 *
 * Reports a monthly analysis focused on the revenue generated from all usage-based fees. It
 * exclusively accounts for revenue that has been formally invoiced. Importantly, this report does not
 * include revenue related to the usage in the current billing period, limiting its scope to previously
 * invoiced amounts.
 */
class FindAllInvoicedUsages extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/analytics/invoiced_usage";
	}


	/**
	 * @param null|mixed $currency The currency of invoiced usage analytics. Format must be ISO 4217.
	 * @param null|int $months Show data only for given number of months.
	 */
	public function __construct(
		protected mixed $currency = null,
		protected ?int $months = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['currency' => $this->currency, 'months' => $this->months]);
	}
}
