<?php
use PHPdbug\Debug;
if(!function_exists('d')){
    function d($var, $exit = false, $save = false, $backtrace = false)
    {
        return Debug::dump($var, $exit, $save, $backtrace);
    }
}
if(!function_exists('debug')){
    function debug($var, $exit = false, $save = false, $backtrace = false)
    {
        return Debug::dump($var, $exit, $save, $backtrace);
    }
}