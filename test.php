<?php
 $File = file_get_contents($FilmImgUrl);
 $File = file_get_contents("http://asilmedia.org/uploads/mini/fullstory/6d/dbc72904e4d03faf9d095c04ebd6df.jpg");
 print_r($File." file ".$FilmImgUrl);
 file_put_contents("./Assets/images/FilmImg/i.jpg" , $File);