<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 10/27/15
 * Time: 12:50 PM
 */

namespace Lesson4\Sample;


interface MammalInterface
{

    /**
     * @return mixed
     */
    public function getLegs();

    /**
     * Sets the number of legs
     * @param $legs
     */
    public function setLegs($legs);

}