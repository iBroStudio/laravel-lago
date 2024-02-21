<?php

namespace IBroStudio\Lago\Sdk\Requests\Wallets;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWalletTransaction
 *
 * This endpoint is used to top-up an active wallet.
 */
class CreateWalletTransaction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/wallet_transactions';
    }

    public function __construct()
    {
    }
}
