<?php /* Smarty version 2.6.25-dev, created on 2015-10-11 11:35:55
         compiled from first_page_contents.tpl */ ?>
         <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/slider_demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/slider_style.css" />
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/modernizr.custom.28468.js"></script>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
scripts/jquery.cslider.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
styles/nojs.css" />
		</noscript>
   
        <div class="container_slider">
			 
			<div id="da-slider" class="da-slider">
				<div  class="da-slide">
					<h2 align="center">Добро пожаловать!</h2>
					<p class="description">
						Мы рады приветствовать вас в интернет магазине "Зелёная Ферма".  
						</p>
			 	<div class="da-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/1.png" alt="image01"  /></div>  
				</div>
				<div class="da-slide">
					<h2>Товар #1</h2>
					<p>описание ...</p>
					<a href="#" class="da-link">Подробнее</a>
					<div class="da-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/2.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Товар #2</h2>
					<p>описание ...</p>
					<a href="#" class="da-link">Подробнее</a>
					<div class="da-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/3.png" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Товар #3</h2>
					<p>описание ...</p>
					<a href="#" class="da-link">Подробнее</a>
					<div class="da-img"><img src="<?php echo $this->_tpl_vars['obj']->mSiteUrl; ?>
images/4.png" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div> 
 		 
 

 

<br>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "products_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>