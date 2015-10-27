<?php
namespace Lesson3\Sample;
class PreferenceAccessor
{
    private static $preferences = [];
    /**
     * Set the preferences into the Preference Accessor
     * In Equinox this is done globally, but this method is also
     * very useful for mocking preferences in Unit/Integration tests
     * @param array $preferences
     */
    public static function setPreferences(array $preferences)
    {
        static::$preferences = $preferences;
    }
    /**
     * Will return the preference identified by the key provided
     * If the preference is not set it will return false
     * @param $preference
     *
     * @return mixed|bool
     */
    public static function get($preference)
    {
        if (isset(static::$preferences[$preference])) {
            return static::$preferences[$preference];
        }
        return false;
    }
    /**
     * Returns all preferences available to the user
     * @return array
     */
    public static function getAll()
    {
        return static::$preferences;
    }
}