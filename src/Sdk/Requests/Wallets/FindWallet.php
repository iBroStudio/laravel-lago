<?php

namespace IBroStudio\Lago\Sdk\Requests\Wallets;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findWallet
 *
 * This endpoint is used to retrieve an existing wallet with prepaid credits.
 */
class FindWallet extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/wallets/{$this->lagoId}";
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
     */
    public function __construct(
        protected string $lagoId,
    ) {
    }
}
