<?php

/**
 * This file is part of module-api
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Slick\ModuleApi\Infrastructure\Exception;

use RuntimeException;
use Slick\ModuleApi\ModuleApiException;

/**
 * InvalidMiddlewarePosition
 *
 * @package Slick\ModuleApi\Infrastructure\Exception
 */
final class InvalidMiddlewarePosition extends RuntimeException implements ModuleApiException
{

}
