{* cart_details.tpl *}
{load_presentation_object filename="cart_details" assign="obj"}
 <div id="updating"></div>

{if $obj->mIsCartNowEmpty eq 1}
<p class="box-title">Ваша корзина пока пуста!</p>
{else}
<p class="box-title">Список товаров в корзине:</p>
<form class="cart-form" method="post" action="{$obj->mUpdateCartTarget}" onsubmit="return executeCartAction(this);">
<table class="tss-table">
<tr>
<th>наименование товара</th>
<th>цена</th>
<th>кол.</th>
<th>общая стоим.</th>
<th width="60px">&nbsp;</th>
</tr>
{section name=i loop=$obj->mCartProducts}
<tr>
<td>
<input name="itemId[]" type="hidden"
value="{$obj->mCartProducts[i].item_id}" />
{$obj->mCartProducts[i].name}
({$obj->mCartProducts[i].attributes})
</td>
<td>{$obj->mCartProducts[i].price} руб.</td>
<td>
<input type="text" name="quantity[]" size="5"
value="{$obj->mCartProducts[i].quantity}" />
</td>
<td>{$obj->mCartProducts[i].subtotal} руб.</td>
<td>
<a  href="{$obj->mCartProducts[i].save}"	onclick="return executeCartAction(this);"><img src= "{$obj->main_page_url}/images/clock.png" height="16px" align="center" valign="middle" alt="оплатить потом" title="оплатить потом"></img></a>
<a   href="{$obj->mCartProducts[i].remove}"	onclick="return executeCartAction(this);"><img src= "{$obj->main_page_url}/images/delete.png" height="18px" align="center" valign="middle" alt="удалить" title="удалить"></img></a>
</td>
</tr> 
{/section}
</table>
<table class="cart-subtotal">
<tr>
<td >
<p class="box-title"><b> 
ИТОГО К ОПЛАТЕ:&nbsp;
<font class="price">{$obj->mTotalAmount} руб.</font>
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
{/if}
{if ($obj->mIsCartLaterEmpty eq 0)}
<p class="box-title">Сохраненные товары:</p>
<table class="tss-table">
<tr>
<th>наименование товара</th>
<th width="30%">цена</th>
<th width="60px">&nbsp;</th>
</tr>
{section name=j loop=$obj->mSavedCartProducts}
<tr>
<td>
{$obj->mSavedCartProducts[j].name}
({$obj->mSavedCartProducts[j].attributes})
</td>
<td>
{$obj->mSavedCartProducts[j].price} руб.
</td>
<td >
	<a href="{$obj->mSavedCartProducts[j].move}"	onclick="return executeCartAction(this);"><img src= "{$obj->main_page_url}/images/add.png" height="16px" align="center" valign="middle" alt="добавить в корзину" title="добавить в корзину"></img></a>
	<a href="{$obj->mSavedCartProducts[j].remove}"	onclick="return executeCartAction(this);"><img src= "{$obj->main_page_url}/images/delete.png" height="18px" align="center" valign="middle" alt="удалить" title="удалить"></img></a>
</td>
</tr>
{/section}
</table>
 
{/if}
<br>
{if $obj->mLinkToContinueShopping}
<p><a href="{$obj->mLinkToContinueShopping}">Продолжить покупку</a></p>
{/if}
 <br>
 
 {if $obj->mRecommendations}
<h3>Пользователи купившие эти товары, также купили:</h3>
<ol>
{section name=m loop=$obj->mRecommendations}
<li>
{strip}
<a href="{$obj->mRecommendations[m].link_to_product}">
{$obj->mRecommendations[m].product_name}
</a>
{/strip}
<span class="list"> - {$obj->mRecommendations[m].description}</span>
</li> 
{/section}
</ol>
{/if}