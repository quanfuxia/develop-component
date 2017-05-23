<?php
/**
 * Created by 湖南全服侠网络科技有限公司.
 * User: 全服侠
 * 微信: quanfuxia
 * Date: 2017/5/23
 * Time: 17:35
 */

$loader = require __DIR__."/../vendor/autoload.php";

$loader->add("DevelopComponent",__DIR__."/../src");

$test = new DevelopComponent\Say();
$test->hello();