<?php

/** malumotlar bazasiga ulanish uchun class*/
class DB
{

    /**
     * @return false|mysqli|null
     * malumotlar bazasiga ulanish uchun funcsiya
     */
    public function con()
    {
        $this->con = mysqli_connect($_ENV['DB_HOST'], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);

        return $this->con;
    }
    static public function DCon()
    {
        $con = mysqli_connect($_ENV['DB_HOST'], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);

        return $con;
    }
}
