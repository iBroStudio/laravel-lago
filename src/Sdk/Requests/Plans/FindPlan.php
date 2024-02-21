<?php

namespace IBroStudio\Lago\Sdk\Requests\Plans;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findPlan
 *
 * This endpoint retrieves a specific plan.
 */
class FindPlan extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/plans/{$this->code}";
	}


	/**
	 * @param string $code The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance.
	 */
	public function __construct(
		protected string $code,
	) {
	}
}
