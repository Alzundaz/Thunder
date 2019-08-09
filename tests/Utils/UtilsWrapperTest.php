<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Tests\Utils;

use PHPUnit\Framework\TestCase;
use Thunder\Application;
use Thunder\Utils\UtilsWrapper;

class UtilsWrapperTest extends TestCase
{
    public function testInstance()
    {
        $app = new Application();
        $wrapper = new UtilsWrapper($app);

        $this->assertInstanceOf('\Thunder\Utils\UtilsWrapper', $wrapper);
    }

    public function testFile()
    {
        $app = new Application();
        $wrapper = new UtilsWrapper($app);

        $this->assertInstanceOf('\Thunder\Utils\File', $wrapper->getFile());
    }
}
