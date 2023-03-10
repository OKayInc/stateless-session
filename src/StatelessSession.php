<?php

namespace OKayInc;

class StatelessSession{
        public static function start($name){
                session_id($name);
                session_name($name);
                session_start();
        }

    /**
    *    Stores datas in the session.
    *    Example: $instance->foo = 'bar';
    *
    *    @param    name    Name of the datas.
    *    @param    value    Your datas.
    *    @return    void
    **/

        public static function set($name, $value){
                $_SESSION[$name] = $value;
        }

    /**
    *    Gets datas from the session.
    *    Example: echo $instance->foo;
    *   
    *    @param    name      Name of the datas to get.
    *    @param    default   Default value.
    *    @return   mixed     Datas stored in session.
    **/

        public static function get($name, $default = null){
                if (isset($_SESSION[$name])){
                        return $_SESSION[$name];
                }
                return $default;
        }

        public static function isset($name){
                return isset($_SESSION[$name]);
        }

        public static function unset($name){
                unset($_SESSION[$name]);
        }

        public static function json_encode(){
                return json_encode($_SESSION);
        }

        public static function reset(){
                return ($_SESSION = array());
        }
}
