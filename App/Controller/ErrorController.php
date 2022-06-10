<?php


class ErrorController
{ 
 /**
  * error_404
  *
  * @return void
  * Sahifa topilmaganligi haqida malumot beruyvchi sahifa
  */
 function error_404(){
     require_once ROOT_PATH."/App/View/Error/404.php";
 }  
}
