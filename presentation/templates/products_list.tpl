{* products_list.tpl *}
{load_presentation_object filename="products_list" assign="obj"}
{if $obj->mSearchDescription != ""}
<p class="description">{$obj->mSearchDescription}</p>
{/if}
{if count($obj->mProductListPages) > 0}
<p>
{if $obj->mLinkToPreviousPage}
<a href="{$obj->mLinkToPreviousPage}">пред.</a>
{/if}
{section name=m loop=$obj->mProductListPages}
{if $obj->mPage eq $smarty.section.m.index_next}
<strong>{$smarty.section.m.index_next}</strong>
{else}
<a href="{$obj->mProductListPages[m]}">
{$smarty.section.m.index_next}</a>
{/if}
{/section}
{if $obj->mLinkToNextPage}
<a href="{$obj->mLinkToNextPage}">след.</a>
{/if}
</p>
{/if}
{if $obj->mProducts}
 
{section name=k loop=$obj->mProducts}
<div class="product_list_container">

 
{if $obj->mProducts[k].thumbnail neq ""}
<div class="product_list_img">
<a href="{$obj->mProducts[k].link_to_product}">
<img src="{$obj->mProducts[k].thumbnail}" width="110"
alt="{$obj->mProducts[k].name}"  />
</a>
</div>
<div class="line_product" ></div>
	<p   align="center">
		<a  class="product_link" href="{$obj->mProducts[k].link_to_product}">
			{$obj->mProducts[k].name}
		</a>
	</p>
{/if} 
<p class="product_short_description">
{$obj->mProducts[k].description}
 </p>

 
<p class="section">
Цена: 
{if $obj->mProducts[k].discounted_price != 0}
<span class="old-price">{$obj->mProducts[k].price}</span>
<span class="price">{$obj->mProducts[k].discounted_price} руб.</span>
{else}
<span class="price">{$obj->mProducts[k].price} руб.</span>
{/if}
</p>
{* Форма Add to Cart *}
<form class="add-product-form" target="_self" method="post"	action="{$obj->mProducts[k].link_to_add_product}"
	onsubmit="return addProductToCart(this);">
{* Генерируем список значений атрибутов *}
<p class="attributes">
{* Просматриваем список атрибутов и их значений *}
{section name=l loop=$obj->mProducts[k].attributes}
{* Генерируем новый тег select? *}
{if $smarty.section.l.first ||
$obj->mProducts[k].attributes[l].attribute_name !==
$obj->mProducts[k].attributes[l.index_prev].attribute_name}
{$obj->mProducts[k].attributes[l].attribute_name}:
<select name="attr_{$obj->mProducts[k].attributes[l].attribute_name}">
{/if}
{* Генерируем новый тег option *}
<option value="{$obj->mProducts[k].attributes[l].attribute_value}">
{$obj->mProducts[k].attributes[l].attribute_value}
</option>
{* Закрываем тег select? *}
{if $smarty.section.l.last ||
$obj->mProducts[k].attributes[l].attribute_name !==
$obj->mProducts[k].attributes[l.index_next].attribute_name}
</select>
{/if}
{/section}
</p>
{* Добавляем кнопку для отправки формы *}
<p align="center">
<input class="button button_style"  type="submit" name="add_to_cart" value="Купить" />
</p>
</form>
	{* Отображаем кнопку редактирования для администраторов Jn *}
	{if $obj->mShowEditButton}
	<form action="{$obj->mEditActionTarget}" target="_self"
	method="post" class="edit-form">
		<input type="hidden" name="product_id"
		value="{$obj->mProducts[k].product_id}" />
		<input type="submit" name="submit" value="Edit Product Details" />
	</form>
	{/if}
</div>
{/section} 
{/if}
<div class="clearfix"></div>