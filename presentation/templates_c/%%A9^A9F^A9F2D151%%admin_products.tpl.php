<?php /* Smarty version 2.6.25-dev, created on 2015-09-20 23:26:16
         compiled from admin_products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_products.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_products','assign' => 'obj'), $this);?>

<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToCategoryProductsAdmin; ?>
">
<h3>
Editing products for category: <?php echo $this->_tpl_vars['obj']->mCategoryName; ?>
 [
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentCategoriesAdmin; ?>
">
back to categories ...</a> ]
</h3>
<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mProductsCount == 0): ?>
<p class="no-items-found">There are no products in this category!</p>
<?php else: ?>
<table class="tss-table">
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Discounted Price</th>
<th width="80">&nbsp;</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mProducts) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['description']; ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['price']; ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['discounted_price']; ?>
</td>
<td>
<input type="submit"
name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mProducts[$this->_sections['i']['index']]['product_id']; ?>
"
value="Edit" />
</td>
</tr>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<h3>Add new product:</h3>
<input type="text" name="product_name" value="[name]" size="30" />
<input type="text" name="product_description" value="[description]"
size="60" />
<input type="text" name="product_price" value="[price]" size="10" />
<input type="submit" name="submit_add_prod_0" value="Add" />
</form>