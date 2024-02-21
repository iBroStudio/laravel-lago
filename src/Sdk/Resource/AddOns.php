<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\AddOns\CreateAddOn;
use IBroStudio\Lago\Sdk\Requests\AddOns\DestroyAddOn;
use IBroStudio\Lago\Sdk\Requests\AddOns\FindAddOn;
use IBroStudio\Lago\Sdk\Requests\AddOns\FindAllAddOns;
use IBroStudio\Lago\Sdk\Requests\AddOns\UpdateAddOn;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class AddOns extends Resource
{
	/**
	 * @param int $page Page number.
	 */
	public function findAllAddOns(?int $page): Response
	{
		return $this->connector->send(new FindAllAddOns($page));
	}


	public function createAddOn(): Response
	{
		return $this->connector->send(new CreateAddOn());
	}


	/**
	 * @param string $code Unique code used to identify the add-on.
	 */
	public function findAddOn(string $code): Response
	{
		return $this->connector->send(new FindAddOn($code));
	}


	/**
	 * @param string $code Unique code used to identify the add-on.
	 */
	public function updateAddOn(string $code): Response
	{
		return $this->connector->send(new UpdateAddOn($code));
	}


	/**
	 * @param string $code Unique code used to identify the add-on.
	 */
	public function destroyAddOn(string $code): Response
	{
		return $this->connector->send(new DestroyAddOn($code));
	}
}
