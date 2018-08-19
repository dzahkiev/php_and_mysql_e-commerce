<?php /* Smarty version 2.6.25-dev, created on 2015-10-02 00:36:05
         compiled from admin_product_details.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'admin_product_details.tpl', 2, false),array('function', 'html_options', 'admin_product_details.tpl', 98, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'admin_product_details','assign' => 'obj'), $this);?>

<form enctype="multipart/form-data" method="post" action="<?php echo $this->_tpl_vars['obj']->mLinkToProductDetailsAdmin; ?>
">
<h3>
Товар: ID #<?php echo $this->_tpl_vars['obj']->mProduct['product_id']; ?>
 &mdash;
<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 [
<a href="<?php echo $this->_tpl_vars['obj']->mLinkToCategoryProductsAdmin; ?>
">
назад к списку товаров ...</a> ]
</h3>
<?php if ($this->_tpl_vars['obj']->mErrorMessage): ?><p class="error"><?php echo $this->_tpl_vars['obj']->mErrorMessage; ?>
</p><?php endif; ?>
<table class="borderless-table">
<tbody>
<tr>
<td valign="top" >
<p>
<font class="bold-text">Image:</font> <?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>

<br>
<input name="ImageUpload" type="file" value="Upload" />
<input type="submit" name="Upload" value="Загрузить" />
</p>
<?php if ($this->_tpl_vars['obj']->mProduct['image']): ?>
<p>
<img src="images/product_images/<?php echo $this->_tpl_vars['obj']->mProduct['image']; ?>
" width="300px"
border="0" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image" />
</p>
<?php endif; ?>
<p>
<font class="bold-text">Image 2:</font> <?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>

<br>
<input name="Image2Upload" type="file" value="Upload" />
<input type="submit" name="Upload" value="Загрузить" />
</p>
<?php if ($this->_tpl_vars['obj']->mProduct['image_2']): ?>
<p>
<img src="images/product_images/<?php echo $this->_tpl_vars['obj']->mProduct['image_2']; ?>
" width="300px"
border="0" alt="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
 image 2" />
</p>
<?php endif; ?>
</td>
<td valign="top">
<p class="bold-text">
Название товара:
</p>
<p>
<input type="text" name="name"
value="<?php echo $this->_tpl_vars['obj']->mProduct['name']; ?>
" size="30" />
</p>
<p class="bold-text">
Описание:
</p>
<p>
<?php echo '<textarea name="description" rows="3" cols="60">'; ?><?php echo $this->_tpl_vars['obj']->mProduct['description']; ?><?php echo '</textarea>'; ?>

</p>
<p class="bold-text">
Цена:
</p>
<p>
<input type="text" name="price"
value="<?php echo $this->_tpl_vars['obj']->mProduct['price']; ?>
" size="5" />
</p>
<p class="bold-text">
Цена со скидкой:
</p>
<p>
<input type="text" name="discounted_price"
value="<?php echo $this->_tpl_vars['obj']->mProduct['discounted_price']; ?>
" size="5" />
</p>
<p>
<input type="submit" name="UpdateProductInfo"
value="Обновить" />
</p>
<p>
<font class="bold-text">Товар входит в след. категории:</font>
<?php echo $this->_tpl_vars['obj']->mProductCategoriesString; ?>

</p>
<p class="bold-text">
Удалить товар из:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdRemove','options' => $this->_tpl_vars['obj']->mRemoveFromCategories), $this);?>

<input type="submit" name="RemoveFromCategory" value="Удалить"
<?php if ($this->_tpl_vars['obj']->mRemoveFromCategoryButtonDisabled): ?>
disabled="disabled" <?php endif; ?>/>
</p>
<p class="bold-text">
Прикрепить товар к категории:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdAssign','options' => $this->_tpl_vars['obj']->mAssignOrMoveTo), $this);?>

<input type="submit" name="Assign" value="Прикрепить" />
</p>
<p class="bold-text">
Переместить/Удалить в/из катег.:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'TargetCategoryIdMove','options' => $this->_tpl_vars['obj']->mAssignOrMoveTo), $this);?>

<input type="submit" name="Move" value="Переместить" />
<input type="submit" name="RemoveFromCatalog"
value="Удалить из категории"
<?php if (! $this->_tpl_vars['obj']->mRemoveFromCategoryButtonDisabled): ?>
disabled="disabled" <?php endif; ?>/>
</p>
<?php if ($this->_tpl_vars['obj']->mProductAttributes): ?>
<p class="bold-text">
Свойства товара:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'TargetAttributeValueIdRemove','options' => $this->_tpl_vars['obj']->mProductAttributes), $this);?>

<input type="submit" name="RemoveAttributeValue"
value="Удалить" />
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['obj']->mCatalogAttributes): ?>
<p class="bold-text">
Добавить след. свойство:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'TargetAttributeValueIdAssign','options' => $this->_tpl_vars['obj']->mCatalogAttributes), $this);?>

<input type="submit" name="AssignAttributeValue"
value="Добавить" />
</p>
<?php endif; ?>
<p class="bold-text">
Показывать только на:
</p>
<p>
<?php echo smarty_function_html_options(array('name' => 'ProductDisplay','options' => $this->_tpl_vars['obj']->mProductDisplayOptions,'selected' => $this->_tpl_vars['obj']->mProduct['display']), $this);?>

<input type="submit" name="SetProductDisplayOption" value="Обновить" />
</p>
</td>
</tr>
</tbody>
</table>

</form>