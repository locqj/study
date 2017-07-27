<?php
namespace other;
/* ArrayAccess php标准api，数组对象的方式，借口必须重写这四种方法offsetGet，offsetSet offsetExists offsetUnset*/
class Config implements \ArrayAccess
{
    protected $path;
    /* 类属性，保存加载过的类属性 */
    protected $configs = array();
    /* 文件系统目录 */
    function __construct($path)
    {
        $this->path = $path;
    }

    function offsetGet($key)
    {   
        /* 判断该key是否存在 */
        if (empty($this->configs[$key]))
        {   
            /* 不存在就去文件去拿 */
            $file_path = $this->path.'/'.$key.'.php';
            $config = require $file_path;
            $this->configs[$key] = $config;
        }
        return $this->configs[$key];
    }

    function offsetSet($key, $value)
    {
        throw new \Exception("cannot write config file.");
    }
    /* is_exist */
    function offsetExists($key)
    {
        return isset($this->configs[$key]);
    }
    /* del */
    function offsetUnset($key)
    {
        unset($this->configs[$key]);
    }
}