<?php

namespace App\Models;

use App\Http\Config;
use http\QueryString;

class DB
{
    private static $instance = null;
    private static $handler = null;
    public static $query = null;
    public static $table = null;

    private function __construct()
    {
    }

    public static function table($table)
    {
        self::$instance = new Self;
        self::$handler = mysqli_connect(Config::HOSTNAME, Config::USERNAME, Config::PASSWORD, Config::DBNAME);
        self::$table = $table;
        self::$query = "select * from " . self::$table;
        return self::$instance;
    }
    public function where($field, $value)
    {
        self::$query .= " where {$field} = LIKE '%{$value}%'";

        return $this;
    }


    public function get()
    {
        self::$query = mysqli_query(self::$handler, self::$query);
        $result = [];
        while ($res = mysqli_fetch_assoc(self::$query)) {
            array_push($result, $res);
        }
        return $result;
    }



    public function add(array $fields, array $values)
    {
        $fields = implode(",", $fields);
        $values = implode("','", $values);
        self::$query = "insert into " . self::$table . " ({$fields}) value ('{$values}')";
        self::$query = mysqli_query(self::$handler, self::$query);
        return true;
    }

    public function delete($field, array $values)
    {
        $values = implode("','", $values);
        self::$query = "delete from " . self::$table . " where {$field} IN ('{$values}')";
        print_r(self::$query);
//
        self::$query = mysqli_query(self::$handler, self::$query);
        return true;
    }

    public function update(array $fields, array $values, $field, $record)// update table set fields = values where id = id
    {
        self::$query = "update " . self::$table . " set `{$fields}` = '{$values}' where '{$field}' = '{$record}'";
    }

    public function login(array $field, array $value)
    {

        self::$query = "select * from " . self::$table . " where {$field[0]}='{$value[0]}' and {$field[1]}='{$value[1]}'";
//        print_r(self::$query);
        self::$query = mysqli_query(self::$handler, self::$query);
        $row = mysqli_fetch_array(self::$query, MYSQLI_ASSOC);
        $conn = mysqli_num_rows(self::$query);

    }
}
