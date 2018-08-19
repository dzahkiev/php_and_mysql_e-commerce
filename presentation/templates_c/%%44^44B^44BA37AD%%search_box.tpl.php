<?php /* Smarty version 2.6.25-dev, created on 2015-10-03 00:46:34
         compiled from search_box.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'search_box.tpl', 2, false),)), $this); ?>
﻿<?php echo smarty_function_load_presentation_object(array('filename' => 'search_box','assign' => 'obj'), $this);?>

<div class="box">
<p class="box-title">ПОИСК ТОВАРОВ</p>
<form class="search_form" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToSearch; ?>
">
<p>
<input  class="search_input" maxlength="100" id="search_string" name="search_string"
value="<?php echo $this->_tpl_vars['obj']->mSearchString; ?>
" size="19" />
<input class="button" type="submit" value="Найти" /><br />
</p>
<p>
<input class="search_chek"  type="checkbox" id="all_words" name="all_words"
<?php if ($this->_tpl_vars['obj']->mAllWords == 'on'): ?> checked="checked" <?php endif; ?>/>
<label class="all_words" for="all_words">искать по всем словам</label>
</p>
</form>
</div>