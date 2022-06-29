<?php

const ROOT_PATH = __DIR__."/"; //fayil joylashuvini olish uchun contanta


require_once ROOT_PATH."/Config/GetEnv.php"; //.env faylidagi o'zgaruvchilarni $_ENV supper global o'zgaruvchisiga o'zlashtirish


require_once ROOT_PATH."/Config/Cookie.php"; //cookie larni boshqarish uchun class


require_once ROOT_PATH."/Config/Session.php"; //Sessiyalarni Boshqarish uchun class


require_once ROOT_PATH."/Config/Constants.php"; //constantalar Sayt o'zgarmas sozlamalar


require_once ROOT_PATH."/Config/Config.php"; //sayt Sozlamalari domen || Video player || ...


require_once ROOT_PATH . "/Config/DB.php"; //malumotlar bazasiga ulanish uchun class


require_once ROOT_PATH."/App/Class/Func.php"; //Yordamchi Funcsiyalar

require_once ROOT_PATH."/Config/UserData.php"; //Sayitga kirgan Foryalanuvchi malumotlarini olish uchun class Username || FirstName || LastName || Role || ID

require_once ROOT_PATH."Config/Route.php"; //Route tizimini boshqarish uchun class


/**
 * asosiy shablon
 */
if($_GET['menu'] == AdminMenu and $_SESSION['UserRole'] == RoleAdmin){
  require_once ROOT_PATH."/App/View/Layout/Admin/index.php"; //Admin Template
}else{
  require_once ROOT_PATH."/App/View/Layout/User/index.php"; //User Temlpate
}

