<?php $colors = array('red', 'yellow', 'blue'); ?>

<div class="foot_contacts_item foot_contacts_<?php echo $colors[$idx % 3]; ?>" id="<?php echo $editAreaId; ?>">
	<div class="foot_contacts_container">
		<div class="foot_contacts_header"><?php echo ($idx + 1).' '.$item['NAME']; ?></div>
		<div class="foot_contacts_left">
			<?php echo $item['PROPERTIES']['adr']['~VALUE']['TEXT']; ?>
		</div>
		<div class="foot_contacts_right">
			<?php echo $item['PROPERTIES']['phones']['~VALUE']['TEXT']; ?>
			<p><a href="<?php echo $item['DETAIL_PAGE_URL']; ?>">все контакты</a></p>
		</div>
	</div>
</div>