<?php /* Smarty version 2.6.25-dev, created on 2015-09-26 21:51:50
         compiled from admin_orders.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_orders.tpl', 2, false),array('function', 'html_options', 'admin_orders.tpl', 21, false),array('modifier', 'date_format', 'admin_orders.tpl', 40, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_orders','assign' => 'obj'), $this);?>

<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
<form method="get" action="<?php echo $this->_tpl_vars['obj']->mLinkToAdmin; ?>
">
<input name="Page" type="hidden" value="Orders" />
<p>
<font class="bold-text">Show the most recent</font>
<input name="recordCount" type="text" value="<?php echo $this->_tpl_vars['obj']->mRecordCount; ?>
" />
<font class="bold-text">orders</font>
<input type="submit" name="submitMostRecent" value="Go!" />
</p>
<p>
<font class="bold-text">Show all records created between</font>
<input name="startDate" type="text" value="<?php echo $this->_tpl_vars['obj']->mStartDate; ?>
" />
<font class="bold-text">and</font>
<input name="endDate" type="text" value="<?php echo $this->_tpl_vars['obj']->mEndDate; ?>
" />
<input type="submit" name="submitBetweenDates" value="Go!" />
</p>
<p>
<font class="bold-text">Show orders by status</font>
<?php echo smarty_function_html_options(array('name' => 'status','options' => $this->_tpl_vars['obj']->mOrderStatusOptions,'selected' => $this->_tpl_vars['obj']->mSelectedStatus), $this);?>

<input type="submit" name="submitOrdersByStatus" value="Go!" />
</p>
</form>
<?php if ($this->_tpl_vars['obj']->mOrders): ?>
<table class="tss-table">
<tr>
<th>Order ID</th>
<th>Date Created</th>
<th>Date Shipped</th>
<th>Status</th>
<th>Customer</th>
<th>&nbsp;</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mOrders) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php $this->assign('status', $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['status']); ?>
<tr>
<td><?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['order_id']; ?>
</td>
<td><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['created_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
</td>
<td><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['shipped_on'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mOrderStatusOptions[$this->_tpl_vars['status']]; ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['customer_name']; ?>
</td>
<td align="right">
<a href="<?php echo $this->_tpl_vars['obj']->mOrders[$this->_sections['i']['index']]['link_to_order_details_admin']; ?>
">View Details</
a>
</td>
</tr>
<?php endfor; endif; ?>
</table>
<?php endif; ?>