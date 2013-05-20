<?php

namespace catapult;


class Schema
{

    public static function __callStatic($name, $arguments)
    {
        $schema = DB::getDB()->schema();
        return call_user_func_array(array($schema, $name), array_values($arguments));
    }

}
