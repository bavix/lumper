<?php

namespace Bavix\Lumper;

class Bind
{

    /**
     * @var Lumper
     */
    protected static $lump;

    /**
     * Bind constructor.
     */
    protected function __construct()
    {
    }

    /**
     * @return Lumper
     */
    protected static function lumper()
    {
        if (!static::$lump)
        {
            static::$lump = new Lumper();
        }

        return static::$lump;
    }

    /**
     * @param string   $name
     * @param callable $callback
     *
     * @return mixed
     */
    public static function once($name, callable $callback)
    {
        return static::lumper()->once($callback, $name);
    }

}
