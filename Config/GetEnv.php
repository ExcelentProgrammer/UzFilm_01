<?php
/** .Env faylidagi malumotlarni olish uchun class */
class GetEnv
{
    static public function get()
    {
        global $dotenv;
        require_once ROOT_PATH . "vendor/autoload.php";
        $dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
        $dotenv->load();

    }
}

GetEnv::get();
