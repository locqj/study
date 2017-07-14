<?php  
/*注册树模式*/


namespace registertree;

class Register
{
	protected static $objects;

	static function set($ailas, $object)
	{
		self::$objects[$alias] = $object;
	}

	static function get($object)
	{
		return $object;
	}

	function _unset()
	{
		unset(self::$objects[$alias]);
	}
}


?>