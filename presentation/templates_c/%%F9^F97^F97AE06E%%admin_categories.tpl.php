<?php /* Smarty version 2.6.25-dev, created on 2015-10-03 00:18:59
         compiled from admin_categories.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_categories.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_categories','assign' => 'obj'), $this);?>

<form method="post"
action="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentCategoriesAdmin; ?>
">
<h3>
Editing categories for department: <?php echo $this->_tpl_vars['obj']->mDepartmentName; ?>
 [
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToDepartmentsAdmin; ?>
">back to departments ...</a>
]
</h3>
<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mCategoriesCount == 0): ?>
<p class="no-items-found">There are no categories in this
department!</p>
<?php else: ?>
<table class="tss-table">
<tr>
<th width="200">Category Name</th>
<th>Category Description</th>
<th width="240">&nbsp;</th>
</tr>
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['obj']->mCategories) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
<?php if ($this->_tpl_vars['obj']->mEditItem == $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']): ?>
<tr>
<td>
<input type="text" name="name"
value="<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['name']; ?>
" size="30" />
</td>
<td>
<?php echo '<textarea name="description" rows="6" cols="80">'; ?><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['description']; ?><?php echo '</textarea>'; ?>

</td>
<td>
<input type="submit"
name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Edit Products" />
<input type="submit"
name="submit_update_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Update" />
<input type="submit" name="cancel" value="Cancel" />
<input type="submit"
name="submit_delete_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Delete" />
</td>
</tr>
<?php else: ?>
<tr>
<td><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['description']; ?>
</td>
<td>
<input type="submit"
name="submit_edit_prod_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Edit Products" />
<input type="submit"
name="submit_edit_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Edit" />
<input type="submit"
name="submit_delete_cat_<?php echo $this->_tpl_vars['obj']->mCategories[$this->_sections['i']['index']]['category_id']; ?>
"
value="Delete" />
</td>
</tr>
<?php endif; ?>
<?php endfor; endif; ?>
</table>
<?php endif; ?>
<h3>Add new category:</h3>
<input type="text" name="category_name" value="[name]" size="30" />
<input type="text" name="category_description" value="[description]"
size="60" >
<input type="submit" name="submit_add_cat_0" value="Add" />
</form>