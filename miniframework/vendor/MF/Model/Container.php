<?php

    namespace MF\Model;

    use App\Connection;

    class Container {

        public static function getModel($model){

            $class = "\\App\\Model\\".ucfirst($model);

            $conn = Connection::getDB();

            return new $class($conn);

        }

    }

?>