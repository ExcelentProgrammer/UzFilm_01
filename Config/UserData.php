<?php



class UserData extends DB
{
    function __construct()
    {
        $this->session=new Session();
        if (!empty($_COOKIE['UserName']) and !empty($_COOKIE['Password']) and empty($_SESSION['UserName'])) {
            $UserName = $_COOKIE['UserName'];
            $Password = $_COOKIE['Password'];
            $con = $this->con();
            $res = mysqli_query($con, "SELECT * FROM users WHERE UserName='$UserName'");
            if (mysqli_num_rows($res) > 0) {
                $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $PasswordDataBase = $res['Password'];
                if ($Password == $PasswordDataBase) {
                    $this->session->NewSession("FirstName", $res['FirstName']);
                    $this->session->NewSession("LastName", $res['LastName']);
                    $this->session->NewSession("UserName", $res['UserName']);
                    $this->session->NewSession("Email", $res['Email']);
                    $this->session->NewSession("Password", $res['Password']);

                    $this->FirstName = $res['FirstName'];
                    $this->LastName = $res['LastName'];
                    $this->UserName = $res['UserName'];
                    $this->Password = $res['Email'];
                    $this->Password = $res['Password'];
                }
            }
        } else {
            $this->FirstName = $_SESSION['FirstName'];
            $this->LastName = $_SESSION['LastName'];
            $this->UserName = $_SESSION['UserName'];
            $this->Password = $_SESSION['Email'];
            $this->Password = $_SESSION['Password'];
        }
    }
}

(new UserData());