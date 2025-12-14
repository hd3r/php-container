<?php

declare(strict_types=1);

namespace Hd3r\Container\Tests\Integration\Fixtures;

class TestService
{
}

class TestController
{
    public function __construct(public TestService $service)
    {
    }
}

class DeepController
{
    public function __construct(public TestController $controller)
    {
    }
}

class ServiceWithDefaults
{
    public function __construct(
        public string $value = 'default',
        public int $number = 42,
    ) {
    }
}
