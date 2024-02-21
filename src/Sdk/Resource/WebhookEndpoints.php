<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\WebhookEndpoints\CreateWebhookEndpoint;
use IBroStudio\Lago\Sdk\Requests\WebhookEndpoints\DestroyWebhookEndpoint;
use IBroStudio\Lago\Sdk\Requests\WebhookEndpoints\FindAllWebhookEndpoints;
use IBroStudio\Lago\Sdk\Requests\WebhookEndpoints\FindWebhookEndpoint;
use IBroStudio\Lago\Sdk\Requests\WebhookEndpoints\UpdateWebhookEndpoint;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class WebhookEndpoints extends Resource
{
	/**
	 * @param int $page Page number.
	 */
	public function findAllWebhookEndpoints(?int $page): Response
	{
		return $this->connector->send(new FindAllWebhookEndpoints($page));
	}


	public function createWebhookEndpoint(): Response
	{
		return $this->connector->send(new CreateWebhookEndpoint());
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.
	 */
	public function findWebhookEndpoint(string $lagoId): Response
	{
		return $this->connector->send(new FindWebhookEndpoint($lagoId));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.
	 */
	public function updateWebhookEndpoint(string $lagoId): Response
	{
		return $this->connector->send(new UpdateWebhookEndpoint($lagoId));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.
	 */
	public function destroyWebhookEndpoint(string $lagoId): Response
	{
		return $this->connector->send(new DestroyWebhookEndpoint($lagoId));
	}
}
