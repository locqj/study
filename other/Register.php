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

	/*移除注册*/
	function _unset()
	{
		unset(self::$objects[$alias]);
	}

}



 ?>