<?php 
interface IUser 
{	
	
	function getName2();
}

class User 
{
	public static function Load($id)
	{
		return new User($id);
	}

	public static function Create()
	{
		return new User(null);
	}
	public function __construct($id){}
	public function getName()
	{
		return 'locqj';
	}

}


/**
* 
*/
class User1 implements IUser
{
	
	function __construct($id)
	{
		
	}

	public static function Load($id)
	{
		return new User1($id);
	}
	public function getName2()
	{
		return 'test';
	}
	public function test()
	{
		return 'testaaa';	
	}
	public static function Create()
	{
		return new User1(null);
	}


}

$uo = User1::Load(1);
echo ($uo->test()."\n");

