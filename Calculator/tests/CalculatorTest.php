<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 24/10/2018
 * Time: 23:43
 */

include_once "../src/Calculator.php";

$test = new Calculator();
echo $test->calculate(1,2, "ADDITION");