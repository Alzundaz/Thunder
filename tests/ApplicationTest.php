<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Tests;

use PHPUnit\Framework\TestCase;
use Thunder\Application;

class ApplicationTest extends TestCase
{
    public function testInstance()
    {
        $app = new Application();
        $this->assertInstanceOf('\Thunder\Application', $app);
    }
}
