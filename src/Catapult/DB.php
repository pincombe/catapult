<?php

namespace catapult;

class DB
{

    static $conn;

    public static function make($config)
    {
        self::$conn = new \Illuminate\Database\Capsule($config);
        self::$conn->bootEloquent();
    }


    public function __call($name, $args)
    {
        return call_user_func_array(array(self::$conn, $name), array_values($args));
    }

    public static function __callStatic($name, $args)
    {
        return call_user_func_array(array(self::$conn->connection(), $name), array_values($args));
    }

}
