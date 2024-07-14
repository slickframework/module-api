<?php

/**
 * This file is part of module-api
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Slick\ModuleApi\Infrastructure\Console;

use Slick\Di\ContainerInterface;
use Slick\ModuleApi\Infrastructure\SlickModuleInterface;
use Symfony\Component\Console\Application;

/**
 * ConsoleModuleInterface
 *
 * @package Slick\ModuleApi\Infrastructure\Console
 */
interface ConsoleModuleInterface extends SlickModuleInterface
{

    public function configureConsole(Application $cli, ContainerInterface $container): void;
}
