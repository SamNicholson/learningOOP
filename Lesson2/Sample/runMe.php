<?php
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Lesson 2
 */
$man = new \Lesson2\Sample\Man();

if ($man->hasOvary()) {
    echo 'Man has ovary' . PHP_EOL;
} else {
    echo 'Man does not have ovary' . PHP_EOL;
}

$man->setIq(rand(0,1000));
echo 'Man has IQ of ' . $man->getIq() . PHP_EOL;

$man->setName('Sam Nicholson');
echo $man . PHP_EOL;