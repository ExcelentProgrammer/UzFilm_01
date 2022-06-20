<?php

namespace App;

if ($_GET['menu'] == "logout") {
    session_destroy();
    setcookie("ID", "", time() - 1, "/");
    setcookie("Password", "", time() - 1, "/");
    header("location: /");
}
class Route
{
    function __construct()
    {
        $this->routeInfo = false;
        if (empty($_GET)) {
            echo "<script>location.href='/?menu=home'</script>";
        }
    }

    public function get($page, array $code)
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

            if (count($page) == $r and $this->routeInfo != true) {
                require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
                ((new $code[0]())->{$code[1]}());
                $this->routeInfo = true;
            }
        } else {
            if ($menu == $page and $this->routeInfo != true) {
                require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
                ((new $code[0]())->{$code[1]}());
                $this->routeInfo = true;
            }
        }
    }
    public function default($code)
    {
        if ($this->routeInfo != true) {
            require_once ROOT_PATH . "App/Controller/" . $code[0] . ".php";
            ((new $code[0]())->{$code[1]}());
        }
    }
}
