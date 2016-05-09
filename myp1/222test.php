<?php

$var2 = $_SERVER['REQUEST_URI'];

if(isset($_SERVER['HTTP_REFERER'])){
       	//echo 'refer不为空';

	//echo '</br>';
	$var = $_SERVER["HTTP_REFERER"];
	$varstr1 =  (string)$var;
	$varstr2 = (string)$var2;
	$varpicurl = "/realpic".$varstr2;


	$lines_array = file($varstr1);
	$lines_string = implode('', $lines_array); 
	$pos = strpos($lines_string,'utf-8');
	if($pos===false){$lines_string = iconv("gbk","utf-8",$lines_string);}
	eregi("<title>(.*)</title>", $lines_string, $title);
	//echo $title[1];

	$lstr2 = "性吧";
	$lstr2 = iconv("gbk","utf-8",$lstr2);

	//echo strpos($title[1],$lstr2);

	if(strpos($title[1],$lstr2) !== false){
		header('HTTP/1.1 301 Moved Permanently');
		header("Location:$varpicurl");
		return;
	}
	

	header('HTTP/1.1 301 Moved Permanently');
	header("Location:http://www.picplane.site/t11.jpg");



} else {
	//echo 'refer为空';
	
	$varstr2b = (string)$var2;
	   //$varpicurl2 = "/realpic".$varstr2b;

	header('HTTP/1.1 301 Moved Permanently');
	header( "Content-type: image/jpeg");
	  //header('Location:'.$varpicurl2);
 	//header('Location:http://www.picplane.site/realpic'.$varstr2b);
	header("Location:http://www.picplane.site/t22.jpg");



}

?>