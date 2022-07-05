<?php

namespace App;


class Route
{
    public static function Start()
    {
        DataAdd("routeInfo",false);
        if (empty($_GET)) {
            echo "<script>location.href='/?menu=home'</script>";
        }elseif(empty($_GET['menu']) AND !empty($_GET['s'])){
            $s = str_replace("'","%27",$_GET["s"]);
            echo "<script>location.href='".menu(MenuSearch)."&p=1&s=".$s."'</script>";
        }
        if ($_GET['menu'] == "logout") {
            $db = new \DB();
            session_destroy();
            $token = $_COOKIE['Token'];
            setcookie("Token", "", time() - 1, "/");
            mysqli_query($db->con(),"DELETE FROM token WHERE Token='$token'");
            header("location: /");
        }

    }

  
    static public function get($page, array $code)
    {


        $menu = !empty($_GET['menu']) ? $_GET['menu'] : "";
        if (is_array($page)) {
            $keys = array_keys($page);
            $values = $page;
            $i = 0;
            $r = 0;
            foreach ($keys as $key) {
                $value = !empty($values[$key]) ? $values[$key] : null;
                if ((!empty($_GET[$key]) ? $_GET[$key] : "qwertyuiopasdfghjklzxcvbnm1234567890") == $value) {
                    $r++;
                } elseif (preg_match("/^[0-9]*$/", $key)) {
                    if (!empty($_GET[$value])) {
                        $r++;
                    }
                }
                $i++;
            }

            if (count($page) == $r and DataGet("routeInfo") != true) {
                require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
                ((new $code[0]())->{$code[1]}());
                DataAdd("routeInfo",true);
            }
        } else {
            if ($menu == $page and DataGet("routeInfo") != true) {
                require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
                ((new $code[0]())->{$code[1]}());
                DataAdd("routeInfo",true);
            }
        }

    }
    static public function default($code)
    {
        if (DataGet("routeInfo") != true) {
            require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
            ((new $code[0]())->{$code[1]}());
        }

    }
}




  // public function post($page, array $code)
    // {


    //     $menu = !empty($_POST['menu']) ? $_POST['menu'] : "";
    //     if (is_array($page)) {
    //         $keys = array_keys($page);
    //         $values = $page;
    //         $i = 0;
    //         $r = 0;
    //         foreach ($keys as $key) {
    //             $value = !empty($values[$key]) ? $values[$key] : null;
    //             if ((!empty($_POST[$key]) ? $_POST[$key] : "qwertyuiopasdfghjklzxcvbnm1234567890") == $value) {
    //                 $r++;
    //             } elseif (preg_match("/^[0-9]*$/", $key)) {
    //                 if (!empty($_POST[$value])) {
    //                     $r++;
    //                 }
    //             }
    //             $i++;
    //         }

    //         if (count($page) == $r and $this->routeInfo != true) {
    //             require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
    //             ((new $code[0]())->{$code[1]}());
    //             $this->routeInfo = true;
    //         }
    //     } else {
    //         if ($menu == $page and $this->routeInfo != true) {
    //             require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
    //             ((new $code[0]())->{$code[1]}());
    //             $this->routeInfo = true;
    //         }
    //     }

    // }