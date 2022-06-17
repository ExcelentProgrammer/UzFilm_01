<?php

class AdminController{
    /**
     * Dashboard sahifasi
     */
    function Dashboard(){
        require_once ROOT_PATH."/App/View/Admin/Dashboard.php";
    }
    function Buttons(){
        require_once ROOT_PATH."/App/View/Admin/Buttons.php";
    }

    /**
     * yangi film qo'shish sahifasi
     */
    function NewFilm(){
        require_once ROOT_PATH."/App/View/Admin/NewFilm.php";
    }
}