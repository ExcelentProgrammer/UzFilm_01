<?php

function test($params){
    $a = $params['a'];
    $b = $params["b"];
    $c = $params["c"];
    $d = $params["d"];
    echo $a;
    echo $b;
    echo $c;
    echo $d;
}

test(["a"=>"salom","b"=>"qalaysan",'c'=>"c",'d'=>'d']);