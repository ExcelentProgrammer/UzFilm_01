<?php


require_once ROOT_PATH . "App/Class/Route.php";

use App\Route;

Route::Start();

/** Route tizimini boshqarish uchun class*/
class Rout
{
    /**
     * Route tizimini boshqarish uchun function
     */
    public function route()
    {
        Route::get(['menu' => MenuAllFilms, "type", "p"], ['HomeController', "All"]);
        Route::get(["menu" => MenuWatch, "video_id", "type" => "multfilm"], ['VideoController', "MultfilmWatch"]);
        Route::get(["menu" => MenuWatch, "video_id", "type" => "video"], ['VideoController', "VideoWatch"]);
        Route::get(["menu" => MenuWatch, "video_id"], ['HomeController', "watch"]);
        Route::get(MenuHome, ['HomeController', "home"]);
        Route::get(MenuHelp, ['HomeController', "help"]);
        Route::get(MenuContcts, ['HomeController', "contacts"]);
        Route::get(MenuAbout, ['HomeController', "about"]);
        Route::get(Menu404, ['ErrorController', "error_404"]);
        Route::get(MenuSearch, ['SearchController', "show"]);
        if (User::Check()) {
            Route::get(MenuAccount, ['HomeController', "account"]);
            Route::get(MenuPlayList, ['HomeController', "MyPlayList"]);
            Route::get(['menu' => MenuRemovePlayList, "video_id", "type"], ['HomeController', "RemovePlayList"]);
            Route::get(MenuChat, ['ChatController', "index"]);
        } else {
            Route::get(MenuLogin, ['RegisterController', "login"]);
        }

        if (User::UserData()->UserRole == RoleAdmin) {
            Route::get(['menu' => AdminMenu, "page" => Dashboard], ['AdminController', "Dashboard"]);
            Route::get(['menu' => AdminMenu, "page" => Users], ['AdminController', "Users"]);
            Route::get(['menu' => AdminMenu, "page" => Buttons], ['AdminController', "Buttons"]);
            Route::get(['menu' => AdminMenu, "page" => NewFilm], ['AdminController', "NewFilm"]);
        }
    }


    function __destruct()
    {
        Route::default(['ErrorController', "error_404"]);
    }
}
