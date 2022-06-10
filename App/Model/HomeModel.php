<?php


class HomeModel extends DB{    
    /**
     * TopFilm
     *
     * @return void
     * malumotlar bazasidan reytingi 3 bo'lgan barcha kinolarni olish
     */
    function TopFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmRating='3' ORDER BY ID DESC");
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * ScaryFilm
     *
     * @return void
     * qo'rqinchli kinolar
     */
    function ScaryFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Scary'");
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * FunnyFilm
     *
     * @return void
     * kulguli kinolar
     */
    function FunnyFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Funny'");
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * FantastikFilm
     *
     * @return void
     * fantastik kinolar
     */
    function FantastikFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Fantastik'");
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * FilmAbout
     *
     * @param  mixed $id
     * @return void
     * 1 ta film haqida to'liq malumot olish
     */
    function FilmAbout($id){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE ID=$id");
        return mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
    }
}