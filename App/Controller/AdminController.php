<?php
require_once ROOT_PATH."/App/Model/AdminModel.php";

class AdminController extends AdminModel{
    /**
     * Dashboard sahifasi
     */
    function Dashboard(){
        $NumberOfUsers = $this->NumberOfUsers();
        $NumberOfFilms = $this->NumberOfFilms();
        $NumberOfMultfilms = $this->NumberOfMultfilms();
        $NumberOfVideos = $this->NumberOfVideos();
        $NumberOfSerial = $this->NumberOfSerial();
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