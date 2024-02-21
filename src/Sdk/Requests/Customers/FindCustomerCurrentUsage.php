<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findCustomerCurrentUsage
 *
 * This endpoint enables the retrieval of the usage-based billing data for a customer within the
 * current period.
 */
class FindCustomerCurrentUsage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/customers/{$this->externalCustomerId}/current_usage";
	}


	/**
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application).
	 * @param string $externalSubscriptionId The unique identifier of the subscription within your application.
	 */
	public function __construct(
		protected string $externalCustomerId,
		protected string $externalSubscriptionId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['external_subscription_id' => $this->externalSubscriptionId]);
	}
}
