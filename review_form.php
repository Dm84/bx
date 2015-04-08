<?php 
if (isset($_REQUEST['ajax']))
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php"); 
}

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
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "3",
			4 => "5",
			5 => "14",
			6 => "4",
			7 => "13",
		),
		"PROPERTY_CODES_REQUIRED" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_TEXT",
			3 => "4",
			4 => "13",
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
		"SEF_FOLDER" => "/",
		"CUSTOM_TITLE_NAME" => "Имя",
		"CUSTOM_TITLE_TAGS" => "",
		"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "Дата",
		"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
		"CUSTOM_TITLE_IBLOCK_SECTION" => "",
		"CUSTOM_TITLE_PREVIEW_TEXT" => "Текст отзыва",
		"CUSTOM_TITLE_PREVIEW_PICTURE" => "Фото с вами",
		"CUSTOM_TITLE_DETAIL_TEXT" => "Текст отзыва",
		"CUSTOM_TITLE_DETAIL_PICTURE" => ""
	),
	false
);?>

<?php 
if (isset($_REQUEST['ajax']))
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}