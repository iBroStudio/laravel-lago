<?php

namespace IBroStudio\Lago\Sdk\Requests\Subscriptions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateSubscription
 *
 * This endpoint allows you to update a subscription.
 */
class UpdateSubscription extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/subscriptions/{$this->externalId}";
	}


	/**
	 * @param string $externalId External ID of the existing subscription
	 */
	public function __construct(
		protected string $externalId,
	) {
	}
}
