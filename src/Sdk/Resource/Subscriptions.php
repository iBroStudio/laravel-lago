<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Subscriptions\CreateSubscription;
use IBroStudio\Lago\Sdk\Requests\Subscriptions\DestroySubscription;
use IBroStudio\Lago\Sdk\Requests\Subscriptions\FindAllSubscriptions;
use IBroStudio\Lago\Sdk\Requests\Subscriptions\FindSubscription;
use IBroStudio\Lago\Sdk\Requests\Subscriptions\UpdateSubscription;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Subscriptions extends Resource
{
	/**
	 * @param int $page Page number.
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application)
	 * @param string $planCode The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans.
	 * @param array $status If the field is not defined, Lago will return only `active` subscriptions. However, if you wish to fetch subscriptions by different status you can define them in a status[] query param. Available filter values: `pending`, `canceled`, `terminated`, `active`.
	 */
	public function findAllSubscriptions(
		?int $page,
		?string $externalCustomerId,
		?string $planCode,
		?array $status,
	): Response
	{
		return $this->connector->send(new FindAllSubscriptions($page, $externalCustomerId, $planCode, $status));
	}


	public function createSubscription(): Response
	{
		return $this->connector->send(new CreateSubscription());
	}


	/**
	 * @param string $externalId External ID of the existing subscription
	 */
	public function findSubscription(string $externalId): Response
	{
		return $this->connector->send(new FindSubscription($externalId));
	}


	/**
	 * @param string $externalId External ID of the existing subscription
	 */
	public function updateSubscription(string $externalId): Response
	{
		return $this->connector->send(new UpdateSubscription($externalId));
	}


	/**
	 * @param string $externalId External ID of the existing subscription
	 * @param string $status If the field is not defined, Lago will terminate only `active` subscriptions. However, if you wish to cancel a `pending` subscription, please ensure that you include `status=pending` in your request.
	 */
	public function destroySubscription(string $externalId, ?string $status): Response
	{
		return $this->connector->send(new DestroySubscription($externalId, $status));
	}
}
