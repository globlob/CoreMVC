<?php
class Home extends Controller{
    public function __construct(){
        $this->getWidget('golink');
        $this->getWidget('form');
        $this->getWidget('cache');
        $this->getWidget('log');

    }
    public function index($name = ''){
        $data = [
                'text'=> $name
                ];
        $cache = new cache();
        $cache->app_url = "core";
        $cache->caching = false;
        $cache->cacheStart();
        _log_("heder.txt");
        $this->view('home/index',$data);
        $cache->cacheEnd();
    }

    public function create($username = '',$email = ''){
        User::create([
            "username" => $username,
            "email"    => $email,
        ]);


    }
}

