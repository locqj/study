<?php 

namespace other;

/**
* 
*/
class Database 
{	
	private $db;
	/*屏蔽其他地方实例化*/
	private function __construct()
	{

	}
	/*单例模式，从未创建就创建，创建就不实例化*/
	static function getInstance()
	{	
		if(self::$db){
			return self::$db;
		}else{
			self::$db = new self();
			return self::$db;
		}
	}

	function where($where)
	{
		return $this;
	}

	function limit($limit)
	{
		return $this;
	}

	function order($order)
	{
		return $this;
	}
}







 ?>