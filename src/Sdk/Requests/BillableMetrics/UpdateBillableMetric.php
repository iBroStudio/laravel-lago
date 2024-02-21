<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateBillableMetric
 *
 * This endpoint updates an existing billable metric representing a pricing component of your
 * application.
 */
class UpdateBillableMetric extends Request
{
    protected Method $method = Method::PUT;

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
