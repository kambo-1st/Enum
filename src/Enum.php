<?php

namespace Kambo\Enum;

/**
 * Base class for enumeration.
 * Enum is created by extending this class and adding class constants.
 *
 * @author   Bohuslav Simek <bohuslav@simek.si>
 * @license  MIT
 * @package  Kambo\Enum
 */
abstract class Enum
{
    /**
     * Store existing constants in a static cache per object.
     *
     * @var array
     */
    private static $cache = [];

    /**
     * Returns instances of the Enum class of all Enum constants
     *
     * @return array Constant name in key, Enum instance in value
     */
    public static function values()
    {
        return self::toArray();
    }

    /**
     * Returns all possible values as an array
     *
     * @return array Constant name in key, constant value in value
     */
    public static function toArray()
    {
        $class = get_called_class();
        if (!array_key_exists($class, self::$cache)) {
            $reflection          = new \ReflectionClass($class);
            self::$cache[$class] = $reflection->getConstants();
        }

        return self::$cache[$class];
    }

    /**
     * Check if a value is in enum
     *
     * @return boolean True if the value is in enum false if not
     */
    public static function inEnum($value)
    {
        $allItems = array_flip(self::toArray());

        return isset($allItems[$value]) ? true : false;
    }
}
