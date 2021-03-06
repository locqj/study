<?php
namespace other;
/**
 * 工厂模式是其他模式的核心
 */
class Factory
{
    static $proxy = null;
    /**
     * [createDatabase 工厂加单例]
     * @return [type] [description]
     */
    static function createDatabase()
    {
        $db = Database::getInstance(); //调用单例模式的入口

        Register::set('db1', $db); //注册到注册树

        return $db;
    }
    /**
     * @param $id
     * @return User
     */
    static function getUser($id)
    {
        $key = 'user_'.$id;
        $user = Register::get($key);
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }

    /**
     * @param $name
     * @return bool
     */
    static function getModel($name)
    {
        $key = 'app_model_'.$name;
        $model = Register::get($key);
        if (!$model) {
            $class = '\\App\\Model\\'.ucwords($name);
            $model = new $class;
            Register::set($key, $model);
        }
        return $model;
    }

    static function getDatabase($id = 'master')
    {
        if ($id == 'proxy')
        {
            if (!self::$proxy)
            {
                self::$proxy = new \other\Database\Proxy;
            }
            return self::$proxy;
        }

        $key = 'database_'.$id;
        if ($id == 'slave')
        {
            $slaves = Application::getInstance()->config['database']['slave'];
            $db_conf = $slaves[array_rand($slaves)]; //随机取一项配置
        }
        else
        {
            $db_conf = Application::getInstance()->config['database'][$id];
        }
        $db = Register::get($key);
        if (!$db) {
            $db = new Database\MySQLi();
            /* 读取配置里面的变量 */
            $db->connect($db_conf['host'], $db_conf['user'], $db_conf['password'], $db_conf['dbname']);
            Register::set($key, $db);
        }
        return $db;
    }
}