<?php /* Smarty version 2.6.25-dev, created on 2015-10-03 23:02:03
         compiled from admin_login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_login.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_login','assign' => 'obj'), $this);?>

 <form  class="form-container" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
<p>
Введите информацию для авторизации  или переходите
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToIndex; ?>
">на главную</a> страницу.
</p>
<br>
<?php if ($this->_tpl_vars['obj']->mLoginMessage != ""): ?>
<p class="error"><?php echo $this->_tpl_vars['obj']->mLoginMessage; ?>
</p>
<?php endif; ?>
<p>
<label class="form-title" for="username">Логин:</label>
<input class="form-field" type="text" name="username" size="35" value="<?php echo $this->_tpl_vars['obj']->mUsername; ?>
" />
</p>
<p>
<label class="form-title" for="password">Пароль:</label>
<input class="form-field" type="password" name="password" size="35" value="" />
</p>
<p>
<input class="submit-button" type="submit" name="submit" value="Войти" />
</p>
</form>
</div>