<?php

/** account malumolarini olish uchun class*/
class AccountModel extends DB
{

    function UserData()
    {
        $con = $this->con();
        $ID = $_SESSION['ID'];
        $res = mysqli_query($con,"SELECT * FROM users WHERE ID='$ID'");
        if(mysqli_num_rows($res)!=0){
            $UserData = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
            return $UserData;
        }

    }
}
