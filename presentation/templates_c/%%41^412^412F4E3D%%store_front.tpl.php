<?php /* Smarty version 2.6.25-dev, created on 2015-10-08 22:52:27
         compiled from store_front.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'load_presentation_object', 'store_front.tpl', 2, false),)), $this); ?>
<?php echo smarty_function_load_presentation_object(array('filename' => 'store_front','assign' => 'obj'), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="ru">
  <head>
    <title><?php echo $this->_tpl_vars['obj']->mPageTitle; ?>
</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link type="text/css" rel="stylesheet"    href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/tshirtshop.css" />
	  <link type="text/css" rel="stylesheet"    href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/block.css" />
	  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/animated-menu.css"/>
	  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/jquery-1.7.1.min.js" type="text/javascript"></script>
	  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/jquery.easing.1.3.js" type="text/javascript"></script>
	  <script src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/animated-menu.js" type="text/javascript"></script>
	  <script type="text/javascript"  src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/ajax.js"></script>
	  
  </head>
  <body>
	<div class="bg"></div>
    <div id="maket">
	<div  class="_header"  >
		<a href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
"><img class="logo"  src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/logo.jpg" alt="Интернет Магазин Зеленый Фермер"   /></a>
 	<div class="menu_box">	
	<div class="menu_g green">
 			<p><a href="#">Главная</a></p> 
  	</div>
		<div class="menu_g yellow">
 			<p><a href="#">Оплата и доставка</a></p> 
		</div>
		<div class="menu_g red">
 			<p><a href="#">Статьи</a></p> 
		</div>
		<div class="menu_g purple">
 			<p><a href="#">О нас</a></p> 
		</div>
		<div class="menu_g blue">
 			<p><a href="#">Контакты</a></p> 
		</div>
		
	</div>
		<div class="log"><p><a href="#">Зарегистрироваться</a></p><p><a href="#">Войти</a></p></div>
		
	</div>
 
		<div class="line"></div>
		<div id="page_left_part">
		<div class="menu" > 
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "search_box.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "departments_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>	
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCategoriesCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<br>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mCartSummaryCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	     </div>
	</div>
	<div id="page_right_part">
            <div id="contents"  >
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['obj']->mContentsCell, 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
            </div>
 		
	</div>
		<div class="line"></div>
		<div class="share">
             <a class="social social-vk" href="http://ru-ru.facebook.com/umar.dzahkiev"></a>
            <a class="social social-fb" href="http://ru-ru.facebook.com/umar.dzahkiev"></a>
            <a class="social social-tw" href="http://ru-ru.facebook.com/umar.dzahkiev"></a>
        </div>
 
	
 		<div class="footer_one">
			<p class="line_text"></p>
			<p class="line_text"></p>
 			<p class="line_text"></p>
 		</div>
		<div class="footer_two">
 			<p class="line_text"></p>
			<p class="line_text"></p>
			<p class="line_text"></p>
		</div>
		<div class="footer_three">			
			<p class="line_text"></p>
			<p class="line_text"></p>
 			<p class="line_text"></p>
		</div>
 		<div class="line_text_copy"></div>
		
		
        
      </div> 
	 
   </body>
</html>