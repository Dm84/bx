<?php 
	$icons = array('one', 'two', 'three');
	
	$sum_lat = 0.0;
	$sum_lon = 0.0;
	$placemarks = array();
	foreach ($arResult['ITEMS'] as $i => $item)
	{
		$val = $item['PROPERTIES']['map']['VALUE'];
		$mark = array(
			'pos' => $val,
			'ico' => SITE_TEMPLATE_PATH.'/img/ico_contact_map_'.$icons[$i % 3].'.png'
		);
		$placemarks[] = $mark;
		
		// вычисл€ем и суммируем долготы и широты 
		$pos_pair = explode(',', $val);
		$lat = floatval($pos_pair[0]);
		$lon = floatval($pos_pair[1]);
		$sum_lat += $lat;
		$sum_lon += $lon;
	}
	// центр многоугольника дл€ позиционировани€ карты
	$center_lat = $sum_lat / (float)count($arResult['ITEMS']);
	$center_lon = $sum_lon / (float)count($arResult['ITEMS']);
?>
<div id="map" class="footer_map">
<?php $APPLICATION->IncludeComponent(
	"bitrix:map.yandex.system", 
	"offices", 
	array(
		"KEY" => "",
		"INIT_MAP_LAT" => $center_lat,
		"INIT_MAP_LON" => $center_lon,
		"INIT_MAP_SCALE" => 12,
		"INIT_MAP_TYPE" => "MAP",
		"MAP_WIDTH" => "AUTO",
		"MAP_HEIGHT" => "549px",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		),
		"MAP_ID" => "testmap",
		"VARIABLES" => array(
			'marks' => $placemarks
		)
	),
	false
);
	?>
</div>
<div class="footer_cont">
	<div class="center">
		<div class="footer_contacts">
