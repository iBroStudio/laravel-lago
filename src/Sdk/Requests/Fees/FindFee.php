<?php

namespace IBroStudio\Lago\Sdk\Requests\Fees;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findFee
 *
 * This endpoint is used for retrieving a specific fee that has been issued.
 */
class FindFee extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/fees/{$this->lagoId}";
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee’s record within the Lago system.
     */
    public function __construct(
        protected string $lagoId,
    ) {
    }
}
