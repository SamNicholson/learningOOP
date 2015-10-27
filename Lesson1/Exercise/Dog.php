<?php

namespace Lesson1\Exercise;

/**
 * Class Dog
 *
 * This is a dog, dogs have 4 legs, a tail and 2 ears
 *
 * Sometimes this dog will bite, but not all the time. Some
 * would say when he bites is a little bit random.
 *
 * Complete the class below to meet the requirements above
 *
 * Also mark the properties and methods with correct scope
 * with the correct scope
 *
 * @package Lesson1\Sample
 */
class Dog
{

    /**
     * Does this dog have legs?
     * @return bool
     */
    public function hasLegs()
    {
        return $this->legs ? true : false;
    }

    /**
     * How many legs does this dog have
     * @return mixed
     */
    private function numberOfLegs()
    {
        return $this->legs;
    }

    protected function hasTail()
    {
        return $this->tail ? true : false;
    }

}
