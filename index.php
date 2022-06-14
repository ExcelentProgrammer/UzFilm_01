<?php
/**
 * fayil joylashuvini olish uchun contanta
 * 
 */
const ROOT_PATH = __DIR__."/";


/**
 * .env faylidagi o'zgaruvchilarni $_ENV supper global o'zgaruvchisiga o'zlashtirish
 */


require_once ROOT_PATH."/Config/GetEnv.php";

require_once ROOT_PATH."/Config/Cookie.php";

require_once ROOT_PATH."/Config/Session.php";
/**
 * constantalarni asosiy fayilga chaqirib olish
 */
require_once ROOT_PATH."/Config/Constants.php";

require_once ROOT_PATH."/App/Class/Func.php";

require_once ROOT_PATH."/Config/Config.php";
/**
 * malumotlar bazasiga ulanish uchun class
 */

 /**
  * sayit sozlamalari
  */
require_once ROOT_PATH."/Config/Connect.php";

require_once ROOT_PATH."/Config/UserData.php";



/**
 * Route tizimini boshqarish uchun class
 */
require_once ROOT_PATH."Config/Route.php";


/**
 * asosiy shablon
 */

if($_GET['menu'] == AdminMenu and $_SESSION['UserRole'] == RoleAdmin){
  require_once ROOT_PATH."/App/View/Layout/Admin/index.php";
}else{
  require_once ROOT_PATH."/App/View/Layout/User/index.php";
}
