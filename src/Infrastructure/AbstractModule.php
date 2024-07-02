<?php

/**
 * This file is part of module-api
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Slick\ModuleApi\Infrastructure;

use Dotenv\Dotenv;
use Slick\ModuleApi\Infrastructure\Console\ConsoleModuleInterface;
use Slick\ModuleApi\Infrastructure\FrontController\WebModuleInterface;
use Symfony\Component\Console\Application;

/**
 * AbstractModule
 *
 * @package Slick\ModuleApi\Infrastructure
 */
abstract class AbstractModule implements FrontController\WebModuleInterface, Console\ConsoleModuleInterface
{

    /**
     * @inheritDoc
     */
    public function services(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function settings(Dotenv $dotenv): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function name(): string
    {
        $parts = explode('\\', get_called_class());
        $last = array_pop($parts);
        return $this->camelToSnake(str_replace('Module', '', $last));
    }

    /**
     * @inheritDoc
     */
    public function description(): ?string
    {
        return null;
    }

    public function configureConsole(Application $cli): void
    {
        // do nothing: no need to do anything
    }

    public function middlewareHandlers(): array
    {
        return [];
    }

    /**
     * Convert a camel case string to snake case.
     *
     * @param string $camelCase The camel case string to convert.
     * @param string $glue The glue character to use. Default is '_'.
     * @return string Returns the snake case string.
     */
    private function camelToSnake(string $camelCase, string $glue = '_'): string
    {
        $result = '';

        for ($i = 0; $i < strlen($camelCase); $i++) {
            $char = $camelCase[$i];
            $result .= (ctype_upper($char)) ? $glue . strtolower($char) : $char;
        }

        return ltrim($result, $glue);
    }
}
