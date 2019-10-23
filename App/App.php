<?php
/**
 * @author Fahad Hussain
 * Copyright(c) 2019.
 */

require __DIR__ . '/Validation/Check.php';
require __DIR__ . '/Scrapper/Scrap.php';

/**
 * Class App
 */
class App
{
    /**
     * @var array
     */
    protected $argv;
    /**
     * @var array
     */
    protected $options;

    /**
     * App constructor.
     * @param $argv
     * @param $options
     */
    public function __construct($argv, $options)
    {
        $this->argv = $argv;
        $this->options = $options;
    }

    function run(){
        $check = new Check();
        $scrapper = new Scrap();
        $url = $check->verify($this->argv, $this->options);
        fwrite(STDOUT, $scrapper->scrapUrl($url) . PHP_EOL);
    }

}