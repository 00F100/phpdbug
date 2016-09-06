<?php
use PHPdbug\Debug;
if(!function_exists('d')){
    function d($var, $exit = true, $save = false)
    {
        return Debug::dump($var, $exit, $save);
    }
}
if(!function_exists('debug')){
    function debug($var, $exit = true, $save = false)
    {
        return Debug::dump($var, $exit, $save);
    }
}