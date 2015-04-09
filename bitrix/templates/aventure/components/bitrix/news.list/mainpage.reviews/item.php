<?php 
//	if (!CModule::IncludeModule('iblock') || !CModule::IncludeModule('highloadblock')) die();
//	
//	use Bitrix\Highloadblock;
//	use Bitrix\Highloadblock\HighloadBlockTable;
//	use Bitrix\Main\Entity;
//	use Bitrix\Main\DB\Result;

	$author = $item['PROPERTIES']['name']['VALUE'].' '.$item['PROPERTIES']['last_name']['VALUE'];
	$photo = CFile::ResizeImageGet($item['PROPERTIES']['photo']['VALUE'], array('width' => 82, 'height' => 160), 
			BX_RESIZE_IMAGE_PROPORTIONAL);
?>

<div class="rev_carousel">
	<div class="review_carousel_item" id="<?php echo $editAreaId;?>">
		<div class="review_carousel_item_container">
			<div class="review_top clearfix">
				<div class="author_review_photo">
					<img src="<?php echo $photo['src']; ?>" 
						 alt="<?php echo $author; ?>">
				</div>
				<div class="author_review_name">
					<?php echo $author ?>
				</div>
				<div class="author_go_to">Вернулся из: 
					<span>
						<?php 
							$place = $item['PROPERTIES']['place']['VALUE'];
							if (!empty($place)) { echo $place.', '; } 

							$data = $item['PROPERTIES']['country'];

	//										$hlblock = HighloadBlockTable::getById(1)->fetch(); 
	//										$entity = HighloadBlockTable::compileEntity($hlblock);
	//										$hlDataClass = $entity->getDataClass();//$hldata['NAME'].'Table';

							/* @var $result Result */
	//										$result = $hlDataClass::getById($data['VALUE']);
	//										$fetch = $result->fetch();										
	//										echo $fetch['UF_NAME'];

							echo $data['VALUE'];
						?>
					</span>
				</div>
				<div class="review_date"><?php echo $item['DISPLAY_ACTIVE_FROM']; ?></div>
			</div>
			<div class="review_short_tx">
				<?php 
				if (!empty($item['PREVIEW_TEXT'])) {
					echo $item['PREVIEW_TEXT']; 
				} else
				{
					echo TruncateText($item['DETAIL_TEXT'], 700);
				}
				?>
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