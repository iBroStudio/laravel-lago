<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\BillableMetrics\CreateBillableMetric;
use IBroStudio\Lago\Sdk\Requests\BillableMetrics\DestroyBillableMetric;
use IBroStudio\Lago\Sdk\Requests\BillableMetrics\FindAllBillableMetricGroups;
use IBroStudio\Lago\Sdk\Requests\BillableMetrics\FindAllBillableMetrics;
use IBroStudio\Lago\Sdk\Requests\BillableMetrics\FindBillableMetric;
use IBroStudio\Lago\Sdk\Requests\BillableMetrics\UpdateBillableMetric;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class BillableMetrics extends Resource
{
	/**
	 * @param int $page Page number.
	 */
	public function findAllBillableMetrics(?int $page): Response
	{
		return $this->connector->send(new FindAllBillableMetrics($page));
	}


	public function createBillableMetric(): Response
	{
		return $this->connector->send(new CreateBillableMetric());
	}


	/**
	 * @param string $code Code of the existing billable metric.
	 */
	public function findBillableMetric(string $code): Response
	{
		return $this->connector->send(new FindBillableMetric($code));
	}


	/**
	 * @param string $code Code of the existing billable metric.
	 */
	public function updateBillableMetric(string $code): Response
	{
		return $this->connector->send(new UpdateBillableMetric($code));
	}


	/**
	 * @param string $code Code of the existing billable metric.
	 */
	public function destroyBillableMetric(string $code): Response
	{
		return $this->connector->send(new DestroyBillableMetric($code));
	}


	/**
	 * @param string $code Code of the existing billable metric.
	 * @param int $page Page number.
	 */
	public function findAllBillableMetricGroups(string $code, ?int $page): Response
	{
		return $this->connector->send(new FindAllBillableMetricGroups($code, $page));
	}
}
