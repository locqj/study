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


// $array = new SplFixdArray(10);
// $db = \othre\Register::get('db1');

// echo $array[10];

// $dn = new other\Database\MySQL();
// $db->connect('127.0.0.1', 'root', 'root', 'hengju');
// $db->query("show databases");
// $db->close();


// // 策略模式减少硬编码
// class Page
// {   
//     protected $strategy;
//     function index()
//     {   
//         echo 'AD';
//         $this->strategy->showAd();
//         echo 'Category';
//         $this->strategy->showCategory();
        
//     }


//     function setStrategy(\other\UserStrategy $strategy)
//     {
//         $this->strategy = $strategy;
//     }
   

// }


// $page = new Page();
// // 通过浏览器访问的get不一样来控制，这样维护起来也方便，只需要新增策略类，然后再set就可以的 这样解偶， 将两个类互相依赖的关系叫做紧偶，不利于维护和开发
// if(isset($_GET['female'])) {
//     $strategy = new \other\FemaleUserStrategy;
// } else {
//     $strategy = new \other\MaleUserStrategy;    
// }

// $page->setStrategy($strategy);
// $page->index();
 
// //  end

/** 数据对象映射模式，是将对象和数据储存映射起来，对一个对象的操作会映射为数据存储的操作
 * eg： 实现一个orm类 将sql映射成简单的orm
 *
**/
$user = new \other\User(5);

var_dump($user->id);


?>