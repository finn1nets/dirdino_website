<?php
/*
Template Name: contacts-page
*/
?>

<?php 
	get_header(); 
?>


	<body class="landing">

		
		<?php 
			require('_navigation.php'); 
		?>
	

		<!-- Main -->
			<section id="main">
				<div class="container">
					<header class="major">
						<h2>Наши контакты</h2>
					</header>
					<div class="row 200%">
						<div class="8u 12u$(medium) 12u$(small)">
							<iframe src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d5084.655701718856!2d30.449156!3d50.416363!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d50.416363!2d30.449156!5e0!3m2!1sru!2sua!4v1461003448224" width="100%" height="470" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>

						<div class="4u$ 12u$(medium) 12u$(small)">
							<ul class="labeled-icons contacts_page">
								<li>
									<h4 class="icon fa-envelope"><span class="label">E-mail</span></h4>
									<a href="mailto:info@dirdino.com.ua">info@dirdino.com.ua</a>
								</li>
								<li>
									<h4 class="icon fa-phone"><span class="label">Телефон</span></h4>
									<a href="tel:0444514856">(044) 451 48 56</a>
								</li>
								<li>
									<h4 class="icon fa-home"><span class="label">Адрес</span></h4>
										03151, г. Киев, Воздухофло́тский просп., 72, офис № 42
								</li>
								<li>
									<h4 class="icon fa-calendar-o"><span class="label">График работы:</span></h4>
									Работаем с 9:00 до 18:00 (суббота и воскресенье выходные)
								</li>
							</ul>
					
							<h5 class="follow_us_on_social">Присоединяйтесь к нам в соц.сетях</h5>

							<div class="social-buttons">
								<a href="#" class="social-button facebook">
									<i class="fa fa-facebook"></i></a>

								<a href="#" class="social-button vk">
									<i class="fa fa-vk"></i></a>	

								<a href="#" class="social-button skype">
									<i class="fa fa-skype"></i></a>
							</div>

						</div>


						<div class="12u form_contacts" id="contacts_form">
						
							<p>
								Заполните простую форму обратной связи и наши менеджеры свяжутся с Вами в ближайшее время.
							</p>

							<div class="row uniform 50%">
								<div class="4u 12u$(small)">
									<input type="text" name="name" id="name" value="" placeholder="Ваше имя">
								</div>
								

								<div class="4u 12u$(small)">
									<input type="email" name="email" id="email" value="" placeholder="Ваш E-Mail">
								</div>
								

								<div class="4u 12u$(small)">
									<input type="text" name="phone" id="phone" value="" placeholder="Ваш телефон">
								</div>

								<div class="12u">
									<textarea name="message" id="message" placeholder="Ваше сообщение" rows="7"></textarea>
 								</div>

 								<div class="12u$">
 									<ul class="actions" style="text-align: center;">
 										<li><input type="submit" value="Отправить" class="special submit_contacts_form"></li>
 									</ul>
 								</div>

							</div>
							
						</div>
					</div>
				</div>
			</section>


		<!-- Footer -->
			<div id="footer" class="-empty">
				<div class="copyright">
					Мастерская Дырдыно &copy; 2016
				</div>
			</div>
			
		<div id="loader"><!-- ama preloader--></div>
		
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/main.css">

		<!--[if lte IE 8]><script src="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/html5shiv.js"></script><![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/dist/js/concat.js"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/dist/css/ie/v8.css" /><![endif]-->

		<?php wp_footer(); ?>

	</body>
</html>