<?php

namespace IBroStudio\Lago\Sdk\Requests\Events;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findEvent
 *
 * This endpoint is used for retrieving a specific usage measurement event that has been sent to a
 * customer or a subscription.
 */
class FindEvent extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/events/{$this->transactionId}";
	}


	/**
	 * @param string $transactionId This field represents the unique identifier sent for this specific event.
	 */
	public function __construct(
		protected string $transactionId,
	) {
	}
}
