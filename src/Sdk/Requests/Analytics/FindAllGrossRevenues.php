<?php

namespace IBroStudio\Lago\Sdk\Requests\Analytics;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllGrossRevenues
 *
 * Gross revenue is the sum of monthly `finalized` invoice payments and fees paid in advance that are
 * not invoiceable. This total is calculated after deducting taxes and discounts.
 */
class FindAllGrossRevenues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/analytics/gross_revenue";
	}


	/**
	 * @param null|mixed $currency Currency of revenue analytics. Format must be ISO 4217.
	 * @param null|string $externalCustomerId The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level.
	 * @param null|int $months Show data only for given number of months.
	 */
	public function __construct(
		protected mixed $currency = null,
		protected ?string $externalCustomerId = null,
		protected ?int $months = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['currency' => $this->currency, 'external_customer_id' => $this->externalCustomerId, 'months' => $this->months]);
	}
}
