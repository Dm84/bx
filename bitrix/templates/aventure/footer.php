
			</div>
			<footer>
				<div id="map" class="footer_map">
					
				</div>
				<div class="footer_cont">
					<div class="center">
						<div class="footer_contacts">
							<div class="foot_contacts_item foot_contacts_red">
								<div class="foot_contacts_container">
									<div class="foot_contacts_header">1 &nbsp;Основной офис</div>
									<div class="foot_contacts_left">
										<p>ул. Курчатова, 16</p>
										<p>пн-пт 10:00-20:00<br>сб 11:00-15:00</p>
									</div>
									<div class="foot_contacts_right">
										<p>+7 (351) 235-12-35<br> +7 (351) 260-57-52</p>
										<p><a href="#">все контакты</a></p>
									</div>
								</div>
							</div>
							<div class="foot_contacts_item foot_contacts_yellow">
								<div class="foot_contacts_container">
									<div class="foot_contacts_header">2 Офис делового туризма</div>
									<div class="foot_contacts_left">
										<p>ул. Энгельса, 45</p>
										<p>пн-пт  10:00-19:00<br> сб  11:00-15:00</p>
									</div>
									<div class="foot_contacts_right">
										<p>+7 (351) 235-80-50<br> +7 (351) 235-80-51</p>
										<p><a href="#">все контакты</a></p>
									</div>
								</div>
							</div>
							<div class="foot_contacts_item foot_contacts_blue">
								<div class="foot_contacts_container">
									<div class="foot_contacts_header">3 Агенство coral travel</div>
									<div class="foot_contacts_left">
										<p>ул. Курчатова, 4</p>
										<p>пн-пт  10:00-19:00<br>сб  11:00-15:00</p>
									</div>
									<div class="foot_contacts_right">
										<p>+7 (351) 235-33-33<br> +7 (351) 237-77-78</p>
										<p><a href="#">все контакты</a></p>
									</div>
								</div>
							</div>
						</div>
						<nav class="footer_menu">
							<a href="#">О компании</a>
							<a href="#">Отзывы о нас</a>
							<a href="#">Акции</a>
							<a href="#">Блог о туризме</a>
							<a href="#">Агентствам</a>
							<a href="#">Контакты</a>
						</nav>
						<a href="#" class="link_dev">Разработка<br> и продвижение сайтов</a>
					</div>
				</div>
			</footer>
			<div id="form_send_review" class="popup_container" style="display: none;">
				<div class="popup_header">Оставить отзыв</div>
				<div class="form_review_top">
					<div class="form_review_left_col">
						<div class="form_pole_item">
							<p>Ваше имя</p>
							<input type="text" class="popup_input">
						</div>
					</div>
					<div class="form_review_left_right">
						<div class="form_pole_item row_pole_item">
							<p>Фамилия</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item row_pole_item">
							<p>Ваш пол</p>
							<div class="radiobuts">
								<div class="radiobutton">
									<input type="radio" id="a1" name="pol" checked>
									<label for="a1"><span></span>М</label>
								</div>
								<div class="radiobutton">
									<input type="radio" id="a2" name="pol">
									<label for="a2"><span></span>Ж</label>
								</div>
							</div>
						</div>
						<div class="form_pole_item row_pole_item">
							<p>Фото с вами</p>
							<label class="input_file">
								<input type="file">
								<span>Загрузить фото</span>
							</label>
						</div>
					</div>
				</div>
				<div class="form_review_middle">
					<div class="form_review_left_col">
						<div class="form_pole_item">
							<p>Страна посещения</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item">
							<p>Город (курорт)</p>
							<input type="text" class="popup_input">
						</div>
						<div class="form_pole_item">
							<p>Фото с отдыха</p>
							<label class="input_file">
								<input type="file">
								<span>Загрузить фото</span>
							</label>
						</div>
					</div>
					<div class="form_review_left_right">
						<div class="form_pole_item">
							<p>Текст вашего отзыва. Поделитесь с нами впечатлениями об отдыхе и сервисе.</p>
							<textarea class="popup_textarea"></textarea>
						</div>
					</div>
				</div>
				<div class="form_review_bottom">
					<div class="but_bottom">
						<input type="submit" value="Отправить отзыв" class="but">
					</div>
				</div>
			</div>
		</div>

	<!--[if lt IE 9]> 
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> 
	<![endif]-->
	
	<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
			
	<?php $APPLICATION->ShowHeadScripts();?>
	</body>
</html>
