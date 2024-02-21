<?php

namespace IBroStudio\Lago\Sdk\Requests\Wallets;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllWallets
 *
 * This endpoint is used to list all wallets with prepaid credits.
 */
class FindAllWallets extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/wallets";
	}


	/**
	 * @param null|int $page Page number.
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application).
	 */
	public function __construct(
		protected ?int $page = null,
		protected string $externalCustomerId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'external_customer_id' => $this->externalCustomerId]);
	}
}
