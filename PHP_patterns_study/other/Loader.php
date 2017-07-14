<?php 
namespace other;
/**
* 
*/
class Loader
{
	
	static function autoload($class)
	{
		/*var_dump($class); 包含了命名空间和类名*/
		require BASEDIR.'/'.str_replace('\\', '/', $class).'.php'; //str_replace将斜杠转换成反斜杠， 获取文件名文件信息
	}
}

 ?>