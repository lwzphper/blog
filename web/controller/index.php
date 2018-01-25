<?php namespace web\controller;
use core\View;
use Gregwar\Captcha\CaptchaBuilder;

class Index{
    protected $view;
    public function __construct()
    {
        $this->view = new View();
    }

    public function index(){
        return 111;
    }

    public function show(){
        return $this->view->make('index')->with('version','1.0');
    }

    public function login(){
        return $this->view->make('login');
    }

    public function captcha(){
        $builder = new CaptchaBuilder;
        $builder->build();
        $_SESSION['phrase'] = $builder->getPhrase();
        header('Content-type: image/jpeg');
        $builder->output();
    }
}