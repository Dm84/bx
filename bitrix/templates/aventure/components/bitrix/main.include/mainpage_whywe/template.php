<section class="why_we">	
	<div class="center">
		<div class="bls_centered_header">������ <a href="/company/">��</a>?</div>
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
				<div class="why_item_count"><span class="count">15</span> ����� ��������</div>
				<p>��� ��� �������� ��� ���� �����, ������ ��������� � ���, ��� �� ����� �����, ��� ����� ������� �� ���.</p>
			</div>
			<div class="why_we_item">
				<div class="why_item_count"><span class="count">20</span> �����������</div>
				<p>������ �������, ���  ����������� � ��� �� �������� �  ������������ ������������� ���������, ������� �������� ��� ��� ��������� ������� ������ � ���������, ��� ���������� ������.</p>
			</div>
			<div class="why_we_item">
				<div class="why_item_count"><span class="count">75</span> ���������</div>
				<p>�� �������� � ��������� ������������� ������������ ������, ��� ��������� ��� ���������� ��� ���������� ����� ����������� � ������������ ���������� ���.</p>
			</div>
		</div>
	</div>
</section>