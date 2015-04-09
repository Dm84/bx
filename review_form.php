<?php 
$include_prolog = false;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) { $include_prolog = true; }

if ($include_prolog === true)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
}

function utfConvert(& $item, $key) {
	$item = iconv("UTF-8", "Windows-1251", $item);
}

array_walk_recursive($_REQUEST['PROPERTY'], 'utfConvert');

?>

<?$APPLICATION->IncludeComponent(
	"bitrix:iblock.element.add.form", 
	"review_form", 
	array(
		"IBLOCK_TYPE" => "Aventura",
		"IBLOCK_ID" => "4",
		"STATUS" => "ANY",
		"STATUS_NEW" => "ANY",
		"LIST_URL" => "",
		"USE_CAPTCHA" => "N",
		"USER_MESSAGE_EDIT" => "Ok save",
		"USER_MESSAGE_ADD" => "Ваш отзыв отправлен.",
		"DEFAULT_INPUT_SIZE" => "30",
		"RESIZE_IMAGES" => "Y",
		"PROPERTY_CODES" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "3",
			3 => "16",
			4 => "5",
			5 => "14",
			6 => "4",
			7 => "13",
			8 => "15",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "DETAIL_TEXT",
			1 => "16",
			2 => "4",
			3 => "13",
			4 => "15",
		),
		"GROUPS" => array(
			0 => "2",
		),
		"ELEMENT_ASSOC" => "CREATED_BY",
		"MAX_USER_ENTRIES" => "100000",
		"MAX_LEVELS" => "100000",
		"LEVEL_LAST" => "N",
		"MAX_FILE_SIZE" => "0",
		"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
		"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
		"SEF_MODE" => "N",
		"SEF_FOLDER" => "",
		"CUSTOM_TITLE_NAME" => "",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
		"CUSTOM_TITLE_DETAIL_TEXT" => "Текст отзыва",
		"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	),
	false
);?>

<?php 
if ($include_prolog === true)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}