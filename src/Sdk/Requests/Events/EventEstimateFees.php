<?php

namespace IBroStudio\Lago\Sdk\Requests\Events;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * eventEstimateFees
 *
 * Estimate the fees that would be created after reception of an event for a billable metric attached
 * to one or multiple pay in advance charges
 */
class EventEstimateFees extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/events/estimate_fees';
    }

    public function __construct()
    {
    }
}
