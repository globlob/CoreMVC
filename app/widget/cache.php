<?php
include 'app/config/settings.php';
print_r($cach);
class cache{
    public $cachetime = 5 * 24 * 60 * 60;
    public $app_url = 'core';
    public $caching = true;
    public function cacheStart(){
        if ($this->caching == true) {
            $filename = md5($_SERVER['REQUEST_URI']) . ".html";
            $cachefile = "../../" . $this->app_url . "/app/cache/" . $filename;
            $cachetime = $this->cachetime;
            if (file_exists($cachefile)) {
                if (time() - $cachetime < filemtime($cachefile)) {
                    readfile($cachefile);
                    exit;
                } else {
                    unlink($cachefile);
                }
            }
            ob_start();
        }
    }

    public function cacheEnd(){
        if ($this->caching == true) {
            $filename = md5($_SERVER['REQUEST_URI']) . ".html";
            $cachefile = "../../" . $this->app_url . "/app/cache/" . $filename;
            $fp = fopen($cachefile, 'w+');
            fwrite($fp, ob_get_contents());
            fclose($fp);
            ob_end_flush();
        }
    }

    public function cacheDelete($name){
        if ($name == "all"){
            $dir = scandir("../cache/");
            foreach($dir as $f) {
                clearstatcache();
                if (is_file("../../".$this->app_url."/app/cache/" . $f))
                    unlink("../../".$this->app_url."/app/cache/" . $f);
            }
    }
        $filename = md5($_SERVER['REQUEST_URI']).".html";
        $cachefile = "../../".$this->app_url."/app/cache/".$filename;

    }
}