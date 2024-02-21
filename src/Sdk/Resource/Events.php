<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Events\CreateBatchEvents;
use IBroStudio\Lago\Sdk\Requests\Events\CreateEvent;
use IBroStudio\Lago\Sdk\Requests\Events\EventEstimateFees;
use IBroStudio\Lago\Sdk\Requests\Events\FindEvent;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Events extends Resource
{
    public function createEvent(): Response
    {
        return $this->connector->send(new CreateEvent());
    }

    public function createBatchEvents(): Response
    {
        return $this->connector->send(new CreateBatchEvents());
    }

    public function eventEstimateFees(): Response
    {
        return $this->connector->send(new EventEstimateFees());
    }

    /**
     * @param  string  $transactionId  This field represents the unique identifier sent for this specific event.
     */
    public function findEvent(string $transactionId): Response
    {
        return $this->connector->send(new FindEvent($transactionId));
    }
}
