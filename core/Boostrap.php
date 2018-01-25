<?php namespace core;
class Boostrap{
    public static function run(){
        session_start();
        self::parseUrl();
    }

    // 分析url生成控制器方法常量
    public static function parseUrl(){
        // 解析url，url格式：http://www.test.com/blog/index.php?s=index/show
        if(isset($_GET['s'])){
            $info = explode('/',$_GET['s']);
            $class = '\web\controller\\' . ucfirst($info[0]);
            $action = $info[1];
        }else{
            $class = '\web\controller\Index';
            $action = 'index';
        }
        echo ( new $class )->$action();
//        $info
    }
}