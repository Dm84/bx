<?php 
	if (!CModule::IncludeModule('iblock') || !CModule::IncludeModule('highloadblock')) die();
	
	use Bitrix\Highloadblock;
	use Bitrix\Highloadblock\HighloadBlockTable;
	use Bitrix\Main\Entity;
	use Bitrix\Main\DB\Result;
?>
<section class="main_reviews">
	<div class="bls_centered_header">
		<a href="<?php echo str_replace('#SITE_DIR#/', SITE_DIR, $arResult['LIST_PAGE_URL']); ?>">Отзывы</a> 
		наших туристов
	</div>
	<div class="center">
		<div class="reviews_carousel">
			<?php foreach ($arResult['ITEMS'] as $item): 
				$this->AddEditAction($item['ID'], $item['EDIT_LINK'], 
						CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));

				$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], 
						CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), 
						array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
				
			?>					
				<div class="rev_carousel">
					<div class="review_carousel_item" id="<?php echo $this->GetEditAreaId($item['ID']);?>">
						<div class="review_carousel_item_container">
							<div class="review_top clearfix">
								<div class="author_review_photo">
									<img src="<?php echo $item['PREVIEW_PICTURE']['SRC']; ?>" 
										 alt="<?php echo $item['PROPERTIES']['author']['VALUE']; ?>">
								</div>
								<div class="author_review_name">
									<?php echo $item['PROPERTIES']['author']['VALUE']; ?>
								</div>
								<div class="author_go_to">Вернулся из: 
									<span><?php echo $item['PROPERTIES']['place']['VALUE']; ?>,
									<?php 
										$data = $item['PROPERTIES']['country'];
										$hlblock = HighloadBlockTable::getById(1)->fetch(); 
										$entity = HighloadBlockTable::compileEntity($hlblock);
										$hlDataClass = $entity->getDataClass();//$hldata['NAME'].'Table';
										
										/* @var $result Result */
										$result = $hlDataClass::getById($data['VALUE']);
										$fetch = $result->fetch();										
										echo $fetch['UF_NAME'];
									?>
									</span>
								</div>
								<div class="review_date"><?php echo $item['ACTIVE_FROM']; ?></div>
							</div>
							<div class="review_short_tx">
								<?php echo $item['PREVIEW_TEXT']; ?>
							</div>
							<a href="<?php echo $item['DETAIL_PAGE_URL']; ?>">Читать полностью</a>
						</div>
						<?php $photos = $item['PROPERTIES']['gallery']['VALUE'];
							if (!empty($photos)): ?>
						<div class="reviews_photos">
							<?php 
								$photoId = 0;
								for ($pId = 0; $pId < 2 && $pId < count($photos); ++ $pId):
									$photo = $photos[$pId];
									$info = CFile::GetFileArray($photo);
									$img = CFile::ResizeImageGet($info, array('width' => 168, 'height' => 126), BX_RESIZE_IMAGE_EXACT);
							?>
							<div class="review_item_photo">
								<img src="<?php echo $img['src'] ?>" alt="<?php echo $info['DESCRIPTION']; ?>">
							</div>
							<?php endfor; ?>
						</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
