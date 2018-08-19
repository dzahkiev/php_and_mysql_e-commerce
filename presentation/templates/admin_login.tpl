{* admin_login.tpl *}
{load_presentation_object filename="admin_login" assign="obj"}
 <form  class="form-container" method="post" action="{$obj->mLinkToAdmin}">
<p>
Введите информацию для авторизации  или переходите
<a href="{$obj->mLinkToIndex}">на главную</a> страницу.
</p>
<br>
{if $obj->mLoginMessage neq ""}
<p class="error">{$obj->mLoginMessage}</p>
{/if}
<p>
<label class="form-title" for="username">Логин:</label>
<input class="form-field" type="text" name="username" size="35" value="{$obj->mUsername}" />
</p>
<p>
<label class="form-title" for="password">Пароль:</label>
<input class="form-field" type="password" name="password" size="35" value="" />
</p>
<p>
<input class="submit-button" type="submit" name="submit" value="Войти" />
</p>
</form>
</div>