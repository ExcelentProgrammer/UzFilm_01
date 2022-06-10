<?php

class DB{
    public $con;
    public function con()
    {
        $con = mysqli_connect($_ENV['DB_HOST'],$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_NAME"]);
        $this->con=$con;

        return $con;
        
    }
  
}
