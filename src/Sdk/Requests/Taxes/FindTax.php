<?php

namespace IBroStudio\Lago\Sdk\Requests\Taxes;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findTax
 *
 * This endpoint retrieves an existing tax representing a customizable tax rate applicable to either
 * the organization or a specific customer. The tax is identified by its unique code.
 */
class FindTax extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/taxes/{$this->code}";
	}


	/**
	 * @param string $code The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
	 */
	public function __construct(
		protected string $code,
	) {
	}
}
