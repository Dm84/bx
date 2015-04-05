<?php 

	
	
?>
<div class="bl_services_countries">
	<ul>
		<?php foreach ($arResult['rows'] as $item): 
			
			$url = str_replace('#ID#', $item['ID'], $arParams['DETAIL_URL']);
		?>		
		<li>
			<a href="<?php echo $url; ?>">
				<?php echo $item['UF_FLAG']; ?>
				<span><?php echo $item['UF_NAME']; ?></span>
			</a>
		</li>
		<?php endforeach; ?>
		<li>
			<a href="<?php echo $arParams['VARIABLES']['SECTION_URL']; ?>">				
				<span>Показать все</span>
			</a>
		</li>		
	</ul>
</div>
