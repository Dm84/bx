
			</div>
			<footer>
				<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"footer_map", 
	array(
		"IBLOCK_TYPE" => "Aventura",
		"IBLOCK_ID" => "3",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"PAGE_ELEMENT_COUNT" => "3",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"USE_PRODUCT_QUANTITY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"DISPLAY_COMPARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"BROWSER_TITLE" => "-",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity"
	),
	false
);?>				
			</footer>
			<div id="form_send_review" class="popup_container" style="display: none;">
				<div class="popup_header">Оставить отзыв</div>
				<div class="form_review_top">
					<div class="form_review_left_col">
						<div class="form_pole_item">
							<p>Ваше имя</p>
							<input type="text" class="popup_input">
						</div>
					</div>
					<div class="form_review_left_right">
						<div class="form_pole_item row_pole_item">
							<p>Фамилия</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item row_pole_item">
							<p>Ваш пол</p>
							<div class="radiobuts">
								<div class="radiobutton">
									<input type="radio" id="a1" name="pol" checked>
									<label for="a1"><span></span>М</label>
								</div>
								<div class="radiobutton">
									<input type="radio" id="a2" name="pol">
									<label for="a2"><span></span>Ж</label>
								</div>
							</div>
						</div>
						<div class="form_pole_item row_pole_item">
							<p>Фото с вами</p>
							<label class="input_file">
								<input type="file">
								<span>Загрузить фото</span>
							</label>
						</div>
					</div>
				</div>
				<div class="form_review_middle">
					<div class="form_review_left_col">
						<div class="form_pole_item">
							<p>Страна посещения</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item">
							<p>Город (курорт)</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item">
							<p>Фото с отдыха</p>
							<label class="input_file">
								<input type="file">
								<span>Загрузить фото</span>
							</label>
						</div>
					</div>
					<div class="form_review_left_right">
						<div class="form_pole_item">
							<p>Текст вашего отзыва. Поделитесь с нами впечатлениями об отдыхе и сервисе.</p>
							<textarea class="popup_textarea"></textarea>
						</div>
					</div>
				</div>
				<div class="form_review_bottom">
					<div class="but_bottom">
						<input type="submit" value="Отправить отзыв" class="but">
					</div>
				</div>
			</div>
		</div>

	<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
			
	<?php $APPLICATION->ShowHeadScripts();?>
	</body>
</html>
