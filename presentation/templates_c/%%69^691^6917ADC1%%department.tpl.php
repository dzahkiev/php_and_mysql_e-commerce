<?php /* Smarty version 2.6.25-dev, created on 2015-10-02 05:48:54
         compiled from department.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'department.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'department','assign' => 'obj'), $this);?>

<p class="title"><?php echo $this->_tpl_vars['obj']->mName; ?>
</p>
<p class="description"><?php echo $this->_tpl_vars['obj']->mDescription; ?>
</p>
<?php if ($this->_tpl_vars['obj']->mShowEditButton): ?>
<form action="<?php echo $this->_tpl_vars['obj']->mEditActionTarget; ?>
" method="post" class="edit-form">
<input type="submit" name="submit_<?php echo $this->_tpl_vars['obj']->mEditAction; ?>
"
value="<?php echo $this->_tpl_vars['obj']->mEditButtonCaption; ?>
" />
</form>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>