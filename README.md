# composer项目说明
---
#### 前言：命名空间的名称为目录名，如：core一级目录下的文件命名空间为：namespace core; web/controller目录下的命名空间为：namespace web\controller;
步骤一：配置composer.json文件的autoload自动加载模块，将需要自动加载的文件（files） 和 命名空间（psr-4）配置好
    
    "autoload": {
        "files" : [
            "core/functions.php"
        ],
        "psr-4": {
            "core\\": "core/",
            "web\\": "web/"
        }
    },

步骤二：需要在入口文件index.php引入composer的自动加载类

    include "vendor/autoload.php";
       
