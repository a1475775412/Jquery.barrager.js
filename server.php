<?php
/*!
 *@name     server.php
 *@project  jquery.barrager.js
 *@des      弹幕插件服务端演示
 *@author   a1475775412@qq.com
 *url       https://blog.xiaolin.mcxhz.cn/
 */

//mode=1 实时模式 mode=2 一次性获取模式
$mode=intval($_GET['mode']);
//数组里面可以自定义弹幕的所有属性。
$barrages=
array(
	array(
		'info'   => '第一条弹幕',
		'img'    => 'static/img/heisenberg.png',
		'href'   => 'https://blog.xiaolin.mcxhz.cn/',

		),
	array(
		'info'   => '第二条弹幕',
		'img'    => 'static/img/yaseng.png',
		'href'   => 'https://blog.xiaolin.mcxhz.cn/',
		'color'  =>  '#ff6600'

		),
	array(
		'info'   => '第三条弹幕',
		'img'    => 'static/img/mj.gif',
		'href'   => 'https://blog.xiaolin.mcxhz.cn/',
		'bottom' => 70 ,

		),
	array(
		'info'   => '第四条弹幕',
		'href'   => 'https://blog.xiaolin.mcxhz.cn/',
		'close'  =>false,

		),

	);

if($mode === 1 ){

    echo  json_encode($barrages[array_rand($barrages)]);


}elseif($mode === 2){

	echo   json_encode($barrages);

}
