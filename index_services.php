<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"services",
	Array(
		"ROOT_MENU_TYPE" => "left",
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "N",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array("")
	)
);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:highloadblock.list",
	"mainpage_countries",
	Array(
		"BLOCK_ID" => "1",
		"DETAIL_URL" => "/countries/#ID#",
		"VARIABLES" => array(
			"SECTION_URL" => "/countries/"
		)
	)
);?>