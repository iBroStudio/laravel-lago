<?php

namespace IBroStudio\Lago\Sdk\Requests\Subscriptions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroySubscription
 *
 * This endpoint allows you to terminate a subscription.
 */
class DestroySubscription extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/subscriptions/{$this->externalId}";
	}


	/**
	 * @param string $externalId External ID of the existing subscription
	 * @param null|string $status If the field is not defined, Lago will terminate only `active` subscriptions. However, if you wish to cancel a `pending` subscription, please ensure that you include `status=pending` in your request.
	 */
	public function __construct(
		protected string $externalId,
		protected ?string $status = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['status' => $this->status]);
	}
}
