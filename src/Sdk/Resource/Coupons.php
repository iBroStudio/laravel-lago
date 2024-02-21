<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Coupons\ApplyCoupon;
use IBroStudio\Lago\Sdk\Requests\Coupons\CreateCoupon;
use IBroStudio\Lago\Sdk\Requests\Coupons\DeleteAppliedCoupon;
use IBroStudio\Lago\Sdk\Requests\Coupons\DestroyCoupon;
use IBroStudio\Lago\Sdk\Requests\Coupons\FindAllAppliedCoupons;
use IBroStudio\Lago\Sdk\Requests\Coupons\FindAllCoupons;
use IBroStudio\Lago\Sdk\Requests\Coupons\FindCoupon;
use IBroStudio\Lago\Sdk\Requests\Coupons\UpdateCoupon;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Coupons extends Resource
{
	/**
	 * @param int $page Page number.
	 * @param string $status The status of the coupon. Can be either `active` or `terminated`.
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application)
	 */
	public function findAllAppliedCoupons(?int $page, ?string $status, ?string $externalCustomerId): Response
	{
		return $this->connector->send(new FindAllAppliedCoupons($page, $status, $externalCustomerId));
	}


	public function applyCoupon(): Response
	{
		return $this->connector->send(new ApplyCoupon());
	}


	/**
	 * @param int $page Page number.
	 */
	public function findAllCoupons(?int $page): Response
	{
		return $this->connector->send(new FindAllCoupons($page));
	}


	public function createCoupon(): Response
	{
		return $this->connector->send(new CreateCoupon());
	}


	/**
	 * @param string $code Unique code used to identify the coupon.
	 */
	public function findCoupon(string $code): Response
	{
		return $this->connector->send(new FindCoupon($code));
	}


	/**
	 * @param string $code Unique code used to identify the coupon.
	 */
	public function updateCoupon(string $code): Response
	{
		return $this->connector->send(new UpdateCoupon($code));
	}


	/**
	 * @param string $code Unique code used to identify the coupon.
	 */
	public function destroyCoupon(string $code): Response
	{
		return $this->connector->send(new DestroyCoupon($code));
	}


	/**
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application)
	 * @param string $appliedCouponId Unique identifier of the applied coupon, created by Lago.
	 */
	public function deleteAppliedCoupon(string $externalCustomerId, string $appliedCouponId): Response
	{
		return $this->connector->send(new DeleteAppliedCoupon($externalCustomerId, $appliedCouponId));
	}
}
