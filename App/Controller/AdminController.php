<?php

class AdminController{
    function Dashboard(){
        require_once ROOT_PATH."/App/View/Admin/Dashboard.php";
    }
    function Buttons(){
        require_once ROOT_PATH."/App/View/Admin/Buttons.php";
    }
    function NewFilm(){
        require_once ROOT_PATH."/App/View/Admin/NewFilm.php";
    }
}