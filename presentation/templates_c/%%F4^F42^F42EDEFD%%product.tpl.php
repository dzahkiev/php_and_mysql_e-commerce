<?php /* Smarty version 2.6.25-dev, created on 2015-10-03 21:31:41
         compiled from product.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'product.tpl', 1, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'product','assign' => 'obj'), $this);?>

<h1 class="title"><?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
</h1>

<div class="product_block">
<div class="product_image_block"   >
<?php if ($this->_tpl_vars['obj']->mProduct['image']): ?>

<img  width="350px"   src="<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image" />
<?php endif; ?>
</div>
<div class="product_price_block">
	<p class="section">
		
		
		<?php if ($this->_tpl_vars['obj']->mProduct['discounted_price'] != 0): ?>
		Цена со скидкой:
		<span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['discounted_price']; ?>
 руб.</span><br>
		<?php else: ?>
		Цена:
		<span class="price"><?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
 руб.</span> 
		<?php endif; ?>
	</p>
	<br>
		<form class="add-product-form" target="_self" method="post" action="<?php echo $this->_tpl_vars['obj']->mProduct['link_to_add_product']; ?>
"
	onsubmit="return addProductToCart(this);">
				<p class="attributes">
						<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProduct['attributes']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
						<?php if ($this->_sections['k']['first'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_prev']]['attribute_name']): ?>
			<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
:
			<select name="attr_<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name']; ?>
">
				<?php endif; ?>
								<option value="<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>
">
					<?php echo $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_value']; ?>

				</option>
								<?php if ($this->_sections['k']['last'] || $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index']]['attribute_name'] !== $this->_tpl_vars['obj']->mProduct['attributes'][$this->_sections['k']['index_next']]['attribute_name']): ?>
			</select>
			<?php endif; ?>
			<?php endfor; endif; ?>
		</p>
				<p align="center">
			<input   class="button button_style" type="submit" name="add_to_cart" value="Добавить в корзину" />
		</p>
	</form>
	<?php if ($this->_tpl_vars['obj']->mLinkToContinueShopping): ?>
	<p><a class="continue_link" href="<?php echo $this->_tpl_vars['obj']->mLinkToContinueShopping; ?>
">продолжить покупку</a></p>
	<?php endif; ?>
</div>
</div>
 
			<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Описание</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2"   >Отзывы</label> 
				<input id="tab-3" type="hidden" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2" style="float:none;" >Отзывы</label>
		        <div class="content-block">
			        <div class="content-1">
                         <p> <?php echo $this->_tpl_vars['obj']->mProduct['description']; ?>
 </p>
  				    <br>
					<p><b>Похожие товары вы можете найти в каталоге:</b></p>
					 
					<p>	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mLocations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						 
							<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_department']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['department_name']; ?><?php echo '</a>'; ?>

							&raquo;
							<?php echo '<a href="'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['link_to_category']; ?><?php echo '">'; ?><?php echo $this->_tpl_vars['obj']->mLocations[$this->_sections['i']['index']]['category_name']; ?><?php echo '</a>'; ?>

						 
						<?php endfor; endif; ?>
					 </p>
					</div>
			        <div class="content-2">
					</div>
			        
		        </div>
			</section>
<?php if ($this->_tpl_vars['obj']->mShowEditButton): ?>
<form action="<?php echo $this->_tpl_vars['obj']->mEditActionTarget; ?>
" target="_self"
method="post" class="edit-form">
<p>
<input type="submit" name="submit_edit" value="Edit Product Details" />
</p>
</form>
<?php endif; ?>
 
 
<br>

 <?php if ($this->_tpl_vars['obj']->mRecommendations): ?>
<h3>Пользователи купившие этот товар, также купили:</h3>
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
 <div class="clearfix"></div>