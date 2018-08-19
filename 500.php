<?php
// Задаем код состояния 500
header('HTTP/1.0 500 Internal Server Error');
require_once 'include/config.php';
require_once PRESENTATION_DIR . 'link.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>
Страница временно недостуна (505)
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
Sorry! У нас технические проблемы... 
</h1>
<p>
Пожалуйста, посетите 
<a href="<?php echo Link::Build(''); ?>"><b>Green-Farm.tk</b></a>
, если вы ищете свежие фрукты и овощи <br> или
<a href="<?php echo ADMIN_ERROR_MAIL; ?>"><b>напишите нам</b></a>
, если вам нужно что-то еще
</p>
<p>Спасибо!</p>
<p>____________________</p>
<p>Команда магазина.</p>
</div>
</div>
</div>
</div>
</body>
</html>