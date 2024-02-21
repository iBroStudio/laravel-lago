<?php

namespace IBroStudio\Lago\Sdk\Requests\Plans;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createPlan
 *
 * This endpoint creates a plan with subscription and usage-based charges. It supports flexible billing
 * cadence (in-advance or in-arrears) and allows for both recurring and metered charges.
 */
class CreatePlan extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/plans';
    }

    public function __construct()
    {
    }
}
