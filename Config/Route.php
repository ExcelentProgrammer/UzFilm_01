<?php
require_once ROOT_PATH . "App/Class/Route.php";



/** router tizimini boshqarish uchun class*/
class Rout extends App\Route
{
    /**
     * router tizimini boshqarish uchun function
     */
    public function route()
    {
        $UserRole = !empty($_SESSION['UserRole']) ? $_SESSION['UserRole'] : "";
        $this->get(['menu' => MenuAllFilms, "type", "p"], ['HomeController', "All"]);
        $this->get(["menu" => MenuWatch, "video_id", "type" => "multfilm"], ['VideoController', "MultfilmWatch"]);
        $this->get(["menu" => MenuWatch, "video_id", "type" => "video"], ['VideoController', "VideoWatch"]);
        $this->get(["menu" => MenuWatch, "video_id"], ['HomeController', "watch"]);
        $this->get(MenuHome, ['HomeController', "home"]);
        $this->get(MenuHelp, ['HomeController', "help"]);
        $this->get(MenuContcts, ['HomeController', "contacts"]);
        $this->get(MenuAbout, ['HomeController', "about"]);
        $this->get(Menu404, ['ErrorController', "error_404"]);
        $this->get(MenuLogin, ['RegisterController', "login"]);
        if ($_SESSION['ID']) {
            $this->get(MenuAccount, ['HomeController', "account"]);
            $this->get(MenuPlayList, ['HomeController', "MyPlayList"]);
            $this->get(['menu' => MenuRemovePlayList, "video_id", "type"], ['HomeController', "RemovePlayList"]);
        }

        if ($UserRole == RoleAdmin) {
            $this->get(['menu' => AdminMenu, "page" => Dashboard], ['AdminController', "Dashboard"]);
            $this->get(['menu' => AdminMenu, "page" => Buttons], ['AdminController', "Buttons"]);
            $this->get(['menu' => AdminMenu, "page" => NewFilm], ['AdminController', "NewFilm"]);
        }
    }


    function __destruct()
    {
        $this->default(['ErrorController', "error_404"]);
    }
}
