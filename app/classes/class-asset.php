<?php
class Asset{
    public static function __callstatic($name,$arguments){
        switch($name){
            case 'css':
                self::css($arguments[0]);
            break;
            case 'js':
                self::css($arguments[0]);
            break;    
            case 'image':
                self::css($arguments[0]);
            break;
            case 'lib':
                self::css($arguments[0]);
            break;
            case 'mail':
                self::css($arguments[0]);
            break;
            case 'css':
                self::css($arguments[0]);
            break;
        }

    }
    private static function css($file_name){
        $file_url=THEME_URL.'/assets/css/'.$file_name;
        echo $file_url;
    }
    
    public static function js($file_name){
        $file_url=THEME_URL.'/assets/js/'.$file_name;
        echo $file_url;
    }   
    public static function image($file_name){
        $file_url=THEME_URL.'/assets/image/'.$file_name;
        echo $file_url;
     }   
     public static function lib($file_name){
        $file_url=THEME_URL.'/assets/lib/'.$file_name;
        echo $file_url;
     } 
     public static function mail($file_name){
        $file_url=THEME_URL.'/assets/mail/'.$file_name;
        echo $file_url;
     }   
     public static function scss($file_name){
        $file_url=THEME_URL.'/assets/scss/'.$file_name;
        echo $file_url;
     }  
}