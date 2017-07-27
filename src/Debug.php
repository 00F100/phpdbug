<?php
/**
 * PHPdbug class
 *
 * @package PHPdbug
 * @author    João Moraes <joaomoraesbr@gmail.com>
 * @link         João Moraes <joaomoraesbr@gmail.com>
 */
namespace PHPdbug
{
    class Debug
    {
        public static function dump($var, $exit = true)
        {
            if(true){
                $filename = false;
                $file = debug_backtrace();
                $file = next($file);
                if(array_key_exists('file', $file) && array_key_exists('line', $file)){
                    $filename = $file['file'] . ':' . $file['line'];
                }
                $type = gettype($var);
                if(php_sapi_name() == 'cli' || $_SERVER['HTTP_ACCEPT'] == 'application/json'){
                    echo "\n\n";
                    if($filename){
                        echo 'File: ' . $filename . "\n";
                    }
                    echo 'Type: ' . $type . "\n";
                    echo '####################################';
                    echo "\n";
                    if($type == 'boolean'){
                        if($var === 1 || $var === '1'){
                            echo 'true';
                        }else{
                            echo 'false';
                        }
                    }else{
                        print_r($var);
                    }
                    echo "\n####################################\n\n";
                }else{
                    echo '<pre>';
                    if($filename){
                        echo 'File: <strong>' . $filename . '</strong>';
                    }
                    echo '<br>';
                    echo 'Type: <strong>' . $type . '</strong>';
                    echo '<br><br><blockquote style="background: #f7ffd5; padding: 20px; margin: 0px;">';
                    if($type == 'boolean'){
                        if($var == 1 || $var == '1'){
                            echo 'true';
                        }else{
                            echo 'false';
                        }
                    }else{
                        print_r($var);
                    }
                    echo '</blockquote><br>';
                    echo 'Trace:';
                    echo '<ul>';
                    $debug_list = debug_backtrace();
                    unset($debug_list[0]);
                    foreach($debug_list as $debug){
                        if(array_key_exists('file', $debug) && array_key_exists('line', $debug)){
                            echo '<li>' . $debug['file'] . ':' . $debug['line'] . '</li>';
                        }
                    }
                    echo '</ul>';
                    echo '</pre><hr>';
                }
            }
            if($exit){
                exit;
            }
        }
    }
}