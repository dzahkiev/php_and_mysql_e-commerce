<?php
// Класс, отвечающий за аутентификацию администраторов
class AdminLogin
{
// Public-переменные, доступные в шаблонах Smarty
public $mUsername;
public $mLoginMessage = '';
public $mLinkToAdmin;
public $mLinkToIndex='index.php';
// Конструктор класса
public function __construct()
{
// Проверяем правильность ввода идентификатора пользователя и пароля
if (isset ($_POST['submit']))
{
if ($_POST['username'] == ADMIN_USERNAME
&& $_POST['password'] == ADMIN_PASSWORD)
{
$_SESSION['admin_logged'] = true;
header('Location: ' . Link::ToAdmin());
exit();
}
else
{
$this->mLoginMessage = 'Login failed. Please try again:';
}
$this->mLinkToAdmin = Link::ToAdmin();
 }
}
}
?>