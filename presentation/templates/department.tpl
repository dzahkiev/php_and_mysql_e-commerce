{* department.tpl *}
{load_presentation_object filename="department" assign="obj"}
<p class="title">{$obj->mName}</p>
<p class="description">{$obj->mDescription}</p>
{if $obj->mShowEditButton}
<form action="{$obj->mEditActionTarget}" method="post" class="edit-form">
<input type="submit" name="submit_{$obj->mEditAction}"
value="{$obj->mEditButtonCaption}" />
</form>
{/if}
{include file="products_list.tpl"}