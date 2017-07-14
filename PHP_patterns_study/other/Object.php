<?php 

namespace other;

/**
* 
*/
class Object 
{	
	protected $array = array();
	/*往对象赋值*/
    function __set($key, $value)
    {
        var_dump(__METHOD__);
        $this->array[$key] = $value;
    }
    /*取值*/
    function __get($key)
    {
        var_dump(__METHOD__);
        return $this->array[$key];
    }

    /*方法不存在自动回调*/
    function __call($func, $param)
    {
        var_dump($func, $param);
        return "magic function\n";
    }

    static function __callStatic($func, $param)
    {
        var_dump($func, $param);
        return "magic static function\n";
    }

    function __toString()
    {
        return __CLASS__;
    }

    function __invoke($param)
    {
        var_dump($param);
        return "invoke";
    }




}

?>