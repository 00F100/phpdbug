<?php
use PHPdbug\Debug;
if(!function_exists('d')){
    function d($var, $exit = false, $forceConsole = false, $save = false, $backtrace = false)
    {
        return Debug::dump($var, $exit, $forceConsole, $save, $backtrace);
    }
}
if(!function_exists('debug')){
    function debug($var, $exit = false, $forceConsole = false, $save = false, $backtrace = false)
    {
        return Debug::dump($var, $exit, $forceConsole, $save, $backtrace);
    }
}