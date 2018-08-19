<?php
// в SITE_ROOT содержится полный путь к папке tshirtshop
define('SITE_ROOT', dirname(dirname(__FILE__)));
// Папки приложения
define('PRESENTATION_DIR', SITE_ROOT . '/presentation/');
define('BUSINESS_DIR', SITE_ROOT . '/business/');
// Настройки, необходимые для конфигурирования Smarty
define('SMARTY_DIR', SITE_ROOT . '/libs/smarty/');
define('TEMPLATE_DIR', PRESENTATION_DIR . 'templates');
define('COMPILE_DIR', PRESENTATION_DIR . 'templates_c');
define('CONFIG_DIR', SITE_ROOT . '/include/configs');

define('IS_WARNING_FATAL', true);
define('DEBUGGING', false);
// Типы ошибок, о которых должны составляться сообщения
define('ERROR_TYPES', E_ALL);
// Настройки отправки сообщений администраторам по электронной почте
define('SEND_ERROR_MAIL', false);
define('ADMIN_ERROR_MAIL', 'umar_dzahkiev@mail.ru');
define('SENDMAIL_FROM', 'Errors@example.com');
ini_set('sendmail_from', SENDMAIL_FROM);
// По умолчанию мы не записываем сообщения в журнал
define('LOG_ERRORS', true);
define('LOG_ERRORS_FILE', 'C:\\Apache2\\htdocs\\errors_log.txt'); // Windows
define('SITE_GENERIC_ERROR_MESSAGE', '<h1>Podium.ru Error!</h1>');
// Параметры соединения с базой данных
define('DB_PERSISTENCY', 'true');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '12345');
define('DB_DATABASE', 'podium_shop');
define('PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE);
// Порт HTTP-сервера (можно пропустить, если используется порт 80)
define('HTTP_SERVER_PORT', '80');
/* Имя виртуальной директории, в которой располагается сайт, например:
'/tshirtshop/' если сайт работает из папки
http://www.example.com/tshirtshop/
'/' если сайт работает из папки http://www.example.com/ */
define('VIRTUAL_LOCATION', '/');
// Задаем параметры, используемые при генерации списков товаров
define('SHORT_PRODUCT_DESCRIPTION_LENGTH', 140);
define('PRODUCTS_PER_PAGE', 6);
/* Минимальная длина слов, используемых в поиске; эта константа должна
быть равна значению переменной MySQL ft_min_word_len */
define('FT_MIN_WORD_LEN', 4);

// Конфигурация PayPal
define('PAYPAL_URL', 'https://www.paypal.com/xclick/business=umar_dzahkiev@mail.ru');
define('PAYPAL_EMAIL', 'umar_dzahkiev@mail.ru');
define('PAYPAL_CURRENCY_CODE', 'USD');
define('PAYPAL_RETURN_URL', 'http://localhost');
define('PAYPAL_CANCEL_RETURN_URL', 'http://localhost');
// Если эта константа не установлена в no, доступ к
// страницам администрирования возможен только с помощью SSL
define('USE_SSL', 'no');
// Идентификатор и пароль администратора
define('ADMIN_USERNAME', 'tadmin');
define('ADMIN_PASSWORD', 'tadmin');
// Типы товаров в корзине покупателя
define('GET_CART_PRODUCTS', 1);
define('GET_CART_SAVED_PRODUCTS', 2);
// Операции с корзиной покупателя
define('ADD_PRODUCT', 1);
define('REMOVE_PRODUCT', 2);
define('UPDATE_PRODUCTS_QUANTITIES', 3);
define('SAVE_PRODUCT_FOR_LATER', 4);
define('MOVE_PRODUCT_TO_CART', 5);
// Произвольное значение, добавляемое в строку перед хешированием
define('HASH_PREFIX', 'K1-');

?>