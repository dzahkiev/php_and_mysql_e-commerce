{* admin_product_details.tpl *}
{load_presentation_object filename="admin_product_details" assign="obj"}
<form enctype="multipart/form-data" method="post" action="{$obj->mLinkToProductDetailsAdmin}">
<h3>
Товар: ID #{$obj->mProduct.product_id} &mdash;
{$obj->mProduct.name} [
<a href="{$obj->mLinkToCategoryProductsAdmin}">
назад к списку товаров ...</a> ]
</h3>
{if $obj->mErrorMessage}<p class="error">{$obj->mErrorMessage}</p>{/if}
<table class="borderless-table">
<tbody>
<tr>
<td valign="top" >
<p>
<font class="bold-text">Image:</font> {$obj->mProduct.image}
<br>
<input name="ImageUpload" type="file" value="Upload" />
<input type="submit" name="Upload" value="Загрузить" />
</p>
{if $obj->mProduct.image}
<p>
<img src="images/product_images/{$obj->mProduct.image}" width="300px"
border="0" alt="{$obj->mProduct.name} image" />
</p>
{/if}
<p>
<font class="bold-text">Image 2:</font> {$obj->mProduct.image_2}
<br>
<input name="Image2Upload" type="file" value="Upload" />
<input type="submit" name="Upload" value="Загрузить" />
</p>
{if $obj->mProduct.image_2}
<p>
<img src="images/product_images/{$obj->mProduct.image_2}" width="300px"
border="0" alt="{$obj->mProduct.name} image 2" />
</p>
{/if}
{*
<p>
<font class="bold-text">Thumbnail name:</font> {
$obj->mProduct.thumbnail}
<input name="ThumbnailUpload" type="file" value="Upload" />
<input type="submit" name="Upload" value="Upload" />
</p>
{if $obj->mProduct.thumbnail}
<p>
<img src="images/product_images/{$obj->mProduct.thumbnail}"
border="0" alt="{$obj->mProduct.name} thumbnail" />
</p>
{/if}
*}
</td>
<td valign="top">
<p class="bold-text">
Название товара:
</p>
<p>
<input type="text" name="name"
value="{$obj->mProduct.name}" size="30" />
</p>
<p class="bold-text">
Описание:
</p>
<p>
{strip}
<textarea name="description" rows="3" cols="60">
{$obj->mProduct.description}
</textarea>
{/strip}
</p>
<p class="bold-text">
Цена:
</p>
<p>
<input type="text" name="price"
value="{$obj->mProduct.price}" size="5" />
</p>
<p class="bold-text">
Цена со скидкой:
</p>
<p>
<input type="text" name="discounted_price"
value="{$obj->mProduct.discounted_price}" size="5" />
</p>
<p>
<input type="submit" name="UpdateProductInfo"
value="Обновить" />
</p>
<p>
<font class="bold-text">Товар входит в след. категории:</font>
{$obj->mProductCategoriesString}
</p>
<p class="bold-text">
Удалить товар из:
</p>
<p>
{html_options name="TargetCategoryIdRemove"
options=$obj->mRemoveFromCategories}
<input type="submit" name="RemoveFromCategory" value="Удалить"
{if $obj->mRemoveFromCategoryButtonDisabled}
disabled="disabled" {/if}/>
</p>
<p class="bold-text">
Прикрепить товар к категории:
</p>
<p>
{html_options name="TargetCategoryIdAssign"
options=$obj->mAssignOrMoveTo}
<input type="submit" name="Assign" value="Прикрепить" />
</p>
<p class="bold-text">
Переместить/Удалить в/из катег.:
</p>
<p>
{html_options name="TargetCategoryIdMove"
options=$obj->mAssignOrMoveTo}
<input type="submit" name="Move" value="Переместить" />
<input type="submit" name="RemoveFromCatalog"
value="Удалить из категории"
{if !$obj->mRemoveFromCategoryButtonDisabled}
disabled="disabled" {/if}/>
</p>
{if $obj->mProductAttributes}
<p class="bold-text">
Свойства товара:
</p>
<p>
{html_options name="TargetAttributeValueIdRemove"
options=$obj->mProductAttributes}
<input type="submit" name="RemoveAttributeValue"
value="Удалить" />
</p>
{/if}
{if $obj->mCatalogAttributes}
<p class="bold-text">
Добавить след. свойство:
</p>
<p>
{html_options name="TargetAttributeValueIdAssign"
options=$obj->mCatalogAttributes}
<input type="submit" name="AssignAttributeValue"
value="Добавить" />
</p>
{/if}
<p class="bold-text">
Показывать только на:
</p>
<p>
{html_options name="ProductDisplay"
options=$obj->mProductDisplayOptions
selected=$obj->mProduct.display}
<input type="submit" name="SetProductDisplayOption" value="Обновить" />
</p>
</td>
</tr>
</tbody>
</table>

</form>