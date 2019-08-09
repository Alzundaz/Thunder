<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder\Utils;

use Thunder\Application;

class UtilsWrapper
{
    /**
     * @var Thunder\Application
     */
    private $application;

    /**
     * @var Thunder\Utils\File
     */
    private $file;

    public function __construct(Application $application)
    {
        $this->application = $application;
        $this->file = new File($application);
    }

    /**
     * Get File util.
     *
     * @return File
     */
    public function getFile(): File
    {
        return $this->file;
    }
}
