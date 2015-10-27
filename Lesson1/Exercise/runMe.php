<?php
require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Lesson 1 exercise
 */
$dog = new \Lesson1\Exercise\Dog();

if ($dog->hasLegs()) {
    echo 'My dog has ' . $dog->numberOfLegs() . ' legs' . PHP_EOL;
} else {
    echo 'My dog has no legs' . PHP_EOL;
}

if ($dog->hasTail()) {
    echo 'My dog has a tail' . PHP_EOL;
} else {
    echo 'My dog has no tail :-(' . PHP_EOL;
}

if ($dog->bites()) {
    echo 'Oh no, the dog bites!';
}