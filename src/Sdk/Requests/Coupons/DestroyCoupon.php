<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyCoupon
 *
 * This endpoint is used to delete a coupon.
 */
class DestroyCoupon extends Request
{
    protected Method $method = Method::DELETE;

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
