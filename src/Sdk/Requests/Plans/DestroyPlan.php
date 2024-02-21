<?php

namespace IBroStudio\Lago\Sdk\Requests\Plans;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyPlan
 *
 * This endpoint deletes a specific plan. Note that this plan could be associated with active
 * subscriptions.
 */
class DestroyPlan extends Request
{
    protected Method $method = Method::DELETE;

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
