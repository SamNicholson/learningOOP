<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 10/28/15
 * Time: 12:08 PM
 */

namespace Lesson4\Exercise;


interface PreferenceInterface
{

    /**
     * @param string $preference
     *
     * @return mixed
     */
    public function getPreference($preference);

    /**
     * @return array
     */
    public function getAll();
}