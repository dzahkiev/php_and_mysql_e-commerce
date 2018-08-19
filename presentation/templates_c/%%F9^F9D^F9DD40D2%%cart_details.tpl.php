<?php /* Smarty version 2.6.25-dev, created on 2015-10-04 00:58:25
         compiled from cart_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'cart_details.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'cart_details','assign' => 'obj'), $this);?>

 <div id="updating"></div>

<?php if ($this->_tpl_vars['obj']->mIsCartNowEmpty == 1): ?>
<p class="box-title">Ваша корзина пока пуста!</p>
<?php else: ?>
<p class="box-title">Список товаров в корзине:</p>
<form class="cart-form" method="post" action="<?php echo $this->_tpl_vars['obj']->mUpdateCartTarget; ?>
" onsubmit="return executeCartAction(this);">
<table class="tss-table">
<tr>
<th>наименование товара</th>
<th>цена</th>
<th>кол.</th>
<th>общая стоим.</th>
<th width="60px">&nbsp;</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mCartProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<tr>
<td>
<input name="itemId[]" type="hidden"
value="<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['item_id']; ?>
" />
<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['name']; ?>

(<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['attributes']; ?>
)
</td>
<td><?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['price']; ?>
 руб.</td>
<td>
<input type="text" name="quantity[]" size="5"
value="<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['quantity']; ?>
" />
</td>
<td><?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['subtotal']; ?>
 руб.</td>
<td>
<a  href="<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['save']; ?>
"	onclick="return executeCartAction(this);"><img src= "<?php echo $this->_tpl_vars['obj']->main_page_url; ?>
/images/clock.png" height="16px" align="center" valign="middle" alt="оплатить потом" title="оплатить потом"></img></a>
<a   href="<?php echo $this->_tpl_vars['obj']->mCartProducts[$this->_sections['i']['index']]['remove']; ?>
"	onclick="return executeCartAction(this);"><img src= "<?php echo $this->_tpl_vars['obj']->main_page_url; ?>
/images/delete.png" height="18px" align="center" valign="middle" alt="удалить" title="удалить"></img></a>
</td>
</tr> 
<?php endfor; endif; ?>
</table>
<table class="cart-subtotal">
<tr>
<td >
<p class="box-title"><b> 
ИТОГО К ОПЛАТЕ:&nbsp;
<font class="price"><?php echo $this->_tpl_vars['obj']->mTotalAmount; ?>
 руб.</font>
</b></p>
</td>
<td align="right">
<input class="button button_style" type="submit" name="update" value="Обновить" />
</td>
	<td align="right">
		<input class="button button_style" type="submit" name="place_order" value="Оформить заказ"
		onclick="placingOrder=true;" />
	</td>
</tr>
</table>
</form>
<?php endif; ?>
<?php if (( $this->_tpl_vars['obj']->mIsCartLaterEmpty == 0 )): ?>
<p class="box-title">Сохраненные товары:</p>
<table class="tss-table">
<tr>
<th>наименование товара</th>
<th width="30%">цена</th>
<th width="60px">&nbsp;</th>
</tr>
<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mSavedCartProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
<tr>
<td>
<?php echo $this->_tpl_vars['obj']->mSavedCartProducts[$this->_sections['j']['index']]['name']; ?>

(<?php echo $this->_tpl_vars['obj']->mSavedCartProducts[$this->_sections['j']['index']]['attributes']; ?>
)
</td>
<td>
<?php echo $this->_tpl_vars['obj']->mSavedCartProducts[$this->_sections['j']['index']]['price']; ?>
 руб.
</td>
<td >
	<a href="<?php echo $this->_tpl_vars['obj']->mSavedCartProducts[$this->_sections['j']['index']]['move']; ?>
"	onclick="return executeCartAction(this);"><img src= "<?php echo $this->_tpl_vars['obj']->main_page_url; ?>
/images/add.png" height="16px" align="center" valign="middle" alt="добавить в корзину" title="добавить в корзину"></img></a>
	<a href="<?php echo $this->_tpl_vars['obj']->mSavedCartProducts[$this->_sections['j']['index']]['remove']; ?>
"	onclick="return executeCartAction(this);"><img src= "<?php echo $this->_tpl_vars['obj']->main_page_url; ?>
/images/delete.png" height="18px" align="center" valign="middle" alt="удалить" title="удалить"></img></a>
</td>
</tr>
<?php endfor; endif; ?>
</table>
 
<?php endif; ?>
<br>
<?php if ($this->_tpl_vars['obj']->mLinkToContinueShopping): ?>
<p><a href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
">Продолжить покупку</a></p>
<?php endif; ?>
 <br>
 
 <?php if ($this->_tpl_vars['obj']->mRecommendations): ?>
<h3>Пользователи купившие эти товары, также купили:</h3>
<ol>
<?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mRecommendations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
<li>
<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['link_to_product']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['product_name']; ?><?php echo '</a>'; ?>

<span class="list"> - <?php echo $this->_tpl_vars['obj']->mRecommendations[$this->_sections['m']['index']]['description']; ?>
</span>
</li> 
<?php endfor; endif; ?>
</ol>
<?php endif; ?>