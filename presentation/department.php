<?php
// Занимается извлечением сведений об отделе
class Department
{
// Public-переменные для шаблонов Smarty
public $mName;
public $mDescription;
	public $mEditActionTarget;
	public $mEditAction;
	public $mEditButtonCaption;
	public $mShowEditButton;
// Private-элементы
private $_mDepartmentId;
private $_mCategoryId;

// Конструктор класса
public function __construct()
{
if (!isset($_GET['ProductId']))
{
// В строке запроса должен присутствовать параметр DepartmentId
if (isset ($_GET['DepartmentId']))
$this->_mDepartmentId = (int)$_GET['DepartmentId'];
else
trigger_error('DepartmentId not set1');
/* Если CategoryId есть в строке запроса, мы сохраняем его значение
(преобразуя его в integer для защиты от некорректных значений) */
if (isset ($_GET['CategoryId']))
$this->_mCategoryId = (int)$_GET['CategoryId'];
	// Отображаем кнопку редактирования, если посетитель - администратор
	if (!(isset ($_SESSION['admin_logged'])) ||
	$_SESSION['admin_logged'] != true)
	$this->mShowEditButton = false;
	else
	$this->mShowEditButton = true;
}
else
{
$continue_shopping =
Link::QueryStringToArray($_SESSION['link_to_continue_shopping']);
if (array_key_exists('DepartmentId', $continue_shopping))
$this->mSelectedDepartment =
(int)$continue_shopping['DepartmentId'];
else
trigger_error('DepartmentId not set2');
if (array_key_exists('CategoryId', $continue_shopping))
$this->mSelectedCategory =
(int)$continue_shopping['CategoryId'];
}
}
public function init()
{
// Если посещаем отдел...
$department_details =
Catalog::GetDepartmentDetails($this->_mDepartmentId);
$this->mName = $department_details['name'];
$this->mDescription = $department_details['description'];
// Если посещаем категорию...
if (isset ($this->_mCategoryId))
{
$category_details =
Catalog::GetCategoryDetails($this->_mCategoryId);
$this->mName = $this->mName . ' &raquo; ' .
$category_details['name'];
$this->mDescription = $category_details['description'];
	$this->mEditActionTarget =
	Link::ToDepartmentCategoriesAdmin($this->_mDepartmentId);
	$this->mEditAction = 'edit_cat_' . $this->_mCategoryId;
	$this->mEditButtonCaption = 'Edit Category Details';
}
	else
	{
		$this->mEditActionTarget = Link::ToDepartmentsAdmin();
		$this->mEditAction = 'edit_dept_' . $this->_mDepartmentId;
		$this->mEditButtonCaption = 'Edit Department Details';
	}
}
}

?>