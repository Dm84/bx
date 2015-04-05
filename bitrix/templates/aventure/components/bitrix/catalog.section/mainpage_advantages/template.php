<section class="why_we">	
	<div class="center">
		<div class="bls_centered_header">Почему <a class="show_border" href="/company/">мы</a>?</div>
		<div class="bls_container">			
			<?php foreach ($arResult['ITEMS'] as $item): ?>
			<div class="why_we_item">
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