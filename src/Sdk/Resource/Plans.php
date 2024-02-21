<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Plans\CreatePlan;
use IBroStudio\Lago\Sdk\Requests\Plans\DestroyPlan;
use IBroStudio\Lago\Sdk\Requests\Plans\FindAllPlans;
use IBroStudio\Lago\Sdk\Requests\Plans\FindPlan;
use IBroStudio\Lago\Sdk\Requests\Plans\UpdatePlan;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Plans extends Resource
{
	/**
	 * @param int $page Page number.
	 */
	public function findAllPlans(?int $page): Response
	{
		return $this->connector->send(new FindAllPlans($page));
	}


	public function createPlan(): Response
	{
		return $this->connector->send(new CreatePlan());
	}


	/**
	 * @param string $code The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance.
	 */
	public function findPlan(string $code): Response
	{
		return $this->connector->send(new FindPlan($code));
	}


	/**
	 * @param string $code The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance.
	 */
	public function updatePlan(string $code): Response
	{
		return $this->connector->send(new UpdatePlan($code));
	}


	/**
	 * @param string $code The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance.
	 */
	public function destroyPlan(string $code): Response
	{
		return $this->connector->send(new DestroyPlan($code));
	}
}
