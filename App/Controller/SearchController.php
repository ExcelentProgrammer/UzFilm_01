<?php

require_once ROOT_PATH . "/App/Model/SearchModel.php";
require_once ROOT_PATH."/App/Model/Films.php";
use App\Models\Films;

class SearchController extends SearchModel
{
    function show()
    {
        $Search = mysqli_real_escape_string(DB::DCon(),$_GET['s']);
        $PageFilms = 18;
        $type = $_GET['type'];
        $PP = !empty($_GET['p']) ? ($_GET['p'] - 1) * $PageFilms : 1;
        $a = Films::like("FilmName",$Search);
        $AllFilms = array_slice($a, $PP, $PageFilms);
        $pages = ceil(count($a) / $PageFilms);
        $apages = $pages;
        $page = $_GET['p'];
        if ($page + 2 <= $pages) {
            $pages = $page + 2;
        } elseif ($page + 1 <= $pages) {
            $pages = $page + 1;
        } else {
            $page = $pages;
        }
        if ($page <= 3) {
            $start = 1;
            if ($pages == 3) {
                $pages += 2;
            } elseif ($pages == 4) {
                $pages += 1;
            }
        } elseif ($page > 3) {
            $start = $page - 2;
        }
        $type = "Film";
        require_once ROOT_PATH . "/App/View/User/Search.php";
    }
}