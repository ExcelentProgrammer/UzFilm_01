<?php
 
namespace App\Models;

use PDO;

class DB
{
    static public function con()
    {
        $con = new PDO("mysql:host=localhost;dbname=uzfilm", "root", "root", [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        if ($con)
            return $con;
        return false;
    }
}


class Model extends DB
{
    static public function escape_string(string $string){
        $string = str_replace('\\','\\\\',$string);
        $string = str_replace("'","\'",$string);
        $string = str_replace('"','\"',$string);
        return $string;
    }
    static public function table()
    {
        $vars = json_decode(json_encode(get_class_vars(get_called_class())), false);
        return isset($vars->table) ? $vars->table : end(explode("\\",strtolower(get_called_class())));
    }
    static public function create(array $KeyValue)
    {
        $con = self::con();
        $table = self::table();
        $key = implode(",", array_keys($KeyValue));
        $value = implode(",:", array_keys($KeyValue));
        $sql = "INSERT INTO $table ($key) VALUES(:$value)";
        $res = $con->prepare($sql);
        $res->execute($KeyValue);
        if ($res)
            return true;
        return false;
    }
    static public function all()
    {

        $table = self::table();
        $sql = "SELECT * FROM $table";
        $res = self::con()->prepare($sql);
        $res->execute();
        if ($res)
            return $res->fetchAll(PDO::FETCH_ASSOC);
        return false;
    }
    static public function where(string $name, string $x, string $value)
    {
        $name = self::escape_string($name);
        $x = self::escape_string($x);
        $value = self::escape_string($value);
        $table = self::table();
        $con = self::con();
        $sql = "SELECT * FROM $table WHERE $name $x '$value' ORDER BY ID DESC";
        $res = $con->prepare($sql);
        $res->execute();
        if ($res)
            return $res->fetchAll(PDO::FETCH_ASSOC);
        return false;
    }
    static public function like($column,$value){
        $con = self::con();
        $table = self::table();
        $res = $con->prepare("SELECT * FROM $table WHERE $column LIKE '%$value%'");
        $res->execute();
        if($res)
        return $res->fetchAll(PDO::FETCH_ASSOC);
        return false;
    }

    static public function query(string $sql)
    {
        $con = self::con();
        $res = $con->prepare($sql);
        $res->execute();
        if ($res)
            return true;
        return false;
    }
}



