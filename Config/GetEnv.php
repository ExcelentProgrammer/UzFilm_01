<?php
/** .Env faylidagi malumotlarni olish uchun class */
class GetEnv
{
    function __construct()
    {
        global $dotenv;
        require_once ROOT_PATH . "vendor/autoload.php";
        $dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
        $dotenv->load();

    }
}

(new GetEnv());
