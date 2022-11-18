<?php
$num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
$num++;
setcookie("num", $num);
echo "Пользователь обновил страницу " . $num;

/*
$cook_val = array('cook_one' => 'one', 'cook_two' => 'two', 'cook_three' => 'three');

setcookie('some_cookie_name', serialize($cook_val));

$get_cook = unserialize($_COOKIE['some_cookie_name']);

echo $get_cook['cook_one'];*/