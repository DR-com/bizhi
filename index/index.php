<?php
/**
 * 首页
 * 本程序由ZYI开发，仅提供研究参考，禁止一切商业行为
 * 程序作者QQ：1617184046
 * 官方网址：www.999il.cn
 */
$cids = $_GET['cids'];
$pageno = $_GET['pageno'];
$count = $_GET['count'];

$re = file_get_contents("http://wp.birdpaper.com.cn/intf/GetListByCategory?cids=$cids&pageno=$pageno&count=$count");
$re = json_decode($re, true);
$tupian = $re['data']['list'];

require 'variable.php';
$smarty -> assign('tupian' , $tupian);
$smarty -> assign('enlarge' , $_GET['enlarge']);
$enlargeurl = $_POST['url'];
try {
	$smarty -> display('index.html');
} catch (Exception $e) {
    print $e->getMessage();
    exit();
}