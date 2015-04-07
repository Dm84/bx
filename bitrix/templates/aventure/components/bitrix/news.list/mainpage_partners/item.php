
<div class="item_our_partner" id="<?php echo $editAreaId; ?>">
	<div class="item_our_partner_pic">
		<img src="<?php echo $item['PREVIEW_PICTURE']['SRC']; ?>" alt="<?php echo $item['NAME']; ?>">
	</div>
	<?php if (!empty($item['PREVIEW_TEXT'])): ?>
	<div class="partner_tx"><?php echo $item['PREVIEW_TEXT']; ?></div>
	<?php endif; ?>
</div>