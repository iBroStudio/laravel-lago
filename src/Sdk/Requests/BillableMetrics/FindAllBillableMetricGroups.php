<?php

namespace IBroStudio\Lago\Sdk\Requests\BillableMetrics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllBillableMetricGroups
 *
 * This endpoint retrieves all groups for a billable metric.
 */
class FindAllBillableMetricGroups extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/billable_metrics/{$this->code}/groups";
    }

    /**
     * @param  string  $code  Code of the existing billable metric.
     * @param  null|int  $page  Page number.
     */
    public function __construct(
        protected string $code,
        protected ?int $page = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page]);
    }
}
