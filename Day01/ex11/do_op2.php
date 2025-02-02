#!/usr/bin/php
<?php
    if ($argc != 2) {
        echo "Incorrect Parameters\n";
        exit();
    }
    $calc_arg = str_replace(" ", "", $argv[1]);
    $nbr1 = intval($calc_arg);
    $do_op = substr(substr($calc_arg, strlen((string)$nbr1)), 0, 1);
    $nbr2 = substr(substr($calc_arg, strlen((string)$nbr1)), 1);
    if (!is_numeric($nbr1) || !is_numeric($nbr2)){
        echo "Syntax Error\n";
        exit();
    }
    switch ($do_op) {
        case ("*") :
            echo $nbr1 * $nbr2;
            break;
        case ("+") :
            echo $nbr1 + $nbr2;
            break;
        case ("-") :
            echo $nbr1 - $nbr2;
            break;
        case ("/") :
            echo $nbr1 / $nbr2;
            break;
        case ("%") :
            echo $nbr1 % $nbr2;
            break;
        default:
            echo "Syntax Error\n";
            exit();
    }
    echo "\n";
?>