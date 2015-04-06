
<div class="news_item" id="<?php echo $editAreaId; ?>">
	<div class="news_item_pic">
		<img src="<?php echo $item['PREVIEW_PICTURE']['SRC']; ?>" alt="<?php echo $item['NAME']; ?>">
	</div>
	<div class="news_item_container">
		<div class="item_date"><span><?php echo mb_strtolower($item['DISPLAY_ACTIVE_FROM']);?></span></div>
		<a href="<?php echo $item['DETAIL_PAGE_URL']; ?>">
			<?php echo $item['PREVIEW_TEXT']; ?>
		</a>
	</div>
</div>