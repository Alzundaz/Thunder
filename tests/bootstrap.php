<?php
/**
 * Thunder Framework (https://www.alzundaz.fr/Thunder)
 *
 * @license https://github.com/Alzundaz/Thunder/blob/master/LICENSE (MIT License)
 */

require_once(__DIR__ . '/constants.php');
require_once(__DIR__ . '/functions.php');

deleteDirectory(PHP_UNIT_TEST_DIR);
mkdir(PHP_UNIT_TEST_DIR, 0700);
copySets();
