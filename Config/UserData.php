<?php


/** Foydalanuvchi haqida malumotlarni olish uchun class*/
class UserData extends DB
{
    function __construct()
    {
        $this->session = new Session();
        if (!empty($_COOKIE['Token'])) {
            $token = $_COOKIE['Token'];
            $con = $this->con();
            $res = mysqli_query($con, "SELECT * FROM token WHERE Token='$token'");
            $res = mysqli_fetch_all($res, MYSQLI_ASSOC)['0']['UserID'];
            $res = mysqli_query($con, "SELECT * FROM users WHERE ID='$res'");
            if (mysqli_num_rows($res) > 0) {
                $res = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
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
            }else{
                session_destroy();
                setcookie("Token","",time()-1);
                echo "<script>location.href='".menu(MenuHome)."'</script>";
            }
        }elseif(empty($_COOKIE['ONCE'])){
            $con = $this->con();
            $UserAgent = $_SERVER['HTTP_USER_AGENT'];
            mysqli_query($con,"INSERT INTO guest(UserAgent) VALUES('$UserAgent');");
            $ID = mysqli_insert_id($con);
            $C = new Cookie();
            $C->NewCookie("ID",$ID);
            $C->NewCookie("ONCE","false");
        }
        $ID = $_SESSION['ID'];
        $this->AvatarImg = mysqli_fetch_all(mysqli_query($this->con(),"SELECT Avatar FROM users WHERE ID='$ID'"),MYSQLI_ASSOC)[0]['Avatar'];

    }
}

 
$UserData = new UserData();
$AvatarImg = $UserData->AvatarImg;
