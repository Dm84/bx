<?php

$rsSites = CSite::GetByID(SITE_ID);
$arSite = $rsSites->Fetch();

$css = array(
	'common.css',
	'jquery.fancybox.css',
	'slick.css'
);

foreach ($css as $path)
{
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/'.$path);
}

$localJs = array (
	'jquery-1.9.0.min.js',
	'jquery.fancybox.js',
	'slick.js',
	'script.js',
	'site.js',
);

foreach ($globJs as $js)
{
	$APPLICATION->AddHeadScript($js);	
}

foreach ($localJs as $js)
{
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/'.$js);
}


?><!DOCTYPE html>
<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,300,600,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>

		<?php 
			$APPLICATION->ShowCSS();
			$APPLICATION->ShowHeadStrings();
		?>
		<title><?php $APPLICATION->ShowTitle()?></title>
	</head>
	<body class="main_page">		
		<div id="main">
			<header>
				<div class="logo">
					<a href="/">
						<img src="<?php echo SITE_TEMPLATE_PATH.'/img/logo.png'?>" alt="<?php echo $arSite['SITE_NAME'] ?>">
					</a>
					<a href="#form_send_review" class="top_link_review win">Оставить отзыв</a>
				</div>
				<div class="top_contacts">
					<div class="center clearfix">
						<div class="top_contacts_left">
							<span>+7 (351) 235-12-35,  +7 (351) 260-57-52 &nbsp; / <a href="#">все телефоны</a> /</span>
						</div>
						<div class="top_contacts_right">
							<span>Челябинск, ул. Курчатова, 16 &nbsp; / <a href="#">все адреса</a> /</span>
						</div>
					</div>
				</div>
				<nav class="menu clearfix">
					<ul>
						<li><a href="#">О компании</a></li>
						<li><a href="#">Отзывы о нас</a></li>
						<li><a href="#">Акции</a></li>
						<li><a href="#">Контакты</a></li>
						<li><a href="#">Агентствам</a></li>
						<li><a href="#">Блог о туризме</a></li>
					</ul>
				</nav>
			</header>
			<div id="content">
				