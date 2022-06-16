<?php


class HomeModel extends DB
{
    /**
     * TopFilm
     *
     * @return void
     * malumotlar bazasidan reytingi 3 bo'lgan barcha kinolarni olish
     */
    function TopFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmRating='3' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    /**
     * @return array
     * @author Azamov Samandar
     * malumotlar bazasidagi barcha filmlarni olish
     *
     */
    function AllFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    /**
     * ScaryFilm
     *
     * @return void
     * qo'rqinchli kinolar
     */
    function ScaryFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmJanr='Qo\'rqinchli' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    /**
     * FunnyFilm
     *
     * @return void
     * kulguli kinolar
     */
    function FunnyFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmJanr='Kamedia' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    /**
     * FantastikFilm
     *
     * @return void
     * fantastik kinolar
     */
    function FantastikFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmJanr='Fantastik' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetUzbekFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmLanguage='O\'zbek Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function NotJanr()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmJanr='Nomalum' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function WatchFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films ORDER BY FilmWatch DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    /**
     * FilmAbout
     *
     * @param  mixed $id
     * @return void
     * 1 ta film haqida to'liq malumot olish
     */
    function FilmAbout($id)
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE ID='$id'");
        $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
        $Watch = $res['FilmWatch'];
        $Watch++;
        mysqli_query($this->con(), "UPDATE films SET FilmWatch='$Watch' WHERE ID='$id';");
        return $res;
    }
    function GetSerial($id)
    {
        $res = mysqli_query($this->con(), "SELECT * FROM serial WHERE FilmID='$id' ORDER BY FilmSection");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetFilmMyListInfo($VideoID)
    {
        $con = $this->con();
        $UserID = $_SESSION['ID'];
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID='$UserID' AND VideoID = '$VideoID'");
        if (mysqli_num_rows($res) != 0) {
            return true;
        }
        return false;
    }
    function GetPlayList()
    {
        $con = $this->con();
        $UserID = $_SESSION['ID'];
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID='$UserID'");
        if (mysqli_num_rows($res) != 0) {
            $VideoIDs = mysqli_fetch_all($res, MYSQLI_ASSOC);
            $Films = [];
            foreach ($VideoIDs as $VideoID) {
                $ID = $VideoID['VideoID'];
                $res = mysqli_query($con, "SELECT * FROM films WHERE ID='$ID'");
                $res =  mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $Films[] = $res;
            }
            return $Films;
        }
        return [];
    }
}
