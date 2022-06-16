<?php



class UserData extends DB
{
    function __construct()
    {
        $this->session = new Session();
        if (!empty($_COOKIE['ID']) and !empty($_COOKIE['Password']) and empty($_SESSION['ID'])) {
            $ID = $_COOKIE['ID'];
            $Password = $_COOKIE['Password'];
            $con = $this->con();
            $res = mysqli_query($con, "SELECT * FROM users WHERE ID='$ID'");
            if (mysqli_num_rows($res) > 0) {
                $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                $PasswordDataBase = $res['Password'];
                if ($Password == $PasswordDataBase) {
                    $this->session->NewSession("FirstName", $res['FirstName']);
                    $this->session->NewSession("LastName", $res['LastName']);
                    $this->session->NewSession("UserName", $res['UserName']);
                    $this->session->NewSession("Email", $res['Email']);
                    $this->session->NewSession("Password", $res['Password']);
                    $this->session->NewSession("UserRole", $res['UserRole']);
                    $this->session->NewSession("ID", $res['ID']);

                    $this->FirstName = $res['FirstName'];
                    $this->ID = $res['ID'];
                    $this->LastName = $res['LastName'];
                    $this->UserName = $res['UserName'];
                    $this->Password = $res['Email'];
                    $this->Password = $res['Password'];
                    $this->UserRole = $res['UserRole'];
                }
            }
        } else {
            $this->FirstName = $_SESSION['FirstName'];
            $this->LastName = $_SESSION['LastName'];
            $this->UserName = $_SESSION['UserName'];
            $this->Password = $_SESSION['Email'];
            $this->Password = $_SESSION['Password'];
            $this->UserRole = $_SESSION['UserRole'];
            $this->ID = $_SESSION['ID'];
        }
    }
}

(new UserData());
