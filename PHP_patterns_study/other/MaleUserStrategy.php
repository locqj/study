<?php
/**
 * Created by PhpStorm.
 * User: htf
 * Date: 14-11-3
 * Time: 下午11:32
 */

namespace other;

class MaleUserStrategy implements UserStrategy {
    function showAd()
    {
        echo "Iphone6";
    }
    function showCategory()
    {
        echo "电子产品";
    }
} 