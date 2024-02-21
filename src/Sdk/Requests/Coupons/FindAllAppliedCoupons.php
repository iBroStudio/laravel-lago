<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllAppliedCoupons
 *
 * This endpoint is used to list all applied coupons. You can filter by coupon status and by customer.
 */
class FindAllAppliedCoupons extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/applied_coupons';
    }

    /**
     * @param  null|int  $page  Page number.
     * @param  null|string  $status  The status of the coupon. Can be either `active` or `terminated`.
     * @param  null|string  $externalCustomerId  The customer external unique identifier (provided by your own application)
     */
    public function __construct(
        protected ?int $page = null,
        protected ?string $status = null,
        protected ?string $externalCustomerId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'status' => $this->status, 'external_customer_id' => $this->externalCustomerId]);
    }
}
