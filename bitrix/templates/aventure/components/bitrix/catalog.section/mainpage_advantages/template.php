<section class="why_we">	
	<div class="center">
		<div class="bls_centered_header">
			������ 
			<a class="show_border" href="<?php echo SITE_DIR.'company/'?>">
				��
			</a>?
		</div>
		<div class="bls_container">			
			<?php foreach ($arResult['ITEMS'] as $item): 
				$this->AddEditAction($item['ID'], $item['EDIT_LINK'], 
						CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));

				$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], 
						CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), 
						array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
				
			?>
			<div class="why_we_item" id="<?php echo $this->GetEditAreaId($item['ID']);?>">
				<div class="why_item_count">
					<span class="count">
						<?php echo $item['PROPERTIES']['count']['VALUE']; ?>
					</span> 
					<?php echo $item['NAME']; ?>
				</div>				
				<?php echo $item['PREVIEW_TEXT']; ?>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>