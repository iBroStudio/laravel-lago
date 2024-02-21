<?php

namespace IBroStudio\Lago\Sdk\Requests\AddOns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAddOn
 *
 * This endpoint is used to retrieve a specific add-on.
 */
class FindAddOn extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/add_ons/{$this->code}";
	}


	/**
	 * @param string $code Unique code used to identify the add-on.
	 */
	public function __construct(
		protected string $code,
	) {
	}
}
