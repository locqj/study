<?php

namespace other;

class Proxy implements IUserProxy
{
    function getUserName($id) {
        echo "db do";
    }

    function setUserName($id, $name) {

    }
}