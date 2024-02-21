<?php

namespace IBroStudio\Lago\Sdk\Requests\AddOns;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateAddOn
 *
 * This endpoint is used to update an existing add-on.
 */
class UpdateAddOn extends Request
{
	protected Method $method = Method::PUT;


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
