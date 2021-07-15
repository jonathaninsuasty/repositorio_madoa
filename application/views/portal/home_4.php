<!DOCTYPE html>
<html>
	<head>
		<title>Repositorio MADOA</title>
		<!--meta-->
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
		<meta name="format-detection" content="telephone=no" />
		<meta name="keywords" content="Medic, Medical Center" />
		<meta name="description" content="Responsive Medical Health Template" />
		<!--style-->
		<link href='//fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/superfish.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/prettyPhoto.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/jquery.qtip.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/menu_styles.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/animations.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/responsive.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>res/style/odometer-theme-default.css">
		<!--<link rel="stylesheet" type="text/css" href="style/dark_skin.css">-->
		<!--<link rel="stylesheet" type="text/css" href="style/high_contrast_skin.css">-->
		<link rel="shortcut icon" href="<?php echo base_url() ?><?php echo base_url() ?>res/images/favicon.ico">
	</head>

	<body>
		<div class="site_container">
			
			<div class="header_top_bar_container clearfix">
				<div class="header_top_bar">
					<form class="search" action="#" method="get">
						<input type="text" name="s" placeholder="Buscar" value="Buscar" class="search_input hint">
						<input type="submit" class="search_submit" value="">
					</form>

					<ul class="social_icons clearfix">
						<li>
							<a href="mailto:contact@pressroom.com" class="social_icon mail" title="mail">
								&nbsp;
							</a>
						</li>
					</ul>
					<div class="latest_news_scrolling_list_container">
						<ul>
							<li class="category">Ultimas publicaciones</li>
							<li class="left"><a href="#"></a></li>
							<li class="right"><a href="#"></a></li>
							<li class="posts">
								<ul class="latest_news_scrolling_list">
									<li>
										<a href="<?php echo base_url().'portal/post/1' ?>" title="">Línea de tiempo – La violencia en Colombia</a>
									</li>
									<li>
										<a href="<?php echo base_url().'portal/post/1' ?>" title="">Línea de tiempo – La violencia en Colombia</a>
									</li>
									<li>
										<a href="<?php echo base_url().'portal/post/1' ?>" title="">Línea de tiempo – La violencia en Colombia</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>

			<div class="header_container">
				<div class="header clearfix">
					<div class="logo">
						<h1><a href="<?php echo base_url().'portal' ?>">Repositorio institucional MADOA</a></h1>
						<h4>OBJETOS VIRTUALES DE APRENDIZAJE</h4>
					</div>
					<div class="placeholder">728 x 90</div>
				</div>
			</div>

			<div class="menu_container clearfix">
				<nav>
				<ul class="sf-menu">
					<li class="selected">
						<a href="#" title="Inicio">
							Inicio
						</a>
					</li>
					<li>
						<a href="<?php echo base_url().'portal/ovalist' ?>" title="Todos los OVAs">
							Listado completo de OVA's
						</a>
					</li>
					<li class="submenu">
						<a href="#" title="Pages">
							Áreas del conocimiento
						</a>
						<ul>
							<?php foreach ($areas as $area): ?>
							<li>
								<a href="<?php echo base_url().'portal/ovalist/area/'.$area['idarea'] ?>">
									<?php echo $area['descarea']; ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					</li>
					<li class="submenu">
						<a href="#">
							Nivel académico
						</a>
						<ul>
							<?php foreach ($niveles as $nivel): ?>
							<li>
								<a href="<?php echo base_url().'portal/ovalist/nivel/'.$nivel['idnivel'] ?>">
									<?php echo $nivel['descnivel']; ?>
								</a>
							</li>
							<?php endforeach; ?>
						</ul>
					</li>
				</ul>
				</nav>
			</div>			
			<div class="page">
				<div class="page_layout clearfix">
					<div class="row page_margin_top">
						<div class="column column_2_3">
							<div class="caroufredsel_wrapper caroufredsel_wrapper_small_slider">
								<ul class="small_slider id-small_slider">
									<li class="slide">
										<a href="<?php echo base_url().'portal/post/1' ?>">
											<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
										</a>
										<div class="slider_content_box">
											<ul class="post_details simple">
												<li class="category"><a href="#" title="SOCIALES Y CIUDADANAS">SOCIALES Y CIUDADANAS</a></li>
												<li class="date">
													Feb 02
												</li>
											</ul>
											<h2><a href="<?php echo base_url().'portal/post/1' ?>" title="Línea de tiempo del periodo de la violencia">Línea de tiempo – La violencia en Colombia</a></h2>
											<p class="clearfix">Violencia bipartidista (época de la Violencia hasta el Frente Nacional).</p>
										</div>
									</li>
									<li class="slide">
										<a href="<?php echo base_url().'portal/post/1' ?>">
											<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
										</a>
										<div class="slider_content_box">
											<ul class="post_details simple">
												<li class="category"><a href="#" title="SOCIALES Y CIUDADANAS">SOCIALES Y CIUDADANAS</a></li>
												<li class="date">
													Feb 02
												</li>
											</ul>
											<h2><a href="<?php echo base_url().'portal/post/1' ?>" title="Línea de tiempo del periodo de la violencia">Línea de tiempo – La violencia en Colombia</a></h2>
											<p class="clearfix">Violencia bipartidista (época de la Violencia hasta el Frente Nacional).</p>
										</div>
									</li>
									<li class="slide">
										<a href="<?php echo base_url().'portal/post/1' ?>">
											<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
										</a>
										<div class="slider_content_box">
											<ul class="post_details simple">
												<li class="category"><a href="#" title="SOCIALES Y CIUDADANAS">SOCIALES Y CIUDADANAS</a></li>
												<li class="date">
													Feb 02
												</li>
											</ul>
											<h2><a href="<?php echo base_url().'portal/post/1' ?>" title="Línea de tiempo del periodo de la violencia">Línea de tiempo – La violencia en Colombia</a></h2>
											<p class="clearfix">Violencia bipartidista (época de la Violencia hasta el Frente Nacional).</p>
										</div>
									</li>
									<li class="slide">
										<a href="<?php echo base_url().'portal/post/1' ?>">
											<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
										</a>
										<div class="slider_content_box">
											<ul class="post_details simple">
												<li class="category"><a href="#" title="SOCIALES Y CIUDADANAS">SOCIALES Y CIUDADANAS</a></li>
												<li class="date">
													Feb 02
												</li>
											</ul>
											<h2><a href="<?php echo base_url().'portal/post/1' ?>" title="Línea de tiempo del periodo de la violencia">Línea de tiempo – La violencia en Colombia</a></h2>
											<p class="clearfix">Violencia bipartidista (época de la Violencia hasta el Frente Nacional).</p>
										</div>
									</li>
								</ul>
							</div>
							<div id="small_slider" class='slider_posts_list_container small'>
							</div>
							
						</div>
						<div class="column column_1_3">
							<div class="tabs no_scroll clearfix">
								<ul class="tabs_navigation clearfix">
									<li>
										<a href="#sidebar-most-read" title="Most Read">
											Mas leído
										</a>
										<span></span>
									</li>
									<li>
										<a href="#sidebar-most-commented" title="Commented">
											Más comentado
										</a>
										<span></span>
									</li>
								</ul>
								<div id="sidebar-most-read">
									<ul class="blog rating page_margin_top clearfix">
										<li class="post">
											<a href="<?php echo base_url().'portal/post/1' ?>" title="Nuclear Fusion Closer to Becoming a Reality">
												<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
											</a>
											<div class="post_content">
												<span class="number animated_element" data-value="26"></span>
												<h5><a href="<?php echo base_url().'portal/post/1' ?>">Línea de tiempo – La violencia en Colombia</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="#">SOCIALES Y CIUDADANAS</a></li>
												</ul>
											</div>
										</li>
					
									</ul>
								</div>
								<div id="sidebar-most-commented">
									<ul class="blog rating page_margin_top clearfix">
										<li class="post">
											<a href="<?php echo base_url().'portal/post/1' ?>" title="Nuclear Fusion Closer to Becoming a Reality">
												<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
											</a>
											<div class="post_content">
												<span class="number animated_element" data-value="0"></span>
												<h5><a href="<?php echo base_url().'portal/post/1' ?>">Línea de tiempo – La violencia en Colombia</a></h5>
												<ul class="post_details simple">
													<li class="category"><a href="#">SOCIALES Y CIUDADANAS</a></li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<h4 class="box_header page_margin_top_section">Recomendación</h4>
							<ul class="blog small clearfix">
								<li class="post">
									<a href="<?php echo base_url().'portal/post/1' ?>" title="Study Linking Illnes and Salt Leaves Researchers Doubtful">
										<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' style="width: 100px; height: 100px;">
									</a>
									<div class="post_content">
										<h5>
											<a href="<?php echo base_url().'portal/post/1' ?>">Línea de tiempo – La violencia en Colombia</a>
										</h5>
										<ul class="post_details simple">
											<li class="category"><a href="#">SOCIALES Y CIUDADANAS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</div>
								</li>
							</ul>
						
						</div>
					</div>

					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Sociales y ciudadanas</h4>
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
									<li class="post">
										<a href="<?php echo base_url().'portal/post/1' ?>">
											<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' style="width: 320; height:242;">
										</a>
										<h5><a href="<?php echo base_url().'portal/post/1' ?>">Línea de tiempo – La violencia en Colombia</a></h5>
										<ul class="post_details simple">
											<li class="category"><a href="#">SOCIALES Y CIUDADANAS</a></li>
											<li class="date">
												10:11 PM, Feb 02
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Lectura crítica</h4>
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								</ul>
							</div>
						</div>
					</div>

					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Matemáticas</h4>
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								</ul>
							</div>
						</div>
					</div>

					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Inglés</h4>
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								</ul>
							</div>
						</div>
					</div>

					<div class="row page_margin_top_section">
						<div class="column column_1_1">
							<h4 class="box_header">Ciencias naturales</h4>
							<div class="horizontal_carousel_container page_margin_top">
								<ul class="blog horizontal_carousel autoplay-1 visible-4 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
								</ul>
							</div>
						</div>
					</div>


				</div>
			</div>
			<div class="footer_container">
				<div class="footer clearfix">
					
					<div class="row copyright_row">
						<div class="column column_2_3">
							© Copyright <a href="https://www.udenar.edu.co" target="_blank">Universidad de Nariño</a>
						</div>
						<div class="column column_1_3">
							<ul class="footer_menu">
								<li>
									<h6><a class="scroll_top" href="#top" title="Scroll to top">Top</a></h6>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="background_overlay"></div>
		<!--js-->
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery-1.12.4.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery-migrate-1.4.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.ba-bbq.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery-ui-1.11.1.custom.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.carouFredSel-6.2.1-packed.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.touchSwipe.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.transit.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.sliderControl.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.timeago.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.hint.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.qtip.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/jquery.blockUI.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/main.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>res/js/odometer.min.js"></script>
	</body>
</html>