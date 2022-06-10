<?php

session_start();

class Session 
{
    public function GetSession($Key)
    {
        return $_SESSION[$Key];
    }
    public function NewSession($Key,$Value)
    {
        $_SESSION[$Key] = $Value;
    }
    public function SearchSession($Key)
    {
        if(!empty($_SESSION[$Key])){
            return true;
        }
        return false;
    }
}