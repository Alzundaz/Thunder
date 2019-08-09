<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Utils;

use Thunder\Application;
use Thunder\Exceptions\IsNotADirectory;

class File
{

    /**
     * @var Thunder\Application
     */
    private $application;

    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * List all directories in a directory.
     *
     * @param string $path
     * @param bool $absolute
     * @return array
     * @throws IsNotADirectory
     */
    public function listDirectories(string $path, bool $absolute = false): array
    {
        if (!is_dir($path))
        {
            throw new IsNotADirectory($path);
        }
        $files = scandir($path);
        $directories = array_filter(
            $files,
            function ($file) use ($path)
            {
                return is_dir($path . '/' . $file) &&
                       !in_array($file, ['.', '..']);
            }
        );

        if ($absolute)
        {
            $directories = array_map(
                function ($directory) use ($path)
                {
                    return $path . '/' . $directory;
                },
                $directories
            );
        }

        return array_values($directories);
    }
}
