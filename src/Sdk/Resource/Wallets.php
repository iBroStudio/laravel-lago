<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Wallets\CreateWallet;
use IBroStudio\Lago\Sdk\Requests\Wallets\CreateWalletTransaction;
use IBroStudio\Lago\Sdk\Requests\Wallets\DestroyWallet;
use IBroStudio\Lago\Sdk\Requests\Wallets\FindAllWalletTransactions;
use IBroStudio\Lago\Sdk\Requests\Wallets\FindAllWallets;
use IBroStudio\Lago\Sdk\Requests\Wallets\FindWallet;
use IBroStudio\Lago\Sdk\Requests\Wallets\UpdateWallet;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Wallets extends Resource
{
	/**
	 * @param int $page Page number.
	 * @param string $externalCustomerId The customer external unique identifier (provided by your own application).
	 */
	public function findAllWallets(?int $page, string $externalCustomerId): Response
	{
		return $this->connector->send(new FindAllWallets($page, $externalCustomerId));
	}


	public function createWallet(): Response
	{
		return $this->connector->send(new CreateWallet());
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
	 */
	public function findWallet(string $lagoId): Response
	{
		return $this->connector->send(new FindWallet($lagoId));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
	 */
	public function updateWallet(string $lagoId): Response
	{
		return $this->connector->send(new UpdateWallet($lagoId));
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
	 */
	public function destroyWallet(string $lagoId): Response
	{
		return $this->connector->send(new DestroyWallet($lagoId));
	}


	public function createWalletTransaction(): Response
	{
		return $this->connector->send(new CreateWalletTransaction());
	}


	/**
	 * @param string $lagoId Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet’s record within the Lago system.
	 * @param int $page Page number.
	 * @param string $status The status of the wallet transaction. Possible values are `pending` or `settled`.
	 * @param string $transactionType The transaction type of the wallet transaction. Possible values are `inbound` (increasing the wallet balance) or `outbound` (decreasing the wallet balance).
	 */
	public function findAllWalletTransactions(
		string $lagoId,
		?int $page,
		?string $status,
		?string $transactionType,
	): Response
	{
		return $this->connector->send(new FindAllWalletTransactions($lagoId, $page, $status, $transactionType));
	}
}
