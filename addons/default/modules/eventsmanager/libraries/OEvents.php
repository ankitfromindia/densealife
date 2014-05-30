<?php

class OEvents
{

    private static $_instance = null;
     
    public static function global_instance() {
        if(self::$_instance === null) {
            self::$_instance = new OEvents();
        }
        return self::$_instance;
    }
    public function __set($name, $value)
    {
        $this->$name = $value; 
    }
    public function __get($name)
    {
        return $this->$name; 
    }
   
    public function __call($name, $argument = null)
    {
        $attr = substr($name,4);
        if(strpos($name, 'set_')===0){
            $this->$attr = $argument[0]; 
        }
        if(strpos($name, 'get_') === 0){
            return $this->$attr;
        }
    }
}
