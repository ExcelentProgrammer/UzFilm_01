<?php


class AccountModel extends DB
{

    function UserData()
    {
        $con = $this->con();
        $UserName = $_SESSION['UserName'];
        $res = mysqli_query($con,"SELECT * FROM users WHERE UserName='$UserName'");
        if(mysqli_num_rows($res)!=0){
            $UserData = mysqli_fetch_all($res,MYSQLI_ASSOC)[0];
            return $UserData;
        }

    }
}
