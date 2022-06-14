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
        if(mysqli_num_rows($res) == 0){
            return [];
        }
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * ScaryFilm
     *
     * @return void
     * qo'rqinchli kinolar
     */
    function ScaryFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Qo\'rqinchli'");
        if(mysqli_num_rows($res) == 0){
            return [];
        }
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    /**
     * FunnyFilm
     *
     * @return void
     * kulguli kinolar
     */
    function FunnyFilm(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Kamedia'");
        if(mysqli_num_rows($res) == 0){
            return [];
        }
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
        if(mysqli_num_rows($res) == 0){
            return [];
        }
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }    
    function NotJanr(){
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE FilmJanr='Nomalum'");
        if(mysqli_num_rows($res) == 0){
            return [];
        }
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
        $res = mysqli_query($this->con(),"SELECT * FROM films WHERE ID='$id'");
        return mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
    }
    function GetSerial($id){
        $res = mysqli_query($this->con(),"SELECT * FROM serial WHERE FilmID='$id' ORDER BY FilmSection");
        if(mysqli_num_rows($res) == 0){
            return [];
        }
        return mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
    function GetFilmMyListInfo($VideoID){
        $con = $this->con();
        $UserID = $_SESSION['ID'];
        $res = mysqli_query($con,"SELECT * FROM playlist WHERE UserID='$UserID' AND VideoID = '$VideoID'");
        if(mysqli_num_rows($res) != 0){
            return true;
        }
        return false;
    }
}