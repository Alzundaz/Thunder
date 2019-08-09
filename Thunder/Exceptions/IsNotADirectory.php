<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Exceptions;

class IsNotADirectory extends \Exception
{

    /**
     * IsNotADirectory constructor.
     * @param string $path
     */
    public function __construct(string $path)
    {
        parent::__construct("'$path' is not a directory.");
    }
}
