<?php


class AdminModel extends DB
{
    function NumberOfUsers()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM users");
        return mysqli_num_rows($res);
    }
    function NumberOfFilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM films");
        return mysqli_num_rows($res);
    }
    function NumberOfMultfilms()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM multfilm");
        return mysqli_num_rows($res);
    }
    function NumberOfVideos()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM video");
        return mysqli_num_rows($res);
    }
    function NumberOfSerial()
    {
        $res = mysqli_query($this->con(), "SELECT * FROM serial");
        return mysqli_num_rows($res);
    }
    function guests()
    {
        $con = $this->con();
        $res = mysqli_query($con, "SELECT * FROM guest");
        return mysqli_num_rows($res);
    }
}
