<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCoupon
 *
 * This endpoint is used to update a coupon that can be then attached to a customer to create a
 * discount.
 */
class UpdateCoupon extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/coupons/{$this->code}";
    }

    /**
     * @param  string  $code  Unique code used to identify the coupon.
     */
    public function __construct(
        protected string $code,
    ) {
    }
}
