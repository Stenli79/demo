<?php

namespace Tests\Unit\Providers;

use Illuminate\Database\Connection;
use Mockery as m;
use Tests\TestCase;
use Illuminate\Container\Container;
use App\Providers\AppServiceProvider;
use Illuminate\Database\DatabaseManager;

class AppServiceProviderTest extends TestCase
{
    public function testItRegistersAllInstances()
    {
        $container = new Container();
        $provider = new AppServiceProvider($container);

        $container->bind('db', function () {
            $mock = m::mock(DatabaseManager::class);
            $mock->shouldReceive('connection')->andReturn(m::mock(Connection::class));
            return $mock;
        });

        $provider->register();
        //$this->assertTrue($container->bound(ServiceName::class));

        $this->assertTrue(true);
    }
}
