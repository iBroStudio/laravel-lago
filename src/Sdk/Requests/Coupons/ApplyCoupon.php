<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * applyCoupon
 *
 * This endpoint is used to apply a specific coupon to a customer, before or during a subscription.
 */
class ApplyCoupon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/applied_coupons";
	}


	public function __construct()
	{
	}
}
