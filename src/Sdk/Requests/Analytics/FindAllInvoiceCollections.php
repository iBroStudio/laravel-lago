<?php

namespace IBroStudio\Lago\Sdk\Requests\Analytics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllInvoiceCollections
 *
 * Represents a monthly aggregation, detailing both the total count and the cumulative amount of
 * invoices that have been marked as `finalized`. This report sorts invoices categorically based on
 * their `payment_status`.
 */
class FindAllInvoiceCollections extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/analytics/invoice_collection';
    }

    /**
     * @param  null|mixed  $currency  The currency of revenue analytics. Format must be ISO 4217.
     * @param  null|int  $months  Show data only for given number of months.
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
