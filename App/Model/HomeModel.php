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

    /**
     * @return array
     * qanday janrda ekanligi haqida malumot yo'q bo'lgan filmlar
     */
    function NotJanr()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmJanr='Nomalum' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }


    /**
     * @return array
     * eng ko'p ko'rilgan filmlarni olish
     */
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
        $row = $res;
        $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
        $Watch = $res['FilmWatch'];
        $Watch++;
        mysqli_query($this->con(), "UPDATE films SET FilmWatch='$Watch' WHERE ID='$id';");
        if (mysqli_num_rows($row) == 0)
            echo "<script>location.href='" . menu(Menu404) . "'</script>";
        return $res;
    }


    /**
     * @param $id
     * @return array
     * Seriallarni olish
     */
    function GetSerial($id)
    {
        $res = mysqli_query($this->con(), "SELECT * FROM serial WHERE FilmID='$id' ORDER BY FilmSection");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    /**
     * @param $VideoID
     * @return bool
     * Film play listga qo'shilganligini aniqlash uchun
     */
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


    /**
     * @return array
     * play listdagi filmlarni olish uchun
     */
    function GetPlayList()
    {
        $con = $this->con();
        $UserID = User::ID();
        $Films = [];
        $Multfilm = [];
        $video = [];
        /**
         * Foydalanuvchi saqlab qo'ygan Filmlarni malumotlar bazasidan olish
         * */
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID='$UserID' AND Type='Film'");
        if (mysqli_num_rows($res) != 0) {
            $VideoIDs = mysqli_fetch_all($res, MYSQLI_ASSOC);
            foreach ($VideoIDs as $VideoID) {
                $ID = $VideoID['VideoID'];
                $res = mysqli_query($con, "SELECT * FROM films WHERE ID='$ID'");
                $res =  mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $Films[] = $res;
            }
        }
        /**
         * Foydalanuvchi saqlab qo'ygan Multfilmlarni malumotlar bazasidan olish
         * */
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID='$UserID' AND Type='Multfilm'");
        if (mysqli_num_rows($res) != 0) {
            $VideoIDs = mysqli_fetch_all($res, MYSQLI_ASSOC);
            foreach ($VideoIDs as $VideoID) {
                $ID = $VideoID['VideoID'];
                $res = mysqli_query($con, "SELECT * FROM multfilm WHERE ID='$ID'");
                $res =  mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $Multfilm[] = $res;
            }
        }
        /**
         * Foydalanuvchi saqlab qo'ygan Video || konsertlarni malumotlar bazasidan olish
         * */
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID='$UserID' AND Type='Video'");
        if (mysqli_num_rows($res) != 0) {
            $VideoIDs = mysqli_fetch_all($res, MYSQLI_ASSOC);
            foreach ($VideoIDs as $VideoID) {
                $ID = $VideoID['VideoID'];
                $res = mysqli_query($con, "SELECT * FROM video WHERE ID='$ID'");
                $res =  mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $video[] = $res;
            }
        }
        $r = ["Film" => $Films, "Multfilm" => $Multfilm, "Video" => $video];
        return $r;
    }
    function Shows()
    {
        $res = mysqli_query($this->con(), "SELECT SUM(FilmWatch) as Watchs FROM films");
        return mysqli_fetch_all($res, MYSQLI_ASSOC)['0']['Watchs'];
    }
    function RemovePlayListFilm($UserID, $VideoID, $Type)
    {
        $res = mysqli_query($this->con(), "DELETE FROM playlist WHERE UserID='$UserID' AND VideoID='$VideoID' AND Type='$Type'");
    }


    /**
     *  Filmlar
     */

    /**
     * @return array
     * o'zbekcha filmlarni olish
     */
    function GetUzFilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmLanguage='O\'zbek Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

    function GetRuFilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmLanguage='Rus Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetEnFilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films WHERE FilmLanguage='Ingliz Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }


    /**
     * Videolar
     * 
     */
    function GetEnVideo()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM video WHERE FilmLanguage='Ingliz Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetRuVideo()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM video WHERE FilmLanguage='Rus Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetUzVideo()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM video WHERE FilmLanguage='O\'zbek Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

     /**
      * Multfilmlar
      */
    function GetEnMultfilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm WHERE FilmLanguage='Ingliz Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetRuMultfilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm WHERE FilmLanguage='Rus Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function GetUzMultfilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm WHERE FilmLanguage='O\'zbek Tilida' ORDER BY ID DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
}
