<?php

// +----------------------------------------------------------------------
// |  3G手机版配置
// +----------------------------------------------------------------------
return array(
	'URL_MODEL' => 0,
	'COMPONENTS' => array(
		'Tree' => array(
			'class' => '\\Tree',
			'path' => 'Libs.Util.Tree',
		),
	),
    'TMPL_ACTION_ERROR' => APP_PATH . 'Wap/View/error.php', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS' => APP_PATH . 'Wap/View/success.php', // 默认成功跳转对应的模板文件
);
