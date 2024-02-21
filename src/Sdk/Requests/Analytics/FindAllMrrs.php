<?php

namespace IBroStudio\Lago\Sdk\Requests\Analytics;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllMrrs
 *
 * This endpoint is used to list MRR.
 */
class FindAllMrrs extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/analytics/mrr';
    }

    /**
     * @param  null|mixed  $currency  Quantifies the revenue generated from `subscription` fees on a monthly basis. This figure is calculated post-application of applicable taxes and deduction of any applicable discounts. The method of calculation varies based on the subscription billing cycle:
     *
     * - Revenue from `monthly` subscription invoices is included in the MRR for the month in which the invoice is issued.
     * - Revenue from `quarterly` subscription invoices is distributed evenly over three months. This distribution applies to fees paid in advance (allocated to the next remaining months depending on calendar or anniversary billing) as well as to fees paid in arrears (allocated to the preceding months depending on calendar or anniversary billing).
     * - Revenue from `yearly` subscription invoices is distributed evenly over twelve months. This allocation is applicable for fees paid in advance (spread over the next  remaining months depending on calendar or anniversary billing) and for fees paid in arrears (spread over the previous months depending on calendar or anniversary billing).
     * - Revenue from `weekly` subscription invoices, the total revenue from all invoices issued within a month is summed up. This total is then divided by the number of invoices issued during that month, and the result is multiplied by 4.33, representing the average number of weeks in a month.
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
