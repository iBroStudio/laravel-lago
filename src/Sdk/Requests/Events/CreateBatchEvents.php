<?php

namespace IBroStudio\Lago\Sdk\Requests\Events;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBatchEvents
 *
 * This endpoint is used to send a batch of usage records.
 */
class CreateBatchEvents extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/events/batch";
	}


	public function __construct()
	{
	}
}
