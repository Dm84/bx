<?php if (empty($arResult['MESSAGE'])): ?>
	<div class="popup_header">Оставить отзыв</div>
		<?php
			if (!empty($arResult["ERRORS"])):
				foreach ($arResult['ERRORS'] as $error):
		?>
			<p><?php echo $error; ?></p>
		<?php 
			endforeach; endif; 
		?>

	<form name="iblock_add" action="<?php echo SITE_DIR; ?>review_form.php?ajax=1" method="post" enctype="multipart/form-data">
			<?php echo bitrix_sessid_post() ?>
			<?php if ($arParams["MAX_FILE_SIZE"] > 0): ?>
				<input type="hidden" name="MAX_FILE_SIZE" value="<?= $arParams["MAX_FILE_SIZE"] ?>" />
			<?php endif?>
				
		<div class="form_review_top">
			<div class="form_review_left_col">
				<div class="form_pole_item">
					<p>Ваше имя</p>
					<input name="PROPERTY[NAME]" type="text" class="popup_input" 
						   value="<?php echo $arResult['ELEMENT']['NAME']; ?>">
				</div>
			</div>
			<div class="form_review_left_right">
				<div class="form_pole_item row_pole_item">
					<p>Фамилия</p>
					<input type="text" name="PROPERTY[13]" class="popup_input" 
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][13][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item row_pole_item">
					<p>Ваш пол</p>
					<div class="radiobuts">
						<div class="radiobutton">
							<input type="radio" id="a1" name="PROPERTY[14]" value="M" 
									<?php echo $arResult['ELEMENT_PROPERTIES'][14][0]['VALUE'] == 'M' ? 'checked="Y"' : ''; ?>>
							<label for="a1"><span></span>М</label>
						</div>
						<div class="radiobutton">
							<input type="radio" id="a2" name="PROPERTY[14]" value="F"
								   <?php echo $arResult['ELEMENT_PROPERTIES'][14][0]['VALUE'] == 'F' ? 'checked="Y"' : ''; ?>>
							<label for="a2"><span></span>Ж</label>
						</div>
					</div>
				</div>
				<div class="form_pole_item row_pole_item">
					<p>Фото с вами</p>
					<label class="input_file">
						<input type="hidden" name="PROPERTY[PREVIEW_PICTURE]" 
							   value="<?php echo $arResult['ELEMENT']['PREVIEW_PICTURE']; ?>">						
						<input type="file" name="PROPERTY_FILE_PREVIEW_PICTURE_0">
						<span>Загрузить фото</span>
					</label>
				</div>
			</div>
		</div>
		<div class="form_review_middle">
			<div class="form_review_left_col">
				<div class="form_pole_item">
					<p>Страна посещения</p>
					<input type="text" class="popup_input" name="PROPERTY[4]"
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][4][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item">
					<p>Город (курорт)</p>
					<input type="text" class="popup_input" name="PROPERTY[5]"
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][5][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item">
					<p>Фото с отдыха</p>
					<label class="input_file">
						<input type="hidden" name="PROPERTY[3][0]" 
							   value="0">
						<input type="file" name="PROPERTY_FILE_3_0">
						<span>Загрузить фото</span>
					</label>
				</div>
			</div>
			<div class="form_review_left_right">
				<div class="form_pole_item">
					<p>Текст вашего отзыва. Поделитесь с нами впечатлениями об отдыхе и сервисе.</p>
					<textarea class="popup_textarea" name="PROPERTY[DETAIL_TEXT]"><?php echo $arResult['ELEMENT']['DETAIL_TEXT']; ?></textarea>
				</div>
			</div>
		</div>
		<div class="form_review_bottom">
			<div class="but_bottom">
				<input type="hidden" name="iblock_submit" value="Y"/>
				<input type="submit" value="Отправить отзыв" class="but">
			</div>
		</div>
	</form>
<?php else: ?>
	<div>
		<?php echo $arResult['MESSAGE']; ?>
	</div>
<?php endif; ?>
