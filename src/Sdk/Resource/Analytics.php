<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Analytics\FindAllGrossRevenues;
use IBroStudio\Lago\Sdk\Requests\Analytics\FindAllInvoiceCollections;
use IBroStudio\Lago\Sdk\Requests\Analytics\FindAllInvoicedUsages;
use IBroStudio\Lago\Sdk\Requests\Analytics\FindAllMrrs;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Analytics extends Resource
{
    /**
     * @param  mixed  $currency  Currency of revenue analytics. Format must be ISO 4217.
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level.
     * @param  int  $months  Show data only for given number of months.
     */
    public function findAllGrossRevenues(mixed $currency, ?string $externalCustomerId, ?int $months): Response
    {
        return $this->connector->send(new FindAllGrossRevenues($currency, $externalCustomerId, $months));
    }

    /**
     * @param  mixed  $currency  The currency of revenue analytics. Format must be ISO 4217.
     * @param  int  $months  Show data only for given number of months.
     */
    public function findAllInvoiceCollections(mixed $currency, ?int $months): Response
    {
        return $this->connector->send(new FindAllInvoiceCollections($currency, $months));
    }

    /**
     * @param  mixed  $currency  The currency of invoiced usage analytics. Format must be ISO 4217.
     * @param  int  $months  Show data only for given number of months.
     */
    public function findAllInvoicedUsages(mixed $currency, ?int $months): Response
    {
        return $this->connector->send(new FindAllInvoicedUsages($currency, $months));
    }

    /**
     * @param  mixed  $currency  Quantifies the revenue generated from `subscription` fees on a monthly basis. This figure is calculated post-application of applicable taxes and deduction of any applicable discounts. The method of calculation varies based on the subscription billing cycle:
     *
     * - Revenue from `monthly` subscription invoices is included in the MRR for the month in which the invoice is issued.
     * - Revenue from `quarterly` subscription invoices is distributed evenly over three months. This distribution applies to fees paid in advance (allocated to the next remaining months depending on calendar or anniversary billing) as well as to fees paid in arrears (allocated to the preceding months depending on calendar or anniversary billing).
     * - Revenue from `yearly` subscription invoices is distributed evenly over twelve months. This allocation is applicable for fees paid in advance (spread over the next  remaining months depending on calendar or anniversary billing) and for fees paid in arrears (spread over the previous months depending on calendar or anniversary billing).
     * - Revenue from `weekly` subscription invoices, the total revenue from all invoices issued within a month is summed up. This total is then divided by the number of invoices issued during that month, and the result is multiplied by 4.33, representing the average number of weeks in a month.
     * @param  int  $months  Show data only for given number of months.
     */
    public function findAllMrrs(mixed $currency, ?int $months): Response
    {
        return $this->connector->send(new FindAllMrrs($currency, $months));
    }
}
