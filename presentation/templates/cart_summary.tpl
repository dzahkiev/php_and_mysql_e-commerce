{* cart_summary.tpl *}
{load_presentation_object filename="cart_summary" assign="obj"}
{* Start cart summary *}
<div class="box" id="cart-summary">
<p class="box-title">Ваша корзина:</p>
<div class="cart_box">
<div  id="updating"></div>
{if $obj->mEmptyCart}
<p class="empty-cart">(пусто)</p>
{else}
<table class="cart-summary">
<tbody>
{section name=i loop=$obj->mItems}
<tr>
<td width="30" valign="top" align="right">
{$obj->mItems[i].quantity} x
</td>
<td>
{$obj->mItems[i].name} ({$obj->mItems[i].attributes})
</td>
</tr>
{/section}
<tr>
<td colspan="2" class="cart-summary-subtotal">
<span class="cart_total_price">ИТОГО: {$obj->mTotalAmount} руб.</span>
<br>
<span>
[ <a href="{$obj->mLinkToCartDetails}">оформить покупку</a> ]
</span>
</td>
</tr>
</tbody>
</table>
{/if}
</div>
</div>
{* End cart summary *}