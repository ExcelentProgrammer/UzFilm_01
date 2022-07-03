<?php


class SearchModel extends DB
{
    public function SearchFilm($text){
        $con = $this->con();
        $res = mysqli_query($con,"SELECT * FROM films WHERE FilmName LIKE '%$text%'");
        $res = mysqli_fetch_all($res,MYSQLI_ASSOC);
        return $res;
   }
}