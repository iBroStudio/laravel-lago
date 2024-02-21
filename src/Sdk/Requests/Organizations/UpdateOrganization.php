<?php

namespace IBroStudio\Lago\Sdk\Requests\Organizations;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateOrganization
 *
 * This endpoint is used to update your own organization's settings.
 */
class UpdateOrganization extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/organizations";
	}


	public function __construct()
	{
	}
}
