<?php
require_once ROOT_PATH . "App/Class/Route.php";

function menu($x){
    return "?menu=".$x;
}


class Rout extends App\Route{
    public function route(){
        $this->get(["menu"=>MenuWatch,"video_id"],['HomeController',"watch"]);
        $this->get(MenuHome,['HomeController',"home"]);
        $this->get(MenuFilms,['HomeController',"films"]);
        $this->get(MenuHelp,['HomeController',"help"]);
        $this->get(MenuShows,['HomeController',"shows"]);
        $this->get(MenuContcts,['HomeController',"contacts"]);
        $this->get(MenuAbout,['HomeController',"about"]);
        $this->get(Menu404,['ErrorController',"error_404"]);
        $this->get(MenuLogin,['RegisterController',"login"]);
        $this->get(MenuSignup,['RegisterController',"signup"]);
    }


    function __destruct(){
        $this->default(['ErrorController',"error_404"]);
    }
}
