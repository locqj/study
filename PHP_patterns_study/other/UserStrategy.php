<?php
/**
 * 策略模式减少硬编码
 * Created by PhpStorm.
 * User: htf
 * Date: 14-11-3
 * Time: 下午11:31
 */

namespace other;


interface UserStrategy {
    function showAd();
    function showCategory();
} 