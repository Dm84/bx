<?php $about_link = SITE_DIR.'company/'; ?>
<section class="main_about">
	<div class="center clearfix">
		<div class="main_about_left">
			<div class="bls_left_header">В поездку с <a href="<?php echo $about_link; ?>">надежной турфирмой</a></div>
			<ul class="left_payment">
				<li>
					<img src="<?php echo SITE_TEMPLATE_PATH; ?>/img/visa.png" alt="">
				</li>
				<li>
					<img src="<?php echo SITE_TEMPLATE_PATH; ?>/img/mastercard.png" alt="">
				</li>
				<li>
					<img src="<?php echo SITE_TEMPLATE_PATH; ?>/img/uniteller.png" alt="">
				</li>
			</ul>
			<div class="main_about_tx">
				<?php 
					$APPLICATION->IncludeFile("include_areas/main_about.html", 
						array('comp' => $component),
						array(
							'NAME' => 'Текст о компании',
							'SHOW_BORDER' => true,
							'MODE' => 'html'
					)); 
				?>				
				<a href="<?php echo $about_link; ?>" class="link_but">Читать полностью</a>
			</div>
			<?php 
				$APPLICATION->IncludeFile("include_areas/main_about_image.html", 
					array('comp' => $component), 
					array(
						'NAME' => 'Фотография сотрудников',
						'SHOW_BORDER' => true,
						'MODE' => 'html'
				)); 
			?>

		</div>
		<?php 
			$APPLICATION->IncludeFile("include_areas/main_news_area.php", 
				array('comp' => $component),
				array(
					'NAME' => 'Новости',
					'SHOW_BORDER' => false,
					'MODE' => 'html'
			)); 
		?>
		<?php 
			$APPLICATION->IncludeFile("include_areas/main_socials_area.php", 
				array('comp' => $component), 
				array(
					'NAME' => 'Соцсети',
					'SHOW_BORDER' => false,
					'MODE' => 'html'
			)); 
		?>		
	</div>
</section>
