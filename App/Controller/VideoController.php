<?php

require_once ROOT_PATH . "/App/Model/MultfilmModel.php";
require_once ROOT_PATH . "/App/Model/VideoModel.php";
require_once ROOT_PATH . "/App/Controller/HomeController.php";

class VideoController extends HomeController
{
    /**
     * VideoController constructor.
     * kerakli Modellarni Chaqirib olish
     */
    function __construct()
    {
        $this->VideoModel = (new VideoModel());
        $this->MultfilmModel = (new MultfilmModel());
    }

    /**
     *Multfilmlarni online ko'rish || yuklab olish
     */
    function MultfilmWatch()
    {
        $FilmAbout = $this->MultfilmModel->FilmAbout($_GET['video_id']);
        $TopFilms = $this->MultfilmModel->WatchFilm();
        require_once ROOT_PATH . "/App/View/User/watch.php";
    }

    /**
     * @author Azamov Samandar
     * Video || konsertlarni Online ko'rish || yuklab olish
     */
    function VideoWatch()
    {
        $FilmAbout = $this->VideoModel->FilmAbout($_GET['video_id']);
        $TopFilms = $this->VideoModel->WatchFilm();
        require_once ROOT_PATH . "/App/View/User/watch.php";
    }
}