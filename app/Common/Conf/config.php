<?php
return array(
	//'配置项'=>'配置值'
	//系统语言包设置,开启多语言包
	'LANG_SWITCH_ON' => true,
	'LANG_AUTO_DETECT' =>true,//自动侦测语言 开启多语言功能后有效果
	'LANG_LIST' 	=> 'zh-cn',//允许切换的语言表 用逗号分隔
	'VAR_LANGUAGE'     => 'l', // 默认语言切换变量
	'URL_MODEL' => '0',
	//数据库
	'DB_TYPE' => 'mysql',
	'DB_HOST' => 'localhost',
	'DB_NAME' => 'myblog',
	'DB_USER' => 'root',
	'DB_PWD'  => 'root',
	'DB_PORT' => '3306',
	'DB_PREFIX' => 'my_',
	'DB_CHARSET' => 'utf8',
);