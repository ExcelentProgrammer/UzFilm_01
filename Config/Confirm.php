<?php
require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();
require_once "./Session.php";
require_once "./Cookie.php";

require_once "./Connect.php";

class Confirm extends DB{
    function __construct()
    {
        $this->session = new Session();
        $this->cookie = new Cookie();
        $menu = $_GET['menu'];
        switch ($menu) {
            case 'signup':
                $this->Signup();
                break;
            
            case 'session':
                $this->WriteSession();
                break;
            
            default:
                # code...
                break;
        }
    }
    function Signup(){
        $con = $this->con();
        $FirstName = mysqli_real_escape_string($con,$_GET['FirstName']);
        $LastName = mysqli_real_escape_string($con,$_GET['LastName']);
        $UserName = mysqli_real_escape_string($con,$_GET['UserName']);
        $Email = mysqli_real_escape_string($con,$_GET['Email']);
        $Password = mysqli_real_escape_string($con,$_GET['Password']);
        $Password = sha1($Password);
        $res = mysqli_query($con,"SELECT * FROM users WHERE Email='$Email'");
        $rowColumn = mysqli_num_rows($res);
        if($rowColumn>0){
            echo "Email oldin ishlatilgan";
        }else{
            $res = mysqli_query($con,"SELECT * FROM users WHERE UserName='$UserName'");
            $rowColumn = mysqli_num_rows($res);
            if($rowColumn>0){
                echo "Username oldin ishlatilgan";
            }else{
                $e = filter_var($Email,FILTER_VALIDATE_EMAIL);
                if(!$e){
                    echo "Iltimos Haqiqiy Email kiriting";
                }else{
                    mysqli_query($con,"INSERT INTO `users` (`FirstName`, `LastName`, `UserName`, `Email`, `Password`) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password');");
                    echo "signup_ok_".mysqli_insert_id($con);
                }
            }
        }

    }
    function WriteSession(){
        $con = $this->con();
        $id = $_GET['id'];
        $res = mysqli_query($con,"SELECT * FROM users WHERE ID='$id'");
        if(mysqli_num_rows($res)>0){
            $UserData = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
            $this->session->NewSession("FirstName",$UserData['FirstName']);
            $this->session->NewSession("LastName",$UserData['LastName']);
            $this->session->NewSession("UserName",$UserData['UserName']);
            $this->session->NewSession("Email",$UserData['Email']);
            $this->session->NewSession("Password",$UserData['Password']);
            $this->cookie->NewCookie("UserName",$UserData['UserName']);
            $this->cookie->NewCookie("Password",$UserData['Password']);
            header("location: /");

            
        }
    }
}

(new Confirm());
