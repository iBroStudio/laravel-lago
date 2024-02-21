<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyBillableMetric
 *
 * This endpoint deletes an existing billable metric representing a pricing component of your
 * application.
 */
class DestroyBillableMetric extends Request
{
    protected Method $method = Method::DELETE;

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
