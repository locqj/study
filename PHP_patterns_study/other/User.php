<?php

namespace other;
// 数据映像模式封装sql 成对象 orm
class User {
    public $id;
    public $name;
    public $pwd;
    public $employee_code;

    protected $db;

    function __construct($id)
    {
        $this->$db = new \other\Database\MySQLi();
        $this->$db->connect('127.0.0.1', 'root', 'root', 'test');
        $res = $this->$db->query('select * from user limit 1');
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->pwd = $data['pwd'];
        $this->name = $data['name'];
    }
    function __destruct()
    {

    }

}