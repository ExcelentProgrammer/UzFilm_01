<?php
class DB{
    protected function PutData($key,$value){
        $this->$key=$value;
    }
    static public function table($table){
        $DB = new DB();
        $DB->PutData("table",$table);
        return $DB;
    }
    public function where(array $data){
        $key = array_keys($data)[0];
        $value = $data[$key];
        $this->sql = "SELECT * FROM $this->table WHERE $key = '$value'";
        return $this;
    }
}
echo DB::table('users')->where(['id'=>"1"])->sql;