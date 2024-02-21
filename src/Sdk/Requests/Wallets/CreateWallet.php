<?php

namespace IBroStudio\Lago\Sdk\Requests\Wallets;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWallet
 *
 * This endpoint is used to create a wallet with prepaid credits.
 */
class CreateWallet extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/wallets";
	}


	public function __construct()
	{
	}
}
