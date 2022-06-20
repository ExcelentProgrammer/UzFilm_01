<?php

class MultfilmModel extends DB
{
    public function GetAllMultfilm()
    {
        $con = $this->con();
        $res = mysqli_query($con, "SELECT * FROM multfilm");
        if (mysqli_num_rows($res) == 0)
            return [];
        else
            return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
    function FilmAbout($id)
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm WHERE ID='$id'");
        $row = $res;
        $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
        $Watch = $res['FilmWatch'];
        $Watch++;
        mysqli_query($this->con(), "UPDATE multfilm SET FilmWatch='$Watch' WHERE ID='$id';");
        if(mysqli_num_rows($row) == 0)
            echo "<script>location.href='".menu(Menu404)."'</script>";
        return $res;
    }
    function WatchFilm()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm ORDER BY FilmWatch DESC");
        if (mysqli_num_rows($res) == 0) {
            return [];
        }
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }

}