<?php

namespace IBroStudio\Lago\Sdk\Requests\Fees;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllFees
 *
 * This endpoint is used for retrieving all fees that has been issued.
 */
class FindAllFees extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/fees';
    }

    /**
     * @param  null|int  $page  Page number.
     * @param  null|string  $externalCustomerId  Unique identifier assigned to the customer in your application.
     * @param  null|string  $externalSubscriptionId  External subscription ID
     * @param  null|mixed  $currency  Filter results by fee’s currency.
     * @param  null|string  $feeType  The fee type. Possible values are `add-on`, `charge`, `credit` or `subscription`.
     * @param  null|string  $billableMetricCode  Filter results by the `code` of the billable metric attached to the fee. Only applies to `charge` types.
     * @param  null|string  $paymentStatus  Indicates the payment status of the fee. It represents the current status of the payment associated with the fee. The possible values for this field are `pending`, `succeeded`, `failed` and refunded`.
     * @param  null|string  $createdAtFrom  Filter results created after creation date and time in UTC.
     * @param  null|string  $createdAtTo  Filter results created before creation date and time in UTC.
     * @param  null|string  $succeededAtFrom  Filter results with payment success after creation date and time in UTC.
     * @param  null|string  $succeededAtTo  Filter results with payment success after creation date and time in UTC.
     * @param  null|string  $failedAtFrom  Filter results with payment failure after creation date and time in UTC.
     * @param  null|string  $failedAtTo  Filter results with payment failure after creation date and time in UTC.
     * @param  null|string  $refundedAtFrom  Filter results with payment refund after creation date and time in UTC.
     * @param  null|string  $refundedAtTo  Filter results with payment refund after creation date and time in UTC.
     */
    public function __construct(
        protected ?int $page = null,
        protected ?string $externalCustomerId = null,
        protected ?string $externalSubscriptionId = null,
        protected mixed $currency = null,
        protected ?string $feeType = null,
        protected ?string $billableMetricCode = null,
        protected ?string $paymentStatus = null,
        protected ?string $createdAtFrom = null,
        protected ?string $createdAtTo = null,
        protected ?string $succeededAtFrom = null,
        protected ?string $succeededAtTo = null,
        protected ?string $failedAtFrom = null,
        protected ?string $failedAtTo = null,
        protected ?string $refundedAtFrom = null,
        protected ?string $refundedAtTo = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page' => $this->page,
            'external_customer_id' => $this->externalCustomerId,
            'external_subscription_id' => $this->externalSubscriptionId,
            'currency' => $this->currency,
            'fee_type' => $this->feeType,
            'billable_metric_code' => $this->billableMetricCode,
            'payment_status' => $this->paymentStatus,
            'created_at_from' => $this->createdAtFrom,
            'created_at_to' => $this->createdAtTo,
            'succeeded_at_from' => $this->succeededAtFrom,
            'succeeded_at_to' => $this->succeededAtTo,
            'failed_at_from' => $this->failedAtFrom,
            'failed_at_to' => $this->failedAtTo,
            'refunded_at_from' => $this->refundedAtFrom,
            'refunded_at_to' => $this->refundedAtTo,
        ]);
    }
}
