<?php


use App\Data;

use function App\DataGet;


class File
{
    static public function extends($FileName)
    {
        global $DataClass;
        $DataClass->add("FileName", $FileName);
    }
    static public function section($ContentName, $ContentBody)
    {
        global $DataClass;
        $DataClass->add($ContentName, $ContentBody);
    }
    static public function yield($Content)
    {
        global $DataClass;
        print_r($DataClass->get($Content));
    }
}






