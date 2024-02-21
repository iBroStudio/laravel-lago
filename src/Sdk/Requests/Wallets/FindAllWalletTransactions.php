<?php

namespace IBroStudio\Lago\Sdk\Requests\Wallets;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllWalletTransactions
 *
 * This endpoint is used to list all wallet transactions.
 */
class FindAllWalletTransactions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/wallets/{$this->lagoId}/wallet_transactions";
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
	 * @param null|int $page Page number.
	 * @param null|string $status The status of the wallet transaction. Possible values are `pending` or `settled`.
	 * @param null|string $transactionType The transaction type of the wallet transaction. Possible values are `inbound` (increasing the wallet balance) or `outbound` (decreasing the wallet balance).
	 */
	public function __construct(
		protected string $lagoId,
		protected ?int $page = null,
		protected ?string $status = null,
		protected ?string $transactionType = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'status' => $this->status, 'transaction_type' => $this->transactionType]);
	}
}
