<?php
//اضافه کردن عکس پیش فرض نوشته
class initializer{
    public static function setup(){
        add_theme_support('post-thumbnails');
    //نوشتن تگ اتوماتیک
    add_theme_support('title-tag');
    }
}