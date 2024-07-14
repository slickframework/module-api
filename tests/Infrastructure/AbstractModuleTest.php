<?php
/**
 * This file is part of web-stack
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\Slick\ModuleApi\Infrastructure;

use Dotenv\Dotenv;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use Slick\Di\ContainerInterface;
use Slick\ModuleApi\Infrastructure\AbstractModule;
use Symfony\Component\Console\Application;

class AbstractModuleTest extends TestCase
{
    use ProphecyTrait;

    #[Test]
    public function initializable(): void
    {
        $module = new DummyModule();
        $this->assertInstanceOf(AbstractModule::class, $module);
    }

    #[Test]
    public function services(): void
    {
        $module = new DummyModule();
        $this->assertEquals([], $module->services());
    }

    #[Test]
    public function settings(): void
    {
        $dotenv = $this->prophesize(Dotenv::class)->reveal();
        $module = new DummyModule();
        $this->assertEquals([], $module->settings($dotenv));
    }

    #[Test]
    public function computeName(): void
    {
        $module = new DummyModule();
        $this->assertEquals('dummy', $module->name());
        $this->assertEquals(null, $module->description());
    }

    #[Test]
    public function middlewares(): void
    {
        $container = $this->prophesize(ContainerInterface::class)->reveal();
        $module = new DummyModule();
        $module->configureConsole($this->prophesize(Application::class)->reveal(), $container);
        $this->assertEquals([], $module->middlewareHandlers());
    }

    #[Test]
    public function events(): void
    {
        $module = new DummyModule();
        $module->onDisable();
        $module->onEnable();
        $this->assertInstanceOf(AbstractModule::class, $module);
    }
}
