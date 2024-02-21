<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllInvoices
 *
 * This endpoint is used for retrievign all invoices.
 */
class FindAllInvoices extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/invoices';
    }

    /**
     * @param  null|int  $page  Page number.
     * @param  null|string  $externalCustomerId  Unique identifier assigned to the customer in your application.
     * @param  null|string  $issuingDateFrom  Filter invoices starting from a specific date.
     * @param  null|string  $issuingDateTo  Filter invoices up to a specific date.
     * @param  null|string  $status  Filter invoices by status. Possible values are `draft` or `finalized`.
     * @param  null|string  $paymentStatus  Filter invoices by payment status. Possible values are `pending`, `failed` or `succeeded`.
     */
    public function __construct(
        protected ?int $page = null,
        protected ?string $externalCustomerId = null,
        protected ?string $issuingDateFrom = null,
        protected ?string $issuingDateTo = null,
        protected ?string $status = null,
        protected ?string $paymentStatus = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page' => $this->page,
            'external_customer_id' => $this->externalCustomerId,
            'issuing_date_from' => $this->issuingDateFrom,
            'issuing_date_to' => $this->issuingDateTo,
            'status' => $this->status,
            'payment_status' => $this->paymentStatus,
        ]);
    }
}
