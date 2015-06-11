<?php
/**
 * CodeEval Challenge Task Runner
 * 
 * PHP version 5
 * 
 * @category TaskRunner
 * @package  CodeEval
 * @author   Marcello Messori <marcello.mm.messori@gmail.com>
 * @license  MIT <http://opensource.org/licenses/MIT>
 * @link     http://www.codeeval.com/profile/double-m
 */

/**
 * RoboFile Class
 * 
 * PHP version 5
 * 
 * @category TaskRunner
 * @package  CodeEval
 * @author   Marcello Messori <marcello.mm.messori@gmail.com>
 * @license  MIT <http://opensource.org/licenses/MIT>
 * @link     http://www.codeeval.com/profile/double-m
 */
class RoboFile extends \Robo\Tasks
{
    /**
     * Run code against the test file 
     *
     * @return null
     */
    function start()
    {
        $this->taskExec('php src/app.php res/test_file.txt')->run()->wasSuccessful();
    }

    /**
     * Run php_codesniffer
     *
     * @return null
     */
    function sniff()
    {
        if ($this->taskExec('phpcs */*.php')->run()->wasSuccessful()) {
            $this->say('phpcs checks passed');
        }
    }

    /**
     * Run tests using phpunit
     *
     * @return null
     */
    function test()
    {
        if ($this->taskExec('phpunit test/*.php')->run()->wasSuccessful()) {
            $this->say('phpunit tests passed');
        }
    }
}
