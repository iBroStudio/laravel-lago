<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllCustomerPastUsage
 *
 * This endpoint enables the retrieval of the usage-based billing data for a customer within past
 * periods.
 */
class FindAllCustomerPastUsage extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->externalCustomerId}/past_usage";
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application).
     * @param  null|int  $page  Page number.
     * @param  string  $externalSubscriptionId  The unique identifier of the subscription within your application.
     * @param  null|string  $billableMetricCode  Billable metric code filter to apply to the charge usage
     * @param  null|int  $periodsCount  Number of past billing period to returns in the result
     */
    public function __construct(
        protected string $externalCustomerId,
        protected ?int $page,
        protected string $externalSubscriptionId,
        protected ?string $billableMetricCode = null,
        protected ?int $periodsCount = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page' => $this->page,
            'external_subscription_id' => $this->externalSubscriptionId,
            'billable_metric_code' => $this->billableMetricCode,
            'periods_count' => $this->periodsCount,
        ]);
    }
}
