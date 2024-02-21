<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findCoupon
 *
 * This endpoint is used to retrieve a specific coupon.
 */
class FindCoupon extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/coupons/{$this->code}";
	}


	/**
	 * @param string $code Unique code used to identify the coupon.
	 */
	public function __construct(
		protected string $code,
	) {
	}
}
