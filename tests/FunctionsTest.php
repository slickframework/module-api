<?php

/**
 * This file is part of web-stack
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Test\Slick\ModuleApi;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use function Slick\ModuleApi\constantValue;
use function Slick\ModuleApi\importSettingsFile;
use function Slick\ModuleApi\mergeArrays;

/**
 * FunctionsTest
 *
 * @package Test\Slick\WebStack
 */
class FunctionsTest extends TestCase
{

    #[Test]
    public function checkConstant(): void
    {
        $this->assertEquals(APP_ROOT, constantValue('APP_ROOT', '/test'));
        $this->assertEquals('test', constantValue('_OTHER_CONST', 'test'));
    }

    #[Test]
    public function importSettingsMissingFile(): void
    {
        $file = '/some/file.php';
        $this->assertEquals([], importSettingsFile($file));
    }

    #[Test]
    public function mergeArrayDifferent(): void
    {
        $arr1 = ["foo" => "bar"];
        $arr2 = ["test" => "baz"];
        $this->assertEquals([
            'foo' => 'bar',
            'test' => 'baz',
        ], mergeArrays($arr1, $arr2));
    }

    #[Test]
    public function mergeArrayOverride(): void
    {
        $arr1 = ["foo" => "bar"];
        $arr2 = ["foo" => "baz"];
        $this->assertEquals([
            'foo' => 'baz',
        ], mergeArrays($arr1, $arr2));
    }

    #[Test]
    public function mergeArrayDeep(): void
    {
        $arr1 = ["foo" => ["bar" => "test"]];
        $arr2 = ["foo" => ["baz" => "bar"]];
        $this->assertEquals([
            'foo' => ['baz' => 'bar', 'bar' => 'test'],
        ], mergeArrays($arr1, $arr2));
    }

    #[Test]
    public function importSettings(): void
    {
        $file = __DIR__ .'/settings-demo.php';
        $this->assertEquals(["foo" => "bar"], importSettingsFile($file));
    }
}
