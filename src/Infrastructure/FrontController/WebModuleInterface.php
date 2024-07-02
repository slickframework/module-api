<?php

/**
 * This file is part of module-api
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Slick\ModuleApi\Infrastructure\FrontController;

use Slick\ModuleApi\Infrastructure\SlickModuleInterface;

/**
 * WebModuleInterface
 *
 * @package FrontController
 */
interface WebModuleInterface extends SlickModuleInterface
{

    /**
     * Returns an array of middleware handlers used in the application.
     *
     * @return array<MiddlewareHandlerInterface> An array of middleware handlers used in the application.
     */
    public function middlewareHandlers(): array;
}
