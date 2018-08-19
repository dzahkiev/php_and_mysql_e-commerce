<?php
// Активизируем сеанс
session_start();
// Создаем выходной буфер
ob_start(); 
// Include utility files
require_once 'include/config.php';
require_once BUSINESS_DIR . 'error_handler.php';
 // Set the error handler
ErrorHandler::SetHandler();

// Load the application page template
require_once PRESENTATION_DIR . 'application.php';
require_once PRESENTATION_DIR . 'link.php';

// Load the database handler
require_once BUSINESS_DIR . 'database_handler.php'; 

// Load Business Tier
require_once BUSINESS_DIR . 'catalog.php';
require_once BUSINESS_DIR . 'shopping_cart.php';
//require_once('inexistent_file.php');
// Коррекция URL
 Link::CheckRequest();  // РАЗОБРАТЬСЯ ПОТОМ СРОЧНО!!!!!!!!!!!!!!!!!
// Обработка AJAX-запросов

// Load Smarty template file
$application = new Application();
if (isset ($_GET['AjaxRequest']))
{
	// Заголовки отправляются, чтобы предотвратить кэширование в браузерах
	header('Expires: Fri, 25 Dec 1980 00:00:00 GMT'); // Устаревшее время
	header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
	header('Cache-Control: no-cache, must-revalidate');
	header('Pragma: no-cache');
	header('Content-Type: text/html');
	if (isset ($_GET['CartAction']))
	{
		$cart_action = $_GET['CartAction'];
		if ($cart_action == ADD_PRODUCT)
{
require_once PRESENTATION_DIR . 'cart_details.php';
$cart_details = new CartDetails();
$cart_details->init();
$application->display('cart_summary.tpl');
}
else
{
	$application->display('cart_details.tpl');
}
	}
	else
	trigger_error('CartAction not set', E_USER_ERROR);
}
else
{
	// Отображаем сообщение
	$application->display('store_front.tpl');
}


// Close database connection
DatabaseHandler::Close();
// Выводим содержимое буфера
flush();
ob_flush();
ob_end_clean();
?>
