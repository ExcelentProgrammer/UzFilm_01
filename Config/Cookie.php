<?php


class Cookie 
{
    public function GetCookie($Key)
    {
        return $_COOKIE[$Key];
    }
    public function NewCookie($Key,$Value)
    {
        setcookie($Key,$Value,time()+86400*365,"/");
    }
    public function SearchCookie($Key)
    {
        if(!empty($_COOKIE[$Key])){
            return true;
        }
        return false;
    }
}