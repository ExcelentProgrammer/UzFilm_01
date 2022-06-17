<?php


/**
 * cookielarni boshqarish uchun class
 */
class Cookie 
{
    /**
     * @param $Key
     * @return mixed
     * Cookiedan malumot olish
     *
     */
    public function GetCookie($Key)
    {
        return $_COOKIE[$Key];
    }

    /**
     * @param $Key
     * @param $Value
     * yangi cookie qo'shish
     */
    public function NewCookie($Key, $Value)
    {
        setcookie($Key,$Value,time()+86400*365,"/");
    }

    /**
     * @param $Key
     * @return bool
     * cookie mavjud ekanligini tekshirish
     */
    public function SearchCookie($Key)
    {
        if(!empty($_COOKIE[$Key])){
            return true;
        }
        return false;
    }
}