{* search_box.tpl *}
{load_presentation_object filename="search_box" assign="obj"}
{* Начало поля поиска *}
<div class="box">
<p class="box-title">ПОИСК ТОВАРОВ</p>
<form class="search_form" method="post" action="{$obj->mLinkToSearch}">
<p>
<input  class="search_input" maxlength="100" id="search_string" name="search_string"
value="{$obj->mSearchString}" size="19" />
<input class="button" type="submit" value="Найти" /><br />
</p>
<p>
<input class="search_chek"  type="checkbox" id="all_words" name="all_words"
{if $obj->mAllWords == "on"} checked="checked" {/if}/>
<label class="all_words" for="all_words">искать по всем словам</label>
</p>
</form>
</div>
{* Конец поля поиска *}