<?php

function A($x){
    echo $x;
}

call_user_func_array("A",["salom qalaysan"]);