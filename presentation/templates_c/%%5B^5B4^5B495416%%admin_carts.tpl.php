<?php /* Smarty version 2.6.25-dev, created on 2015-09-25 01:38:10
         compiled from admin_carts.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_carts.tpl', 2, false),array('function', 'html_options', 'admin_carts.tpl', 8, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_carts','assign' => 'obj'), $this);?>

<form action="<?php echo $this->_tpl_vars['obj']->mLinkToCartsAdmin; ?>
" method="post">
<h3>Admin users&#039; shopping carts:</h3>
<?php if ($this->_tpl_vars['obj']->mMessage): ?><p><?php echo $this->_tpl_vars['obj']->mMessage; ?>
</p><?php endif; ?>
<p>
Select carts:
<?php echo smarty_function_html_options(array('name' => 'days','options' => $this->_tpl_vars['obj']->mDaysOptions,'selected' => $this->_tpl_vars['obj']->mSelectedDaysNumber), $this);?>

<input type="submit" name="submit_count"
value="Count Old Shopping Carts" />
<input type="submit" name="submit_delete"
value="Delete Old Shopping Carts" />
</p>
</form>