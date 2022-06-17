<?php

session_start();

/** Sessilarni boshqarish uchun class*/
class Session 
{
    /**
     * @param $Key
     * @return mixed
     * sessioni olish uchun funcsion
     */
    public function GetSession($Key)
    {
        return $_SESSION[$Key];
    }

    /**
     * @param $Key
     * @param $Value
     * yangi session qo'shish
     */
    public function NewSession($Key, $Value)
    {
        $_SESSION[$Key] = $Value;
    }

    /**
     * @param $Key
     * @return bool
     * session mavjud ekanligini tekshirish
     */
    public function SearchSession($Key)
    {
        if(!empty($_SESSION[$Key])){
            return true;
        }
        return false;
    }
}