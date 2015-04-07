
			</div>
			<footer>
				
	<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"footer_map",
	Array(
		"IBLOCK_TYPE" => "Aventura",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "0",
		"SORT_BY1" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array("",""),
		"PROPERTY_CODE" => array("adr","phones"),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "m.d.Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N"
	)
);?>		</footer>
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
	
	<!-- 
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
	-->	
	<?php $APPLICATION->ShowHeadScripts();?>
	</body>
</html>
