<?php 
	
/**
 * 一个事例
 *
 * 一个农场，要向市场销售水果
 * 农场里有三种水果 苹果、葡萄
 * 我们设想：1、水果有多种属性，每个属性都有不同，但是，他们有共同的地方 | 生长、种植、收货、吃
 *       2、将来有可能会增加新的水果、我们需要定义一个接口来规范他们必须实现的方法
 *       3、我们需要获取某个水果的类，要从农场主那里去获取某个水果的实例，来知道如何生长、种植、收货、吃
 */


/**
 * 虚拟产品接口类
 * 定义好需要实现的方法
 */
interface fruit {
	function grow();

	function plant();

	function harvest();

	function eat();
}


/**
 * 定义具体产品类 苹果
 * 首先，我们要实现所继承的接口所定义的方法
 * 然后定义苹果所特有的属性，以及方法
 */
/**
* 
*/
class Apple implements fruit
{
	private $treeAge; //实例化输出值

	private $color;  //实例化输出值

	public function grow() {
		return "Apple Grow";
	}

	public function plant() {
		return "Apple Plant";
	}

	public function harvest() {
		return "Apple Harbest";
	}

	public function eat() {
		return "Apple Eat";
	}

	  //取苹果树的年龄
	public function getTreeAge(){
		return $this->treeAge;
	}

	//设置苹果树的年龄
	public function setTreeAge($age){
		$this->treeAge = $age;
		return true;
	}

	//设置苹果树的年龄
	public function setColor($color){
		$this->color = $color;
		return true;
	}


}

/**
 * 定义具体产品类 葡萄
 * 首先，我们要实现所继承的接口所定义的方法
 * 然后定义葡萄所特有的属性，以及方法
 */
class Grape implements fruit{

	//葡萄是否有籽
	private $seedLess;

	public function grow(){
		return "grape grow";
	}

	public function plant(){
		return "grape plant";
	}

	public function harvest(){
		return "grape harvest";
	}

	public function eat(){
		return "grape eat";
	}

	//有无籽取值
	public function getSeedLess(){
		return $this->seedLess;
	}

	//设置有籽无籽
	public function setSeedLess($seed){
		$this->seedLess = $seed;
		return true;
	}
}

/**
 *农场主类 用来获取实例化的水果
 *
 */
class farmer{

  //定义个静态工厂方法
  public static function factory($fruitName){
    switch ($fruitName) {
     	case 'apple':
        	return new Apple();
        	break;
     	case 'grape':
        	return new Grape();
	        break;
		default:
	        throw new badFruitException("Error no the fruit", 1);
	        break;
    }
  }
}

class badFruitException extends Exception{
	public $msg;
	public $errType;
	public function __construct($msg = '' , $errType = 1){
	$this->msg = $msg;
	$this->errType = $errType;
  }  
}

/**
 * 获取水果实例化的方法
 */
try{
  	$appleInstance = farmer::factory('apple');
  	$appleInstance->setTreeAge('100');
	$appleInstance->setColor('blue');
	
	$eat = $appleInstance->eat();
  	var_dump($eat);
}catch(badFruitException $err){
  	echo $err->msg . "_______" . $err->errType;
}
