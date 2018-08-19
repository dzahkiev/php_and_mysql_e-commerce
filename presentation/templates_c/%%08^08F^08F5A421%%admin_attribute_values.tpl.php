<?php /* Smarty version 2.6.25-dev, created on 2015-09-18 22:19:10
         compiled from admin_attribute_values.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_attribute_values.tpl', 2, false),)), $this); ?>
 <?php echo smarty_function_load_presentation_object(array('filename' => 'admin_attribute_values','assign' => 'obj'), $this);?>

<form method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToAttributeValuesAdmin; ?>
">
<h3>
Editing values for attribute: <?php echo $this->_tpl_vars['obj']->mAttributeName; ?>
 [
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToAttributesAdmin; ?>
">back to attributes ...</a> ]
</h3>

<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mAttributeValuesCount == 0): ?>
<p class="no-items-found">There are no values for this attribute!</p>
<?php else: ?>
<table class="tss-table">
<tr>
<th>Attribute Value</th>
<th width="170"> &nbsp; </th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mAttributeValues) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($this->_tpl_vars['obj']->mEditItem == $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']): ?>
<tr>
<td>
<input type="text" name="value"
value="<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['value']; ?>
" size="30" />
</td>
<td>
<input type="submit" name="submit_update_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Update" />
<input type="submit" name="cancel" value="Cancel" />
<input type="submit" name="submit_delete_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Delete" />
</td>
</tr>
<?php else: ?>
<tr>
<td><?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['value']; ?>
</td>
<td>
<input type="submit"
name="submit_edit_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Edit" />
<input type="submit"
name="submit_delete_val_<?php echo $this->_tpl_vars['obj']->mAttributeValues[$this->_sections['i']['index']]['attribute_value_id']; ?>
" value="Delete" />
</td>
</tr>
<?php endif; ?>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<h3>Add new attribute value:</h3>
<input type="text" name="attribute_value" value="[value]" size="30" />
<input type="submit" name="submit_add_val_0" value="Add" />
</form>