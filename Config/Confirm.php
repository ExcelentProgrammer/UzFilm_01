<?php
error_reporting(0);
require_once "../App/Class/Func.php";
require_once "../vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable("../");
$dotenv->load();
require_once "./Session.php";
require_once "./Cookie.php";

require_once "./DB.php";


/**
 * sahifani Yangilamasdan malumotlarni tekshirish uchun class
*/
class Confirm extends DB
{
    function __construct()
    {
        $this->session = new Session();
        $this->cookie = new Cookie();
        $menu = $_GET['menu'];
        switch ($menu) {
            case 'signup':
                $this->Signup();
                break;
            case 'login':
                $this->Login();
                break;
            case 'NewFilm':
                $this->NewFilm();
                break;
            case 'NewSerial':
                $this->NewSerial();
                break;
            case 'PlayList':
                $this->PlayList();
                break;
            case 'EditAccountData':
                $this->EditAccountData();
                break;


            default:
                # code...
                break;
        }
    }

    /**
     * @author  Azamov Samandar
     * Account malumotlarini o'zgartirish
     */
    function EditAccountData()
    {
        $con = $this->con();
        $UserName = $_POST['UserName'];
        $LastName = $_POST['LastName'];
        $FirstName = $_POST['FirstName'];
        $ID = $_POST['ID'];
        $res = mysqli_query($con, "SELECT * FROM users WHERE UserName='$UserName'");
        $DbUserName = mysqli_fetch_all($res, MYSQLI_ASSOC)[0]['UserName'];
        if (mysqli_num_rows($res) != 0 and $UserName != $DbUserName)
            echo "UserName Ooldin ishlatilgan";
        else {
            $res = mysqli_query($con, "UPDATE users SET Username='$UserName',LastName='$LastName',FirstName='$FirstName' WHERE ID='$ID'");
            if ($res)
                echo "ok";
            else
                print_r(mysqli_error($con));
        }

    }

    /**
     * @author Azamov Samandar
     * Yangi Foydalanuvchilarni ro'yhatga olish
     */
    function Signup()
    {
        $con = $this->con();
        $FirstName = mysqli_real_escape_string($con, $_GET['FirstName']);
        $LastName = mysqli_real_escape_string($con, $_GET['LastName']);
        $UserName = mysqli_real_escape_string($con, $_GET['UserName']);
        $Email = mysqli_real_escape_string($con, $_GET['Email']);
        $Password = mysqli_real_escape_string($con, $_GET['Password']);
        $Password = sha1($Password);
        $res = mysqli_query($con, "SELECT * FROM users WHERE Email='$Email'");
        $rowColumn = mysqli_num_rows($res);
        if ($rowColumn > 0) {
            echo "Email oldin ishlatilgan";
        } else {
            $res = mysqli_query($con, "SELECT * FROM users WHERE UserName='$UserName'");
            $rowColumn = mysqli_num_rows($res);
            if ($rowColumn > 0) {
                echo "Username oldin ishlatilgan";
            } else {
                $e = filter_var($Email, FILTER_VALIDATE_EMAIL);
                if (!$e) {
                    echo "Iltimos Haqiqiy Email kiriting";
                } else {
                    mysqli_query($con, "INSERT INTO `users` (`FirstName`, `LastName`, `UserName`, `Email`, `Password`) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password');");
                    $res = mysqli_query($con, "SELECT * FROM `users` WHERE `ID` = '" . mysqli_insert_id($con) . "'");
                    if (mysqli_num_rows($res) > 0) {
                        $UserData = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
                        $this->session->NewSession("FirstName", $UserData['FirstName']);
                        $this->session->NewSession("LastName", $UserData['LastName']);
                        $this->session->NewSession("UserName", $UserData['UserName']);
                        $this->session->NewSession("Email", $UserData['Email']);
                        $this->session->NewSession("UserRole", $UserData['UserRole']);
                        $this->session->NewSession("Password", $UserData['Password']);
                        $this->session->NewSession("ID", $UserData['ID']);
                        $this->cookie->NewCookie("ID", $UserData['ID']);
                        $this->cookie->NewCookie("Password", $UserData['Password']);
                        echo "signup_ok";
                    }
                }
            }
        }
    }

    /**
     * @author  Azamov Samandar
     * Foydalanuvchilar Accountga kirishi || login
     */
    function Login()
    {
        $con = $this->con();
        $UserName = $_POST['UserName'];
        $Password = sha1($_POST['Password']);
        $res = mysqli_query($con, "SELECT * FROM users WHERE UserName='$UserName'");
        if (mysqli_num_rows($res) == 0) {
            echo "Bu username Ro'yhatdan o'tmagan";
        } else {
            $UserData = mysqli_fetch_all($res, MYSQLI_ASSOC)[0];
            if ($UserData['Password'] != $Password) {
                echo "Parol Xato!";
            } else {
                $this->session->NewSession("FirstName", $UserData['FirstName']);
                $this->session->NewSession("LastName", $UserData['LastName']);
                $this->session->NewSession("UserName", $UserData['UserName']);
                $this->session->NewSession("Email", $UserData['Email']);
                $this->session->NewSession("Password", $UserData['Password']);
                $this->session->NewSession("UserRole", $UserData['UserRole']);
                $this->session->NewSession("ID", $UserData['ID']);
                if ($_POST['SavePassword'] == "on") {
                    $this->cookie->NewCookie("ID", $UserData['ID']);
                    $this->cookie->NewCookie("Password", $UserData['Password']);
                }
                echo "login_ok";
            }
        }
    }

    /**
     * @author Azamov Samandar
     * Yangi Film Qo'shish
     */
    function NewFilm()
    {
        $con = $this->con();
        $FilmSize = $_POST['FilmUrl'];
        $FilmUrl = mysqli_real_escape_string($con, $_POST['FilmUrl']);
        $FilmHeight = mysqli_real_escape_string($con, $_POST['FilmHeight']);
        $FilmYear = mysqli_real_escape_string($con, $_POST['FilmYear']);
        $FilmName = mysqli_real_escape_string($con, $_POST['FilmName']);
        $FilmCaption = mysqli_real_escape_string($con, $_POST['FilmCaption']);
        $FilmYoung = mysqli_real_escape_string($con, $_POST['FilmYoung']);
        $FilmState = mysqli_real_escape_string($con, $_POST['FilmState']);
        $FilmJanr = mysqli_real_escape_string($con, $_POST['FilmJanr']);
        $FilmRating = mysqli_real_escape_string($con, $_POST['FilmRating']);

        $NewFilmAbout = $_POST['NewFilmAbout'];
        $FilmType = $_POST['FilmType'];

        $FilmDate = mysqli_real_escape_string($con, $_POST['FilmDate']);
        $Filmlanguage = mysqli_real_escape_string($con, $_POST['FilmLanguage']);


        $ImgTypes = ['jpg', "png", "jpeg", "ico"];
        $FilmImg = $_FILES['FilmImg'];
        $FilmImgName = RandString() . ".jpg";
        $FileType = explode("/", $FilmImg['type'])[1];
        $FileError = $FilmImg['error'];
        $FileTmpName = $FilmImg['tmp_name'];
        if (empty($FilmImg)) {
            echo "Kechirasiz Film Rasmini Yuklamadinggiz";
        } else {
            if ($FileError != 0) {
                echo "Film Rasmini yuklashda xatolik yuz berdi boshqa risim bilan urunib ko'rish";
            } else {
                if (!in_array($FileType, $ImgTypes)) {
                    echo "Kechirasiz Rasim Turi jpg, png, jpeg bo'lishi zarur";
                } else {
                    if ($NewFilmAbout == "Yangi Film Haqida Hammaga Habar Berish")
                        echo "Yangi Film Haqida Hammaga Xabar Berishni Tasdiqlamadinggiz";
                    else {
                        if ($FilmType == "Video Turi")
                            echo "Video turini tanlamadinggiz";
                        else {
                            if ($Filmlanguage == "Film Tili") {
                                echo "film Tilini tanlamadinggiz";
                            } else {
                                if (empty($FilmYear)) {
                                    echo "Film Chiqarilgan Yilni kiritmadinggiz";
                                } else {
                                    if (empty($FilmName)) {
                                        echo "Film Nomini kiritmadinggiz";
                                    } else {
                                        if (empty($FilmSize)) {
                                            echo "Film url manzilini kiritmadinggiz";
                                        } else {
                                            $FilmSize = GetFileSize($FilmSize);
                                            if ($FilmSize == "not") {
                                                echo "Film Topilmadi Url manzilni tekshirib qayta urinib ko'ring";
                                            } else {
                                                if (empty($FilmDate)) {
                                                    echo "Film Davomiyligini kiritmadinggiz";
                                                } else {
                                                    if ($FilmHeight == "Film Sifati") {
                                                        echo "Film Sifatini kiritmadinggiz";
                                                    } else {
                                                        if (empty($FilmCaption)) {
                                                            echo "Film Haqida Malumot bermadinggiz";
                                                        } else {
                                                            if ($FilmJanr == "Film Janrini Tanlang") {
                                                                echo "Film Janrini Tanlamadinggiz";
                                                            } else {
                                                                if ($FilmYoung == "Film Yosh chagarasini tanlang") {
                                                                    echo "Film Yosh chegarasini Tanlamadinggiz";
                                                                } else {
                                                                    if ($FilmRating == "Film Rating darajasini tanlang") {
                                                                        echo "Film Rating darajasini tanlamadinggiz";
                                                                    } else {
                                                                        if ($FilmState == "Film Olingan davlatni tanlang") {
                                                                            echo "Film Suratga olingan davlatni tanlamadinggiz";
                                                                        } else {
                                                                            $url = $_POST['FilmUrl'];
                                                                            $res = mysqli_query($con, "SELECT * FROM films WHERE FilmUrl='$url'");
                                                                            if (mysqli_num_rows($res) != 0) {
                                                                                echo "Film Avval Yuklangan";
                                                                            } else {
                                                                                move_uploaded_file($FileTmpName, "../Assets/images/FilmImg/" . $FilmImgName);


                                                                                $res = mysqli_query($con, "INSERT INTO `films`(`FilmName`, `FilmUrl`, `FilmImg`, `FilmCaption`, `FilmHeight`, `FilmSize`, `FilmYear`, `FilmJanr`, `FilmState`, `FilmYoung`, `FilmRating`,`FilmLanguage`,`FilmDate`,`FilmType`) VALUES('$FilmName','$FilmUrl','$FilmImgName','$FilmCaption','$FilmHeight','$FilmSize','$FilmYear','$FilmJanr','$FilmState','$FilmYoung','$FilmRating','$Filmlanguage','$FilmDate','$FilmType');");
                                                                                if (mysqli_error($con)) {
                                                                                    echo mysqli_error($con);
                                                                                } else {
                                                                                    echo "ok";
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

/**
 * yangi serial qo'shish
 */
    function NewSerial()
    {
        $con = $this->con();
        $SerialUrl = mysqli_real_escape_string($con, $_POST['SerialUrl']);
        $SerialSection = mysqli_real_escape_string($con, $_POST['SerialSection']);

        $SerialID = $_POST["SerialID"];
        $SerialSize = $_POST['SerialUrl'];
        if (empty($SerialID)) {
            echo "Serila ID raqamini kiritmadinggiz";
        } else {
            if (empty($SerialUrl)) {
                echo "Serial Url manzilini kiritmadinggiz";
            } else {
                if (empty($SerialSection)) {
                    echo "Serial Nechinchi qismi ekanligini Kiritmadinggiz";
                } else {
                    $SerialSize = GetFileSize($SerialSize);

                    if ($SerialSize == "not") {
                        echo "Serial topilmadi Url manzilni tekshirib qayta urunib ko'ring";
                    } else {
                        $FilmInfo = mysqli_query($con, "SELECT * FROM films WHERE ID='$SerialID'");
                        if (mysqli_num_rows($FilmInfo) == 0) {
                            echo "Film Topilmadi Film ID raqamini Tekshirib qayta urunib ko'ring";
                        } else {
                            $res = mysqli_query($con, "SELECT FilmSection FROM serial WHERE FilmID='$SerialID' ORDER BY FilmSection DESC LIMIT 0,1");
                            if (mysqli_num_rows($res) == 0) {
                                $Section = 1;
                                $FilmInfo = mysqli_fetch_all($FilmInfo, MYSQLI_ASSOC)[0];
                                $FilmUrl = mysqli_real_escape_string($con, $FilmInfo['FilmUrl']);
                                $FilmSize = $FilmInfo['FilmSize'];
                                $res = mysqli_query($con, "INSERT INTO `serial`(`FilmUrl`, `FilmSize`, `FilmSection`,`FilmID`) VALUES ('$FilmUrl','$FilmSize','$Section','$SerialID');");
                                if (mysqli_error($con)) {
                                    echo mysqli_error($con);
                                }
                            }
                            $res = mysqli_query($con, "SELECT * FROM serial WHERE FilmUrl='$SerialUrl'");
                            if (mysqli_num_rows($res) != 0) {
                                echo "Serial oldin Yuklangan";
                            } else {
                                $Section = $SerialSection;
                                $res = mysqli_query($con, "SELECT * FROM `serial` WHERE FilmID='$SerialID' AND FilmSection='$Section'");
                                if (mysqli_num_rows($res) != 0) {
                                    echo "Filmning Bu Qismi Avvalroq Yuklangan";
                                } else {
                                    $res = mysqli_query($con, "INSERT INTO `serial`(`FilmUrl`, `FilmSize`, `FilmSection`,`FilmID`) VALUES ('$SerialUrl','$SerialSize','$Section','$SerialID');");
                                    if (mysqli_error($con)) {
                                        echo mysqli_error($con);
                                    } else {
                                        echo "ok";
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }

/**
 *yangi serial qo'shish
 */
    function PlayList()
    {
        $con = $this->con();
        $UserID = $_POST['UserID'];
        $VideoID = $_POST['VideoID'];
        $res = mysqli_query($con, "SELECT * FROM playlist WHERE UserID = '$UserID' AND VideoID='$VideoID'");
        if (mysqli_num_rows($res) == 0) {
            $res = mysqli_query($con, "INSERT INTO playlist(UserID,VideoID) VALUES('$UserID','$VideoID')");
            echo "ok";
        }
    }
}

(new Confirm());
