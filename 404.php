<?php
// Задаем код состояния HTTP 404
header('HTTP/1.0 404 Not Found');
require_once 'include/config.php';
require_once PRESENTATION_DIR . 'link.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
Page Not Found (404)
</title>
<link href="<?php echo Link::Build('styles/tshirtshop.css'); ?>"
type="text/css" rel="stylesheet" />
</head>
<body>
	
<div style='background:url("<?php echo Link::Build('/images/404.jpg'); ?>") no-repeat  center center; 
width:100%; height:100%; background-size:cover;'>
<div id="doc" class="yui-t7">
<div id="bd">
<div id="header" class="yui-g">
<a href="<?php echo Link::Build(''); ?>"></a>
</div>

<div  style="font-size:18px; padding:20px;" id="contents" class="yui-g">
<h1>
Sorry! Такой страницы не существует.
</h1>
<p>
Посетите пожалуйста 
<a href="<?php echo Link::Build(''); ?>"><b>Green-Farm.tk</b></a>
, если вы ищете свежие фрукты и овощи <br> или
<a href="<?php echo ADMIN_ERROR_MAIL; ?>"><b>напишите нам</b></a>
, если вам нужно что-то еще
</p>
<p>Спасибо!</p>
<p>_________________</p>
<p>Команда магазина.</p>
</div>
</div>
</div>
</div>
</body>
</html>