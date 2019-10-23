<?php
/**
 * @author Fahad Hussain
 * Copyright(c) 2019.
 */

/**
 * Class Check
 */
class Check
{

    /**
     * @param $argv
     * @param $options
     */
    function verify($argv, $options)
    {
        if (count($argv) === 1) {
            fwrite(STDOUT, "\e[0;32;40mPHP Webscrapper CLI version 0.0.1 \e[0m" . PHP_EOL . PHP_EOL);
            fwrite(STDOUT, "\e[1;33;40mUsage\e[0m" . PHP_EOL . PHP_EOL);
            fwrite(STDOUT, "  command [options] [arguments]" . PHP_EOL . PHP_EOL);
            fwrite(STDOUT, "\e[1;33;40mOptions\e[0m" . PHP_EOL . PHP_EOL);
            fwrite(STDOUT, "  \e[0;32;40m--plpurl\e[0m    Accpets plp url for information scrapping." . PHP_EOL . PHP_EOL);
            exit();
        }
        if (!isset($options['plpurl'])) {
            fwrite(STDOUT, "\e[1;37;41mPlease provide required plp url --plpurl\e[0m" . PHP_EOL);
            exit();
        }
        if (filter_var($options['plpurl'], FILTER_VALIDATE_URL) === FALSE) {
            fwrite(STDOUT, "\e[1;37;41mNot a valid URL\e[0m" . PHP_EOL);
            fwrite(STDOUT, "It should be of format https://www.example.com/" . PHP_EOL);
            exit();
        }
        return $options['plpurl'];
    }
}
