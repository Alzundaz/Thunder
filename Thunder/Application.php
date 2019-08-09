<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

namespace Thunder;

use Thunder\Utils\UtilsWrapper;

class Application
{

    /**
     * Default options.
     *
     * @var array
     */
    private static $DEFAULT_OPTIONS = [
        'base'        => '.',
        'environment' => 'global'
    ];

    /**
     * Active options.
     *
     * @var array
     */
    private $options;

    /**
     * @var Thunder\Tests\Utils\UtilsWrapper
     */
    private $utilsWrapper;

    public function __construct(array $options = [])
    {
        $this->options =
            array_merge(self::$DEFAULT_OPTIONS, $options);
        $this->utilsWrapper = new UtilsWrapper($this);
    }
}
