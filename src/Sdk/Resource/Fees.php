<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Fees\FindAllFees;
use IBroStudio\Lago\Sdk\Requests\Fees\FindFee;
use IBroStudio\Lago\Sdk\Requests\Fees\UpdateFee;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Fees extends Resource
{
	/**
	 * @param int $page Page number.
	 * @param string $externalCustomerId Unique identifier assigned to the customer in your application.
	 * @param string $externalSubscriptionId External subscription ID
	 * @param mixed $currency Filter results by fee’s currency.
	 * @param string $feeType The fee type. Possible values are `add-on`, `charge`, `credit` or `subscription`.
	 * @param string $billableMetricCode Filter results by the `code` of the billable metric attached to the fee. Only applies to `charge` types.
	 * @param string $paymentStatus Indicates the payment status of the fee. It represents the current status of the payment associated with the fee. The possible values for this field are `pending`, `succeeded`, `failed` and refunded`.
	 * @param string $createdAtFrom Filter results created after creation date and time in UTC.
	 * @param string $createdAtTo Filter results created before creation date and time in UTC.
	 * @param string $succeededAtFrom Filter results with payment success after creation date and time in UTC.
	 * @param string $succeededAtTo Filter results with payment success after creation date and time in UTC.
	 * @param string $failedAtFrom Filter results with payment failure after creation date and time in UTC.
	 * @param string $failedAtTo Filter results with payment failure after creation date and time in UTC.
	 * @param string $refundedAtFrom Filter results with payment refund after creation date and time in UTC.
	 * @param string $refundedAtTo Filter results with payment refund after creation date and time in UTC.
	 */
	public function findAllFees(
		?int $page,
		?string $externalCustomerId,
		?string $externalSubscriptionId,
		mixed $currency,
		?string $feeType,
		?string $billableMetricCode,
		?string $paymentStatus,
		?string $createdAtFrom,
		?string $createdAtTo,
		?string $succeededAtFrom,
		?string $succeededAtTo,
		?string $failedAtFrom,
		?string $failedAtTo,
		?string $refundedAtFrom,
		?string $refundedAtTo,
	): Response
	{
		return $this->connector->send(new FindAllFees($page, $externalCustomerId, $externalSubscriptionId, $currency, $feeType, $billableMetricCode, $paymentStatus, $createdAtFrom, $createdAtTo, $succeededAtFrom, $succeededAtTo, $failedAtFrom, $failedAtTo, $refundedAtFrom, $refundedAtTo));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee’s record within the Lago system.
	 */
	public function findFee(string $lagoId): Response
	{
		return $this->connector->send(new FindFee($lagoId));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee’s record within the Lago system.
	 */
	public function updateFee(string $lagoId): Response
	{
		return $this->connector->send(new UpdateFee($lagoId));
	}
}
