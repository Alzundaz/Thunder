<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

/**
 * Print debug values during phpunit test.
 *
 * @param mixed ...$values Values to print.
 */
function debug_tests(...$values)
{
    fputs(STDERR, print_r($values, true));
}

/**
 * Copy files from sets to test directory.
 *
 * @param string $file Path to file.
 * @return bool true on success or false on failure.
 */
function copySets(string $file = '.'): bool
{
    $source = __DIR__ . DS . 'sets' . DS . $file;
    $destination = PHP_UNIT_TEST_DIR . DS . $file;
    if (is_file($source))
    {
        return copy($source, $destination);
    }

    if (!is_dir($destination))
    {
        if (!mkdir($destination, 0700))
        {
            return false;
        }
    }

    foreach (scandir($source) as $newFile)
    {
        if (in_array($newFile, ['.', '..']))
        {
            continue;
        }

        if (!copySets($file . DS . $newFile))
        {
            return false;
        }
    }

    return true;
}

/**
 * Delete a directory and all the files it contains.
 *
 * @param string $dir Path to directory
 * @return bool True if directory is correctly remove. False otherwise.
 */
function deleteDirectory(string $dir)
{
    if (!file_exists($dir))
    {
        return true;
    }
    if (!is_dir($dir))
    {
        return unlink($dir);
    }
    foreach (scandir($dir) as $item)
    {
        if ($item == '.' || $item == '..')
        {
            continue;
        }
        if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item))
        {
            return false;
        }
    }
    return rmdir($dir);
}
