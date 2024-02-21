<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCoupon
 *
 * This endpoint is used to create a coupon that can be then attached to a customer to create a
 * discount.
 */
class CreateCoupon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/coupons";
	}


	public function __construct()
	{
	}
}
