<?php
class StoreFront
{
  public $mSiteUrl;
  // Определяем файл шаблона для содержимого страницы
public $mContentsCell = 'first_page_contents.tpl';
// Определяем файл шаблона для ячеек категорий
public $mCategoriesCell = 'blank.tpl';
	// Определяем файл шаблона для ячейки содержимого корзины
	public $mCartSummaryCell = 'blank.tpl';
// Заголовок страницы
public $mPageTitle;
	// Ссылка PayPal для возврата в магазин
	public $mPayPalContinueShoppingLink;

  // Class constructor
  public function __construct()
  {
    $this->mSiteUrl = Link::Build('');
  }
  
  
  // Инициализируем объект представления
public function init()
{
	$_SESSION['link_to_store_front'] =		Link::Build( substr($_SERVER['REQUEST_URI'],1));
	
	// Создаем ссылку для возврата в каталог
	if (!isset ($_GET['CartAction']))
	$_SESSION['link_to_last_page_loaded'] =	$_SESSION['link_to_store_front'];
	
// Загружаем подробные сведения об отделе на страницу отдела
if (isset ($_GET['DepartmentId']))
{
$this->mContentsCell = 'department.tpl';
$this->mCategoriesCell = 'categories_list.tpl';
}
elseif (isset($_GET['ProductId']) &&
isset($_SESSION['link_to_continue_shopping']) &&
strpos($_SESSION['link_to_continue_shopping'], 'DepartmentId', 0)
!== false)
{
$this->mCategoriesCell = 'categories_list.tpl';
}
// Загружаем сведения о товаре на страницу товара
if (isset ($_GET['ProductId']))
$this->mContentsCell = 'product.tpl';
// Загружаем страницу с результатами поиска, если выполнялся поиск
elseif (isset ($_GET['SearchResults']))
$this->mContentsCell = 'search_results.tpl';
	// Загружаем шаблоны для отображения содержимого корзины
	if (isset ($_GET['CartAction']))
	$this->mContentsCell = 'cart_details.tpl';
	else
	$this->mCartSummaryCell = 'cart_summary.tpl';
// Загружаем заголовок страницы
$this->mPageTitle = $this->_GetPageTitle();
}

// Возвращает заголовок страницы
private function _GetPageTitle()
{
$page_title = 'Зелёная Ферма: Главная страница интернет магазина ';
if (isset ($_GET['DepartmentId']) && isset ($_GET['CategoryId']))
{
$page_title = 'Зелёная Ферма: '.
Catalog::GetDepartmentName($_GET['DepartmentId']) . ' - ' .
Catalog::GetCategoryName($_GET['CategoryId']);
if (isset ($_GET['Page']) && ((int)$_GET['Page']) > 1)
$page_title .= ' - Page ' . ((int)$_GET['Page']);
}
elseif (isset ($_GET['DepartmentId']))
{
$page_title = 'Зелёная Ферма: ' .
Catalog::GetDepartmentName($_GET['DepartmentId']);
if (isset ($_GET['Page']) && ((int)$_GET['Page']) > 1)
$page_title .= ' - Page ' . ((int)$_GET['Page']);
}
elseif (isset ($_GET['ProductId']))
{
$page_title = 'Зелёная Ферма: ' .
Catalog::GetProductName($_GET['ProductId']);
}
elseif (isset ($_GET['SearchResults']))
{
$page_title = 'Зелёная Ферма: "';
// Отображаем строку поиска
$page_title .= trim(str_replace
('-', ' ', $_GET['SearchString'])) . '" ( поиск ';
// Отображаем "all-words search" или "any-words search"
$all_words = isset ($_GET['AllWords']) ? $_GET['AllWords'] : 'off';
$page_title .= (($all_words == 'on') ? 'по всем словам' : 'по словам');
// Отображаем номер страницы
if (isset ($_GET['Page']) && ((int)$_GET['Page']) > 1)
$page_title .= ', page ' . ((int)$_GET['Page']);
$page_title .= ')';
}
else
{
if (isset ($_GET['Page']) && ((int)$_GET['Page']) > 1)
$page_title .= ' - Page ' . ((int)$_GET['Page']);
}
return $page_title;
}
}




?>
