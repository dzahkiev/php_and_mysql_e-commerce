{* admin_menu.tpl *}
{load_presentation_object filename="admin_menu" assign="obj"}
<div style="width:1100px; margin:0 auto;">
<h1>Админка</h1>
<p class="menu_admin"> |
<a href="{$obj->mLinkToStoreAdmin}">Администрирование: Каталог</a> |
<a href="{$obj->mLinkToAttributesAdmin}">Атрибуты товара</a> |
<a href="{$obj->mLinkToCartsAdmin}">Корзины покупателей</a> |
<a href="{$obj->mLinkToOrdersAdmin}">Заказы</a> |
<a href="{$obj->mLinkToStoreFront}">На главную</a> |
<a href="{$obj->mLinkToLogout}">Выйти</a> |
</p>
