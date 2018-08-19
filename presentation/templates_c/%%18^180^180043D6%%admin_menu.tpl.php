<?php /* Smarty version 2.6.25-dev, created on 2015-09-30 08:22:27
         compiled from admin_menu.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_menu.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_menu','assign' => 'obj'), $this);?>

<div style="width:1100px; margin:0 auto;">
<h1>Админка</h1>
<p class="menu_admin"> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreAdmin; ?>
">Администрирование: Каталог</a> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToAttributesAdmin; ?>
">Атрибуты товара</a> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToCartsAdmin; ?>
">Корзины покупателей</a> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToOrdersAdmin; ?>
">Заказы</a> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToStoreFront; ?>
">На главную</a> |
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToLogout; ?>
">Выйти</a> |
</p>