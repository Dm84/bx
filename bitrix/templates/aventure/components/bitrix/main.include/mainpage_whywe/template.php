<section class="why_we">	
	<div class="center">
		<div class="bls_centered_header">Почему <a href="/company/">мы</a>?</div>
		<div class="bls_container">			
			<div class="why_we_item">
				<div class="why_item_count">
					<span class="count">
						<?php 
							$APPLICATION->IncludeFile("include_areas/mainpage_why_years.html", array(), array(
									'SHOW_BORDER' => false,
									'MODE' => 'text'
							)); 
						?>
					</span> 
					<?php 
						$APPLICATION->IncludeFile("include_areas/mainpage_why_exp.html", array(), array(
								'SHOW_BORDER' => true,
								'MODE' => 'text'
						)); 
					?>
				</div>				
				<?php 
					$APPLICATION->IncludeFile("include_areas/mainpage_why_pre.html", array(), array(
							'SHOW_BORDER' => true,
							'MODE' => 'html'
					)); 
				?>				
			</div>
			<div class="why_we_item">
				<div class="why_item_count"><span class="count">15</span> тысяч туристов</div>
				<p>Все они доверяют нам свой отдых, будучи уверенным в том, что мы точно знаем, что нужно каждому из них.</p>
			</div>
			<div class="why_we_item">
				<div class="why_item_count"><span class="count">20</span> сотрудников</div>
				<p>Будьте уверены, что  обратившись к нам вы получите в  распоряжение персонального менеджера, который подберет для вас наилучший вариант отдыха и подскажет, как сэкономить деньги.</p>
			</div>
			<div class="why_we_item">
				<div class="why_item_count"><span class="count">75</span> партнеров</div>
				<p>Мы работаем с десятками туроператоров федерального уровня, что позволяет нам предложить вам широчайший выбор направлений и сформировать уникальный тур.</p>
			</div>
		</div>
	</div>
</section>