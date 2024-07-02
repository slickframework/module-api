<?php
/**
 * This file is part of web-stack
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\Slick\ModuleApi\Infrastructure\FrontController;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Slick\ModuleApi\Infrastructure\FrontController\MiddlewareHandler;
use Slick\ModuleApi\Infrastructure\FrontController\MiddlewarePosition;
use Slick\ModuleApi\Infrastructure\FrontController\Position;

class MiddlewareHandlerTest extends TestCase
{
    private MiddlewareHandler $handler;
    private $name;
    private $position;
    private $middleware;

    protected function setUp(): void
    {
        $this->name = "Handler";
        $this->position = new MiddlewarePosition(Position::Top);
        $this->middleware = 'some.service';
        $this->handler = new MiddlewareHandler(
            $this->name,
            $this->position,
            $this->middleware
        );
    }


    public function testName()
    {
        $this->assertEquals($this->name, $this->handler->name());
    }

    #[Test]
    public function initializable(): void
    {
        $this->assertInstanceOf(MiddlewareHandler::class, $this->handler);
    }

    public function testMiddlewarePosition()
    {
        $this->assertSame($this->position, $this->handler->middlewarePosition());
    }

    public function testHandler()
    {
        $this->assertEquals($this->middleware, $this->handler->handler());
    }
}
