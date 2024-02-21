<?php

use IBroStudio\Lago\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Saloon\Config;

Config::preventStrayRequests();

uses(TestCase::class, RefreshDatabase::class)->in(__DIR__);
