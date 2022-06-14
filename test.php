<?php


if($_FILES['photo']){
    $file = $_FILES['photo'];
    move_uploaded_file($file['tmp_name'],"upload/img.jpg");
}