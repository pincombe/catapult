<?php

namespace catapult;


class Schema
{

    public static function __callStatic($name, $arguments)
    {
        $db = new DB;
        $schema->connection()->schema();
        return call_user_func_array(array($schema, $name), array_values($arguments));
    }

}
