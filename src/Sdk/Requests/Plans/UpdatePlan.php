<?php

namespace IBroStudio\Lago\Sdk\Requests\Plans;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updatePlan
 *
 * This endpoint updates a specific plan with subscription and usage-based charges. It supports
 * flexible billing cadence (in-advance or in-arrears) and allows for both recurring and metered
 * charges.
 */
class UpdatePlan extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/plans/{$this->code}";
    }

    /**
     * @param  string  $code  The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance.
     */
    public function __construct(
        protected string $code,
    ) {
    }
}
