<?php

//判断是否PJAX请求
function is_pjax(){
    return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
}