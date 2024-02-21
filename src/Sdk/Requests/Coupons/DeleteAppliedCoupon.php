<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteAppliedCoupon
 *
 * This endpoint is used to delete a specific coupon that has been applied to a customer.
 */
class DeleteAppliedCoupon extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/customers/{$this->externalCustomerId}/applied_coupons/{$this->appliedCouponId}";
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application)
     * @param  string  $appliedCouponId  Unique identifier of the applied coupon, created by Lago.
     */
    public function __construct(
        protected string $externalCustomerId,
        protected string $appliedCouponId,
    ) {
    }
}
