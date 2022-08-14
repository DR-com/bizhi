<?php
$re = file_get_contents("http://wp.birdpaper.com.cn/intf/getCategory");
$re = json_decode($re, true);
$fenlei = $re['data'];


if(isset($_GET['search'])) {
	$search = $_GET['search'];
}
ob_clean();

switch($search) {
	// 打开分类
	case 'class_p':
	
	$cids = $_GET['cids'];
	$pageno = $_GET['pageno'];
	$count = $_GET['count'];
	
	if($pageno == ""){
		$pageno = '1';
	}
	
	$url = "index.php?cids=$cids&pageno=$pageno&count=$count";
	exit('{"code":-1,"msg":"正在跳转","url":"'.$url.'"}');
	break;
	
	
	case 'enlarge':
	
	$enlargeurl = $_POST['url'];
	$category = $_POST['category'];
	$tag = $_POST['tag'];
	exit('{"code":-1,"msg":"正在跳转","url":"'.$enlargeurl.'","category":"'.$category.'","tag":"'.$tag.'"}');
	break;
}