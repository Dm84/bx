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
	'jquery.form.js',
	'slick.js',
	'script.js',
	'site.js',
);

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
	<body class="<?php echo $APPLICATION->GetCurPage(true) == SITE_DIR.'index.php' ? 'main_page' : ''; ?>">		
		<div id="main">			
			<header>
				<div class="admin_panel">
				<?php $APPLICATION->ShowPanel(); ?>
				</div>
				<div class="logo">
					<a href="<?php echo SITE_DIR ?>">
						<img src="<?php echo SITE_TEMPLATE_PATH.'/img/logo.png'?>" 
							 alt="<?php echo $arSite['SITE_NAME'] ?>"
							 title="<?php echo $arSite['SITE_NAME'] ?>">
					</a>
					<a href="#form_send_review" class="top_link_review win">Оставить отзыв</a>
				</div>
				<div class="top_contacts">
					<div class="center clearfix">
						<div class="top_contacts_left">
							<span><?php 
								$APPLICATION->IncludeFile("include_areas/header_phones.html", array(), array(
										'SHOW_BORDER' => true,
										'MODE' => 'text'
								)); 
							?> &nbsp; / <a href="#map">все телефоны</a> /
							</span>
						</div>
						<div class="top_contacts_right">
							<span><?php 
								$APPLICATION->IncludeFile("include_areas/header_adr.html", array(), array(
										'SHOW_BORDER' => true,
										'MODE' => 'text'
								)); 
							?> &nbsp; / <a href="#map">все адреса</a> /</span>
						</div>
					</div>
				</div>
				<nav class="menu clearfix">
					<?php $APPLICATION->IncludeComponent("bitrix:menu","main", Array(
					        "ROOT_MENU_TYPE" => "top", 
					        "MAX_LEVEL" => "1", 
					        "CHILD_MENU_TYPE" => "top", 
					        "USE_EXT" => "N",
					        "DELAY" => "N",
					        "ALLOW_MULTI_SELECT" => "N",
					        "MENU_CACHE_TYPE" => "N", 
					        "MENU_CACHE_TIME" => "3600", 
					        "MENU_CACHE_USE_GROUPS" => "Y", 
					        "MENU_CACHE_GET_VARS" => "" 
					    )
					);?>				
				</nav>				
			</header>
			<div id="content">
				