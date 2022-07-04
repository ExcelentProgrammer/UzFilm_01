<?php

require_once ROOT_PATH."/App/Model/ChatModel.php";

class ChatController extends ChatModel{
      function index(){
        require_once ROOT_PATH."/App/View/Chat/index.php";
      }
}