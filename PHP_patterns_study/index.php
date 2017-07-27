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
/* 观察者模式（Observer）, 当一个对象状态发生改变时，依赖他的对象会收到通知，并自动更新低耦合 */
/* 这样写就可以解耦两个逻辑，还可以动态关闭观察者 */
/* 
class Event extends \other\EventGenerator
{
    function trigger()
    {
        echo "Event<br/>\n";
        $this->notify();
    }
}
class Observer1 implements \other\Observer
{
    function update($event_info = null)
    {
        echo "逻辑！观察者1";
    }
}

class Observer2 implements \other\Observer
{
    function update($event_info = null)
    {
        echo "逻辑！观察者2";
    }
}

$event = new Event;
$event->addObserver(new Observer1);
$event->addObserver(new Observer2);
$event->trigger(); */

/* ============================================================================= */


/* ===========================================原型模式=========================== */

/* new 一个原型对象，每次画布就不再需要初始化了， 直接克隆，节省开销 这样就节省重复性代码*/
/* $yuanxing = new other\Canvas();
$yuanxing->init();

$canvas1 = clone $yuanxing;
$canvas1->rect(3, 4, 5, 25);
$canvas1->draw();



$canvas2 = clone $yuanxing;
$canvas2->rect(3, 4, 5, 25);
$canvas2->draw(); */
/* ============================================================================= */
/* ===========================================装饰器模式=========================== */
/* 动态添加修改类的功能，传统的就是一个类提供一个功能，如果要在修改并添加额外的功能， 传统编程就需要用子类继承，并实现他的方法， 使用装饰器就可以避免这个问提 ，下面添加了两个装饰器*/
/* $canvas1 = new other\Canvas();
$canvas1->init();
$canvas1->addDecorator(new \other\ColorDrawDecorator('green')); 
$canvas1->addDecorator(new \other\SizeDecorator('100px', '500px'));
$canvas1->rect(3, 6, 4, 12);
$canvas1->draw(); */
/* ============================================================================= */
/* ===============================迭代器模式====================================== */
/* 不需要了理解内部实现的前提，遍历一个聚合对象的内部元素，隐藏遍历元素的操作 */
/* ============================================================================= */
/* ===============================代理模式====================================== */
/* 在客户端和实体之间建立一个代理对象proxy，客户端对实体进行操作全部委派给代理对象，隐藏具体实现细节，proxy还可以代码分离，部署到另外的服务器。业务代码中通过RPC来委派 */
/* ============================================================================= */

echo 'hello dns';
?>