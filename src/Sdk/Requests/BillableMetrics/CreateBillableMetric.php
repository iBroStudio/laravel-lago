<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBillableMetric
 *
 * This endpoint creates a new billable metric representing a pricing component of your application.
 */
class CreateBillableMetric extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/billable_metrics';
    }

    public function __construct()
    {
    }
}
