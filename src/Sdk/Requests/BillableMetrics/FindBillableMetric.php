<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findBillableMetric
 *
 * This endpoint retrieves an existing billable metric that represents a pricing component of your
 * application. The billable metric is identified by its unique code.
 */
class FindBillableMetric extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/billable_metrics/{$this->code}";
    }

    /**
     * @param  string  $code  Code of the existing billable metric.
     */
    public function __construct(
        protected string $code,
    ) {
    }
}
