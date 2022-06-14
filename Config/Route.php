<?php
require_once ROOT_PATH . "App/Class/Route.php";

function menu($x)
{
    return "?menu=" . $x;
}
function AdminMenu($x)
{
    return "?menu=admin" . "&page=" . $x;
}


class Rout extends App\Route
{
    public function route()
    {
        $UserRole = !empty($_SESSION['UserRole']) ? $_SESSION['UserRole'] : "User";
        $this->get(["menu" => MenuWatch, "video_id"], ['HomeController', "watch"]);
        $this->get(MenuHome, ['HomeController', "home"]);
        $this->get(MenuFilms, ['HomeController', "films"]);
        $this->get(MenuHelp, ['HomeController', "help"]);
        $this->get(MenuShows, ['HomeController', "shows"]);
        $this->get(MenuContcts, ['HomeController', "contacts"]);
        $this->get(MenuAccount, ['HomeController', "account"]);
        $this->get(MenuAbout, ['HomeController', "about"]);
        $this->get(MenuPlayList, ['HomeController', "MyPlayList"]);
        $this->get(Menu404, ['ErrorController', "error_404"]);
        $this->get(MenuLogin, ['RegisterController', "login"]);

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
