#!/usr/bin/php
<?php
    if ($argc < 3) {
        exit();
    }
    $get = $argv[1];
    unset($argv[0], $argv[1]);
    $argv = array_reverse($argv);
    foreach ($argv as $arg_answer){
        $temp = explode(":", $arg_answer);
        if ($get === $temp[0]){
            echo $temp[1]."\n";
            exit();
        }
    }
?>