<?php
/** malumotlar bazasiga ulanish uchun class*/
class DB{
    public $con;

    /**
     * @return false|mysqli|null
     * malumotlar bazasiga ulanish uchun funcsiya
     */
    public function con()
    {
        $con = mysqli_connect($_ENV['DB_HOST'],$_ENV["DB_USERNAME"],$_ENV["DB_PASSWORD"],$_ENV["DB_NAME"]);
        $this->con=$con;

        return $con;
        
    }
  
}
