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
require_once ROOT_PATH."/App/View/Layout/index.php";

