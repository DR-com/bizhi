<?php
/**
 * 模板配置
 * 本程序由ZYI开发，仅提供研究参考，禁止一切商业行为
 * 程序作者QQ：1617184046
 * 官方网址：www.999il.cn
 */
require 'public/libs/Smarty.class.php';
require 'ajax.php';

class mySmarty extends Smarty{
  public function __construct(array $options = array()){
    parent::__construct($options);
    $this->debugging = false; //开启debug模式
    $this->caching = false; //开启缓存
    $this->cache_lifetime = 120;  //缓存时间
	
	$this -> template_dir = "index/templates/default"; //模板存放目录
	$this -> compile_dir = "index/templates_c"; //编译目录 
	$this -> cache_dir="index/cache"; //缓存目录
	$this -> left_delimiter = "{"; //左定界符 
	$this -> right_delimiter = "}"; //右定界符 
  }
}