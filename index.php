<?php 
define('BASEDIR', __DIR__); //定义一个常量来放根目录地址
include BASEDIR.'/other/Loader.php'; //调用自动加载类

spl_autoload_register('\\other\\Loader::autoload');
/**
 * 入口文件
 * app放业务逻辑代码
 * other放公共类
 */
//other\Object::test();

//App\Controller\Home\Index::test();

//spl标准库的栈（先进后出）
/*$stack = new SplStack(); 
$stack->push('data1\n');
$stack->push('data2\n'); 
echo $stack->pop();
echo $stack->pop();*/
//队列
/*$queue = new SplQueue();
$queue->enqueue('q1');
$queue->enqueue('q2');
echo $queue->dequeue();
echo $queue->dequeue();*/

//$obj->title = 'hello'; // 调用 __set()方法
//echo $obj->title; // 调用__get()方法
//echo $obj->test("50", 123); //方法不存在就回调该输入的信息 调用__call(), 和__callStaticall 实际上是相同的，只不过是用在static方法
//echo $obj; //将对象转换成字符串 __toString()
//echo $obj(); //将对象当做函数执行 __invoke()

?>