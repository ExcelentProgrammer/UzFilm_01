<?php

class RegisterController
{
    /**
     * login
     *
     * @return void
     * accountga kirish sahifasi
     */
    public function login()
    {
        require_once ROOT_PATH . "/App/View/Register/Login.php";
    }
    /**
     * logout
     *
     * @return void
     * Accountda chiqish
     */
   
    /**
     * signup
     *
     * @return void
     * Yangi account o'chish
     */
    public function signup()
    {

        require_once ROOT_PATH . "/App/View/Register/Signup.php";
    }
    
}
