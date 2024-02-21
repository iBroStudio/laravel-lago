<?php

namespace IBroStudio\Lago\Sdk\Requests\WebhookEndpoints;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findWebhookEndpoint
 *
 * This endpoint is used to retrieve an existing webhook endpoint.
 */
class FindWebhookEndpoint extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhook_endpoints/{$this->lagoId}";
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.
	 */
	public function __construct(
		protected string $lagoId,
	) {
	}
}
