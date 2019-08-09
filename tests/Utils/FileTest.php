<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Tests\Utils;

use PHPUnit\Framework\TestCase;
use Thunder\Application;
use Thunder\Exceptions\IsNotADirectory;
use Thunder\Utils\File;

class FileTest extends TestCase
{

    public function testInstance()
    {
        $app = new Application();
        $file = new File($app);

        $this->assertInstanceOf('\Thunder\Utils\File', $file);
    }

    public function testListDirectoriesSimpleDirectory()
    {
        $app = new Application();
        $file = new File($app);

        $this->assertEquals(
            ['components'],
            $file->listDirectories(PHP_UNIT_TEST_DIR . '/simpleComponent')
        );
    }

    public function testListDirectoriesFiles()
    {
        $app = new Application();
        $file = new File($app);

        $this->assertEquals(
            [],
            $file->listDirectories(
                PHP_UNIT_TEST_DIR . '/simpleComponent/components/Test'
            )
        );
    }

    public function testListDirectoriesAbsolute()
    {
        $app = new Application();
        $file = new File($app);

        $this->assertEquals(
            [PHP_UNIT_TEST_DIR . '/simpleComponent/components'],
            $file->listDirectories(PHP_UNIT_TEST_DIR . '/simpleComponent', true)
        );
    }

    public function testListDirectoriesNonExistent()
    {
        $app = new Application();
        $file = new File($app);

        $this->expectException(IsNotADirectory::class);
        $file->listDirectories(
            PHP_UNIT_TEST_DIR . '/simpleComponent/nonexistent'
        );
    }
}
