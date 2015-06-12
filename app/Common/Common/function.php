<?php
/**
 * 读取配置文件
 */
function read_config($dir =''){
	if(empty($dir)) $dir = './Public/data/web_config';
	$fp = fopen($dir,'r');
	$cf = @unserialize(fread($fp, filesize($dir)));
	return $cf;
}

/**
 * 写入配置文件
 */
function write_config($arr,$dir=''){
	if(empty($dir))$dir = './Public/data/web_config';
	$write = @file_put_contents($dir, serialize($arr));
	return $write;
}

 function mysql_version(){
 	$db = new \Think\Model();
 	$my = $db->query("select version() as mysql_version");
 	return $my[0]['mysql_version'];
 }