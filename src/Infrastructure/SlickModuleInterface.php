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

/**
 * SlickModuleInterface
 *
 */
interface SlickModuleInterface
{
    /**
     * Returns an array of dependency container service definitions.
     *
     * @return array<string, mixed> The array of available services.
     */
    public function services(): array;

    /**
     * Returns an array of module modules.
     *
     * @param Dotenv $dotenv Environment variables store.
     * @return array<string, mixed> The array of application modules.
     */
    public function settings(Dotenv $dotenv): array;

    /**
     * Return the module's name
     *
     * @return string
     */
    public function name(): string;

    /**
     * Return the module's description
     *
     * @return string|null
     */
    public function description(): ?string;

    /**
     * Called whenever the module is enabled
     *
     * @param array<string, mixed> $context
     * @return void
     */
    public function onEnable(array $context = []): void;

    /**
     * Handle the event when the module is disabled
     *
     * @param array<string, mixed> $context
     * @return void
     */
    public function onDisable(array $context = []): void;
}
