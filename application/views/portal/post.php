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
		<link rel="shortcut icon" href="<?php echo base_url() ?>res/images/favicon.ico">
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
						<a href="<?php echo base_url().'portal'?>"  title="Inicio">
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
				<div class="page_layout page_margin_top clearfix">
					<div class="row page_margin_top">
						<div class="column column_1_1">
							
						</div>
					</div>
					<hr class="divider page_margin_top">
					<div class="row page_margin_top">
						<div class="column column_2_3">
							<div class="row">
								<div class="post single">
									<h1 class="post_title">
										Línea de tiempo – La violencia en Colombia
									</h1>
									<ul class="post_details clearfix">
										<li class="detail category">En <a href="#" >Sociales y ciudadanas</a></li>
										<li class="detail date">Feb 2</li>
										<li class="detail author">Por <a href="#" >Diana Castrillon, Jonathan Insuasty</a></li>
										<li class="detail views">26 Visitas</li>
										<li class="detail comments"><a href="#comments_list" class="scroll_to_comments">0 Comentarios</a></li>
									</ul>
									<a href="<?php echo base_url() ?>res/images/samples/violencia.jpg" class="post_image page_margin_top prettyPhoto" title="Britons are never more comfortable than when talking about the weather.">
										<img src='<?php echo base_url() ?>res/images/samples/violencia.jpg' alt='img'>
									</a>
									<div class="sentence">
										<span class="text" style="font-size: 15px;">Violencia bipartidista (época de la Violencia hasta el Frente Nacional).</span>
										<!--<span class="author">.</span><br><br><br><span class="text">Califica: </span>
										<img src="<?php //echo base_url() ?>res/images/samples/stars.jpg" style="width: 200px;">-->
									</div><br><br>
									<div class="row" style="color: black; font-size: 15px;">
										<div class="col-md-4">Version:<span style="margin-left: 100px;">0.1</span></div><br>
										<div class="col-md-4">Nivel académico:<span style="margin-left: 40px;">Media</span></div><br>
										<div class="col-md-4">Grado:<span style="margin-left: 107px;">10</span></div><br>
										<div class="col-md-4">Edad:<span style="margin-left: 114px;">15-17</span></div><br>
										<div class="col-md-4">Idioma:<span style="margin-left: 105px;">Español</span></div><br>
										<div class="col-md-4">Competencia:<span style="margin-left: 60px;">Pensamiento Social</span></div><br>
										<div class="col-md-4">Componente:<span style="margin-left: 63px;">Sociales y ciudadanas</span></div><br>
										<div class="col-md-4">Estándar:<span style="margin-left: 90px;">Analizo el período conocido como "la Violencia" y establezco relaciones con las formas actuales de violencia.</span></div><br>
										<div class="col-md-4">Instrucciones:<span style="margin-left: 63px;">Descomprimir y dar doble click en index.html de la raíz del directorio.</span></div><br>
										<div class="col-md-4">Palabras clave:<span style="margin-left: 53px;">Violencia bipartidista, Línea de tiempo, Sociales, Partidos tradicionales, Partido Liberal, Partido Conservador</span></div><br>
									</div><br><br>
									<div>
										<a href="<?php echo base_url().'ovas/ova_violencia_colombia.zip' ?>"><input type="submit" value="DESCARGAR OVA" class="more active"></a>
									</div>
									<div class="post_content page_margin_top_section clearfix">
										<div class="content_box">
											
											<div class="text">
												
												<div>
													<form style="color: black; width: 100%;">
														<table style="border-collapse: collapse; border: 1px solid black;">

															<tr>
																<td><strong>CALIFIQUE DE 1 A 5 LAS SIGUIENTES PREGUNTAS</strong></td>
																<td style="text-align: center"><strong>1</strong></td>
																<td style="text-align: center"><strong>2</strong></td>
																<td style="text-align: center"><strong>3</strong></td>
																<td style="text-align: center"><strong>4</strong></td>
																<td style="text-align: center"><strong>5</strong></td>
															</tr>
															<tr>
																<td>¿Los contenidos teóricos son claros y fáciles de entender?</td>
																<td><input type="radio" name="q1"></td>
																<td><input type="radio" name="q1"></td>
																<td><input type="radio" name="q1"></td>
																<td><input type="radio" name="q1"></td>
																<td><input type="radio" name="q1"></td>
															</tr>
															<tr>
																<td>¿Los contenidos teóricos aportan información interesante?</td>
																<td><input type="radio" name="q2"></td>
																<td><input type="radio" name="q2"></td>
																<td><input type="radio" name="q2"></td>
																<td><input type="radio" name="q2"></td>
																<td><input type="radio" name="q2"></td>
															</tr>
															<tr>
																<td>¿Los contenidos teóricos responden a dudas y necesidades que tenía?</td>
																<td><input type="radio" name="q21"></td>
																<td><input type="radio" name="q21"></td>
																<td><input type="radio" name="q21"></td>
																<td><input type="radio" name="q21"></td>
																<td><input type="radio" name="q21"></td>
															</tr>
															<tr>
																<td>¿El volumen o cantidad de contenidos son adecuados?</td>
																<td><input type="radio" name="q3"></td>
																<td><input type="radio" name="q3"></td>
																<td><input type="radio" name="q3"></td>
																<td><input type="radio" name="q3"></td>
																<td><input type="radio" name="q3"></td>
															</tr>
															<tr>
																<td>¿Las actividades son útiles para reforzar los contenidos?</td>
																<td><input type="radio" name="q4"></td>
																<td><input type="radio" name="q4"></td>
																<td><input type="radio" name="q4"></td>
																<td><input type="radio" name="q4"></td>
																<td><input type="radio" name="q4"></td>
															</tr>
															<tr>
																<td>¿Las actividades son bastante variadas?</td>
																<td><input type="radio" name="q5"></td>
																<td><input type="radio" name="q5"></td>
																<td><input type="radio" name="q5"></td>
																<td><input type="radio" name="q5"></td>
																<td><input type="radio" name="q5"></td>
															</tr>
															<tr>
																<td>¿Los recursos multimedia (videos, imágenes, enlaces, etc.)  son  los  adecuados  para mostrar los contenidos?</td>
																<td><input type="radio" name="q6"></td>
																<td><input type="radio" name="q6"></td>
																<td><input type="radio" name="q6"></td>
																<td><input type="radio" name="q6"></td>
																<td><input type="radio" name="q6"></td>
															</tr>
															<tr>
																<td>¿Los recursos multimedia (videos, imágenes, enlaces, etc.)  me  han  ayudado  a entender mejor los contenidos?</td>
																<td><input type="radio" name="q7"></td>
																<td><input type="radio" name="q7"></td>
																<td><input type="radio" name="q7"></td>
																<td><input type="radio" name="q7"></td>
																<td><input type="radio" name="q7"></td>
															</tr>
															<tr>
																<td>¿Los recursos multimedia son accesibles y se visualizan correctamente?</td>
																<td><input type="radio" name="q8"></td>
																<td><input type="radio" name="q8"></td>
																<td><input type="radio" name="q8"></td>
																<td><input type="radio" name="q8"></td>
																<td><input type="radio" name="q8"></td>
															</tr>
															<tr>
																<td>¿La interfaz del OVA es sencilla de utilizar?</td>
																<td><input type="radio" name="q81"></td>
																<td><input type="radio" name="q81"></td>
																<td><input type="radio" name="q81"></td>
																<td><input type="radio" name="q81"></td>
																<td><input type="radio" name="q81"></td>
															</tr>
															<tr>
																<td>¿Los elementos gráficos (títulos, subtítulos, índices, iconos, etc.)  son  útiles  para orientarme mejor dentro de la interfaz del OVA?</td>
																<td><input type="radio" name="q9"></td>
																<td><input type="radio" name="q9"></td>
																<td><input type="radio" name="q9"></td>
																<td><input type="radio" name="q9"></td>
																<td><input type="radio" name="q9"></td>
															</tr>
															<tr>
																<td>Escribe un comentario o una sugerencia de mejora</td>
																<td colspan="5"><textarea style="background-color: white;"></textarea></td>
															</tr>


														</table><br>
														<input style="float: right;" type="submit" value="CALIFICAR" class="more active">
													</form>
												</div>
												
											</div>
										</div>
										<div class="author_box animated_element">
											<div class="author">
												<a href="#" class="thumb">
													<img alt="img" src="<?php echo base_url() ?>res/images/samples/100x100/avatar.png">
												</a>
												<div class="details">
													<h5><a href="#">Diana Castrillon, Jonathan Insuasty</a></h5>
													<h6>AUTOR</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							
							<div class="row page_margin_top_section">
								<h4 class="box_header">Deja un comentario</h4>
								<!--<p class="padding_top_30">Quedará registrado con tu nombre de usuario</p>-->
								<form class="comment_form margin_top_15" id="comment_form" method="post" action="<?php echo base_url().'portal/post/1' ?>">
									<fieldset>
										<textarea name="message" placeholder="Escribe aquí tu comentario"></textarea>
									</fieldset>
									<fieldset>
										<input type="submit" value="ENVIAR" class="more active">
										<a href="#cancel" id="cancel_comment" title="Cancel reply"></a>
									</fieldset>
								</form>
							</div>
							<div class="row page_margin_top_section">
								<h4 class="box_header">0 comentarios</h4>
								<ul id="comments_list">
				
								</ul>
								<ul class="pagination page_margin_top_section">
									<li class="left">
										<a href="#" title="">&nbsp;</a>
									</li>
									<li class="selected">
										<a href="#" title="">
											1
										</a>
									</li>
							
									<li class="right">
										<a href="#" title="">&nbsp;</a>
									</li>
								</ul>
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