<?php 
namespace other;


/**
* 
*/
class Register
{	
	protected static $objects;
	/*注册到全局*/
	function set($alias, $db)
	{
		self::$objects[$alias] = $object;
	}

	function get($key)
	{
		if(!isset(self::$objects[$key]))
		{
			return false;
		}
		return self::$objects[$key];
		
	}

	/*移除注册*/
	function _unset()
	{
		unset(self::$objects[$alias]);
	}

}



 ?>