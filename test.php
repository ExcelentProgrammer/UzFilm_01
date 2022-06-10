<?php
$arr1 = ['name'=>"samandar","last_name"=>"azamov"];
$arr2 = $_GET;
print_r(array_diff($arr1,$arr2));