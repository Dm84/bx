<section class="main_slider">
<?php foreach ($arResult['ITEMS'] as $item):
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], 
				CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));

		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], 
				CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), 
				array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	
?>
	<div class="main_slide_item" 	
		id="<?php echo $this->GetEditAreaId($arElement['ID']);?>"		 
		style="background-image: url(<?php echo $item['DETAIL_PICTURE']['SRC']; ?>)">
		<div class="center">
			<div class="slide_item_tx">			
			<?php if (!empty($item['PREVIEW_TEXT'])): ?>
				<div class="slide_item_tx_header"><?php echo $item['PREVIEW_TEXT']?></div>
			<?php endif;?>
			<?php if (!empty($item['DETAIL_TEXT'])): ?>
				<p><?php echo $item['DETAIL_TEXT']?></p>
			<?php endif; ?>
			</div>
		</div>
			 
	</div>
	<?php endforeach; ?>
</section>