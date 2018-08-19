{load_presentation_object filename="product" assign="obj"}
<h1 class="title">{$obj->mProduct.name}</h1>

<div class="product_block">
<div class="product_image_block"   >
{if $obj->mProduct.image}

<img  width="350px"   src="{$obj->mProduct.image}" alt="{$obj->mProduct.name} image" />
{/if}
{* ----------------------на время отключаем остальные фото
{if $obj->mProduct.image_2}
 <img   src="{$obj->mProduct.image_2}" alt="{$obj->mProduct.name} image 2" />
{/if}
*}
</div>
<div class="product_price_block">
	<p class="section">
		
		
		{if $obj->mProduct.discounted_price != 0}
		Цена со скидкой:
		<span class="price">{$obj->mProduct.discounted_price} руб.</span><br>
		{else}
		Цена:
		<span class="price">{$obj->mProduct.price} руб.</span> 
		{/if}
	</p>
	<br>
	{* Форма Add to Cart *}
	<form class="add-product-form" target="_self" method="post" action="{$obj->mProduct.link_to_add_product}"
	onsubmit="return addProductToCart(this);">
		{* Генерируем список значений атрибутов *}
		<p class="attributes">
			{* Просматриваем список атрибутов и их значений *}
			{section name=k loop=$obj->mProduct.attributes}
			{* Генерируем новый тег select? *}
			{if $smarty.section.k.first ||
			$obj->mProduct.attributes[k].attribute_name !==
			$obj->mProduct.attributes[k.index_prev].attribute_name}
			{$obj->mProduct.attributes[k].attribute_name}:
			<select name="attr_{$obj->mProduct.attributes[k].attribute_name}">
				{/if}
				{* Генерируем новый тег option *}
				<option value="{$obj->mProduct.attributes[k].attribute_value}">
					{$obj->mProduct.attributes[k].attribute_value}
				</option>
				{* Закрываем тег select? *}
				{if $smarty.section.k.last ||
				$obj->mProduct.attributes[k].attribute_name !==
				$obj->mProduct.attributes[k.index_next].attribute_name}
			</select>
			{/if}
			{/section}
		</p>
		{* Добавляем кнопку для отправки формы *}
		<p align="center">
			<input   class="button button_style" type="submit" name="add_to_cart" value="Добавить в корзину" />
		</p>
	</form>
	{if $obj->mLinkToContinueShopping}
	<p><a class="continue_link" href="{$obj->mLinkToContinueShopping}">продолжить покупку</a></p>
	{/if}
</div>
</div>
{*ОПИСАНИЕ---------------------
<div class="description_product">
{$obj->mProduct.description}
</div>-----------------------*}
 
			<section class="tabs">
	            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
		        <label for="tab-1" class="tab-label-1">Описание</label>
		
	            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2"   >Отзывы</label> 
				<input id="tab-3" type="hidden" name="radio-set" class="tab-selector-2" />
		        <label for="tab-2" class="tab-label-2" style="float:none;" >Отзывы</label>
		        <div class="content-block">
			        <div class="content-1">
                         <p> {$obj->mProduct.description} </p>
  				    <br>
					<p><b>Похожие товары вы можете найти в каталоге:</b></p>
					 
					<p>	{section name=i loop=$obj->mLocations}
						 
							{strip}
							<a href="{$obj->mLocations[i].link_to_department}">
								{$obj->mLocations[i].department_name}
							</a>
							{/strip}
							&raquo;
							{strip}
							<a href="{$obj->mLocations[i].link_to_category}">
								{$obj->mLocations[i].category_name}
							</a>
							{/strip}
						 
						{/section}
					 </p>
					</div>
			        <div class="content-2">
					</div>
			        
		        </div>
			</section>
{* Отображаем кнопку редактирования для администраторов *}
{if $obj->mShowEditButton}
<form action="{$obj->mEditActionTarget}" target="_self"
method="post" class="edit-form">
<p>
<input type="submit" name="submit_edit" value="Edit Product Details" />
</p>
</form>
{/if}
 
 
<br>

 {if $obj->mRecommendations}
<h3>Пользователи купившие этот товар, также купили:</h3>
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
 <div class="clearfix"></div>
