<?php
return array(
	//'配置项'=>'配置值'
	'DB_HOST'	=> '127.0.0.1',
	'DB_NAME'	=> 'think',
	'DB_USER'	=> 'root',
	'DB_PWD'	=> 'matt',
	'DB_PREFIX'	=> 'hd_',

	'TMPL_TEMPLATE_SUFFIX'	=> '.html',	//模板文件后缀名
	'URL_HTML_SUFFIX'		=> 'html',	//URL最后的后缀名
	'URL_MODEL'				=> 1,		//0 = 传统& | 1 = / | 2 = 去掉了.php

	'DEFAULT_FILTER' 		=> 'htmlspecialchars'
);
?>