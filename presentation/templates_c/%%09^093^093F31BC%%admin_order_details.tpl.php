<?php /* Smarty version 2.6.25-dev, created on 2015-09-27 01:07:50
         compiled from admin_order_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_order_details.tpl', 2, false),array('function', 'html_options', 'admin_order_details.tpl', 36, false),array('modifier', 'date_format', 'admin_order_details.tpl', 22, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_order_details','assign' => 'obj'), $this);?>

<form method="get" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
<h3>
Editing details for order ID:
<?php echo $this->_tpl_vars['obj']->mOrderInfo['order_id']; ?>
 [
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToOrdersAdmin; ?>
">back to admin orders...</a> ]
</h3>
<input type="hidden" name="Page" value="OrderDetails" />
<input type="hidden" name="OrderId"
value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['order_id']; ?>
" />
<table class="borderless-table">
<tr>
<td class="bold-text">Total Amount: </td>
<td class="price">
$<?php echo $this->_tpl_vars['obj']->mOrderInfo['total_amount']; ?>

</td>
</tr>
<tr>
<td class="bold-text">Date Created: </td>
<td>
<?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrderInfo['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>

</td>
</tr>
<tr>
<td class="bold-text">Date Shipped: </td>
<td>
<?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrderInfo['shipped_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>

</td>
</tr>
<tr>
<td class="bold-text">Status: </td>
<td>
<select name="status"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> >
<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['obj']->mOrderStatusOptions,'selected' => $this->_tpl_vars['obj']->mOrderInfo['status']), $this);?>

</select>
</td>
</tr>
<tr>
<td class="bold-text">Comments: </td>
<td>
<input name="comments" type="text" size="50"
value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['comments']; ?>
"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
<td>
</tr>
<tr>
<td class="bold-text">Customer Name: </td>
<td>
<input name="customerName" type="text" size="50"
value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['customer_name']; ?>
"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
<td>
</tr>
<tr>
<td class="bold-text">Shipping Address: </td>
<td>
<input name="shippingAddress" type="text" size="50"
value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['shipping_address']; ?>
"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
</td>
</tr>
<tr>
<td class="bold-text">Customer Email: </td>
<td>
<input name="customerEmail" type="text" size="50"
value="<?php echo $this->_tpl_vars['obj']->mOrderInfo['customer_email']; ?>
"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
</td>
</tr>
</table>
<p>
<input type="submit" name="submitEdit" value="Edit"
<?php if ($this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
<input type="submit" name="submitUpdate" value="Update"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
<input type="submit" name="submitCancel" value="Cancel"
<?php if (! $this->_tpl_vars['obj']->mEditEnabled): ?> disabled="disabled" <?php endif; ?> />
</p>
<h3>Order contains these products:</h3>
<table class="tss-table">
<tr>
<th>Product ID</th>
<th>Product Name</th>
<th>Quantity</th>
<th>Unit Cost</th>
<th>Subtotal</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mOrderDetails) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<td><?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['product_id']; ?>
</td>
<td>
<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['product_name']; ?>

(<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['attributes']; ?>
)
</td>
<td><?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['quantity']; ?>
</td>
<td>$<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['unit_cost']; ?>
</td>
<td>$<?php echo $this->_tpl_vars['obj']->mOrderDetails[$this->_sections['i']['index']]['subtotal']; ?>
</td>
</tr>
<?php endfor; endif; ?>
</table>
</form>