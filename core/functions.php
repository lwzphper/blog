<?php namespace core;
// 打印数据
function dd($con){
    echo '<pre>'. print_r($con,TRUE) .'</pre>';
}