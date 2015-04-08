<?php if (empty($arResult['MESSAGE'])): ?>
	<div class="popup_header">�������� �����</div>
		<div class="form_pole_item">
		<?php
			if (!empty($arResult["ERRORS"])):
				foreach ($arResult['ERRORS'] as $error):
		?>
			<p><?php echo $error; ?></p>
		<?php 
			endforeach; endif; 
		?>
		</div>
			
	<form name="iblock_add" action="<?php echo SITE_DIR; ?>review_form.php?ajax=1" method="post" enctype="multipart/form-data">
			<?php echo bitrix_sessid_post() ?>
			<?php if ($arParams["MAX_FILE_SIZE"] > 0): ?>
				<input type="hidden" name="MAX_FILE_SIZE" value="<?= $arParams["MAX_FILE_SIZE"] ?>" />
			<?php endif?>
				
		<div class="form_review_top">
			<div class="form_review_left_col">
				<div class="form_pole_item">
					<p>���� ���</p>
					<input name="PROPERTY[NAME]" type="hidden" class="popup_input" 
						   value="����������� ����� ������">
					<input type="text" name="PROPERTY[16][0]" class="popup_input" 
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][16][0]['VALUE']; ?>">
					
				</div>
			</div>
			<div class="form_review_left_right">
				<div class="form_pole_item row_pole_item">
					<p>�������</p>
					<input type="text" name="PROPERTY[13][0]" class="popup_input" 
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][13][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item row_pole_item">
					<p>��� ���</p>
					<div class="radiobuts">
						<div class="radiobutton">
							<input type="radio" id="a1" name="PROPERTY[14][0]" value="M" 
									<?php echo $arResult['ELEMENT_PROPERTIES'][14][0]['VALUE'] == 'M' ? 'checked="Y"' : ''; ?>>
							<label for="a1"><span></span>�</label>
						</div>
						<div class="radiobutton">
							<input type="radio" id="a2" name="PROPERTY[14][0]" value="F"
								   <?php echo $arResult['ELEMENT_PROPERTIES'][14][0]['VALUE'] == 'F' ? 'checked="Y"' : ''; ?>>
							<label for="a2"><span></span>�</label>
						</div>
					</div>
				</div>
				<div class="form_pole_item row_pole_item">
					<p>���� � ����</p>
					<label class="input_file">						
						<input type="hidden" name="PROPERTY[15][0]" 
							   value="0">						
						<input type="file" name="PROPERTY_FILE_15_0">
						<span>��������� ����</span>
					</label>
				</div>
			</div>
		</div>
		<div class="form_review_middle">
			<div class="form_review_left_col">
				<div class="form_pole_item">
					<p>������ ���������</p>
					<input type="text" class="popup_input" name="PROPERTY[4][0]"
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][4][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item">
					<p>����� (������)</p>
					<input type="text" class="popup_input" name="PROPERTY[5][0]"
						   value="<?php echo $arResult['ELEMENT_PROPERTIES'][5][0]['VALUE']; ?>">
				</div>
				<div class="form_pole_item">
					<p>���� � ������</p>
					<label class="input_file">
						<input type="hidden" name="PROPERTY[3][0]" 
							   value="0">
						<input type="file" name="PROPERTY_FILE_3_0">
						<span>��������� ����</span>
					</label>
				</div>
			</div>
			<div class="form_review_left_right">
				<div class="form_pole_item">
					<p>����� ������ ������. ���������� � ���� ������������� �� ������ � �������.</p>
					<textarea class="popup_textarea" name="PROPERTY[DETAIL_TEXT][0]"><?php echo $arResult['ELEMENT']['DETAIL_TEXT']; ?></textarea>
				</div>
			</div>
		</div>
		<div class="form_review_bottom">
			<div class="but_bottom">
				<input type="hidden" name="iblock_submit" value="Y"/>
				<input type="submit" value="��������� �����" class="but">
			</div>
		</div>
	</form>
			
	<div class="form_pole_item">
	<?php
		if (!empty($arResult["ERRORS"])):
			foreach ($arResult['ERRORS'] as $error):
	?>
		<p><?php echo $error; ?></p>
	<?php 
		endforeach; endif; 
	?>
	</div>
			
<?php else: ?>
	<div>
		<?php echo $arResult['MESSAGE']; ?>
	</div>
<?php endif; ?>
