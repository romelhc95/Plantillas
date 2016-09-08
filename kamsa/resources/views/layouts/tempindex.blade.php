<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Template Recuperaciones & Abogados Kamsa">
	<title>Recuperaciones &amp; Abogados Kamsa</title> 
	<!--Estilos-->
	{!! Html::style('css/bootstrap.min.css') !!}
	{!! Html::style('css/prettyPhoto.css') !!}
	{!! Html::style('css/font-awesome.min.css') !!}
	{!! Html::style('css/animate.css') !!}
	{!! Html::style('css/main.css') !!}
	{!! Html::style('css/responsive.css') !!}
	<!--/Estilos-->
	<!--Icons-->
	<link rel="shortcut icon" href="images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<!--/Icons-->
</head><!--/head-->

<script style="type/script">
    function mostrar(enla , etik) { 
      obj = document.getElementById(etik); 
        obj.style.display = (obj.style.display == 'block') ? 'none' : 'block'; 
      enla.innerHTML = (enla.innerHTML == 'Leer Menos') ? 'Leer Más' : 'Leer Menos'; 
    }  
</script>
<body>
	<div class="preloader">
		<div class="preloder-wrap">
			<div class="preloder-inner"> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div> 
				<div class="ball"></div>
			</div>
		</div>
	</div><!--/.preloader-->
	<header id="navigation"> 
		<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
			<div class="container"> 
				<div class="navbar-header"> 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
						<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
					</button> 
					<a class="navbar-brand" href="{{ URL::to('/') }}"><h1><img src="images/logo/logowhite260px.png" alt="logo"></h1></a> 
				</div> 
				<div class="collapse navbar-collapse"> 
					<ul class="nav navbar-nav navbar-right"> 
						<li class="scroll active"><a href="#navigation">Inicio</a></li> 
						<li class="scroll"><a href="#about-us">Nosotros</a></li> 
						<li class="scroll"><a href="#services">Servicios</a></li> 
						<li class="scroll"><a href="#our-team">Nuestros Clientes</a></li> 
						<li class="scroll"><a href="#contact">Contáctanos</a></li> 
						<li><a href="{{ URL::to('/') }}">Intranet</a></li> 
					</ul> 
				</div> 
			</div> 
		</div><!--/navbar--> 
	</header> <!--/#navigation--> 

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(images/slider/slide1.png)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">'Kamsa' Recuperaciones &amp; Abogados</h2> 
							<p class="animated bounceInUp" style="color:black; font-size:30px;">Asesoramiento en: Recuperación y Cartera Morosa</p>
							<a class="btn btn-default slider-btn animated fadeIn" href="#about-us">Empezar</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(images/slider/slide2.jpg)"> 
					<div class="carousel-caption"> <div> 
						<h2 class="heading animated bounceInDown">'Kamsa' Recuperaciones &amp; Abogados</h2> 
						<p class="animated bounceInUp" style="color:black; font-size:30px;">Asesoramiento en: Recuperación y Cartera Morosa</p>
						<a class="btn btn-default slider-btn animated fadeIn" href="#about-us">Empezar</a> 
					</div> 
				</div> 
			</div> 
			<div class="item" style="background-image: url(images/slider/slide3.png)"> 
				<div class="carousel-caption"> 
					<div> 
						<h2 class="heading animated bounceInRight">'Kamsa' Recuperaciones &amp; Abogados</h2> 
						<p class="animated bounceInLeft" style="color:black; font-size:30px;">Asesoramiento en: Recuperación y Cartera Morosa</p>
						<a class="btn btn-default slider-btn animated fadeIn" href="#about-us">Empezar</a> 
					</div> 
				</div> 
			</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">¿Quienes Somos?</h2>
				<p style="text-align:center;">Somos una empresa ejecutora de recuperaciones con amplia experiencia en el área de cobranza en el ámbito empresarial esta integrado por técnicos y profesionales de gran trayectoria en materia jurídica, conciliatoria, administrativa, financiera, y sistemas, que se unen para ofrecer un servicio de alta calidad vinculado a la gestión de cobranzas y demás servicios empresariales. <br>
				A través de nuestro servicio con honestidad y eficiencia, brindamos a nuestros clientes soluciones integrales a medida y con un valor agregado, permitiéndole de esta forma llevar adelante sus asuntos con la mejor estrategia legal.</p>
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-6">
					<h3>¿Quienes Somos?</h3>
					<ul class="nav nav-tabs">
						<li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-info"></i> Información</a></li>
						<li><a href="#mission" data-toggle="tab"><i class="fa fa-cogs"></i> Misión</a></li>
						<li><a href="#vission" data-toggle="tab"><i class="fa fa-eye"></i> Visión</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/about.png" style="background-color:#FFFFFF" alt="about us"> 
								<div class="media-body">
									<p style="text-align:justify;">Somos una empresa ejecutora de recuperaciones con amplia experiencia en el área de cobranza en el ámbito empresarial esta integrado por técnicos y profesionales de gran trayectoria en materia jurídica, conciliatoria, administrativa, financiera, y sistemas, que se unen para ofrecer un servicio de alta calidad vinculado a la gestión de cobranzas y demás servicios empresariales.
									A través de nuestro servicio con honestidad y eficiencia, brindamos a nuestros clientes soluciones integrales a medida y con un valor agregado, permitiéndole de esta forma llevar adelante sus asuntos con la mejor estrategia legal.</p>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="mission">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/mission.png" style="background-color:#FFFFFF" alt="Mission"> 
								<div class="media-body">
									<p style="text-align:justify;">Somos una organización de técnicos y profesionales especialistas en la recuperación de créditos otorgado en estado de morosidad, estableciendo su normalización, regularización y fidelización, a través de herramientas estratégicas contextualizadas y oportunas ejerciendo en forma efectiva nuestra labor y dedicada a la atención, gestión saneamiento de su cartera y servicio de asesoría y consultoría. Nuestra presencia en el mercado se basa en optimizar y mejorar los servicios de la gestión, administracion y recuperación de cobranza de distintos instrumentos. </p>
									<div id="oculto" style="display:none; text-align:justify;"><p>Consecuencia de ello iniciamos una propuesta alternativa, seria, técnica y profesional con el objetivo de brindar soluciones confiables a la empresa, proponiendo como eje central del sistema, la eliminación de las distorsiones existentes en el proceso de recolección de pagos y gestión en las demoras de tales conceptos que afectan su economía.</p></div>
									<a href="#" onclick="mostrar(this,'oculto'); return false">Leer Más</a>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="vission">
							<div class="media">
								<img class="pull-left media-object" src="images/about-us/vission.png" style="background-color:#FFFFFF" alt="Vission"> 
								<div class="media-body">
									<p style="text-align:justify;">Ser la mejor empresa de cobranza especializada en recuperaciones para ello contamos con los mejores profesionales y el soporte tecnológico para optimizar la recuperación de créditos otorgados en estado de morosidad bajo la aplicación de estrategias de gestión y negociación efectivas hacia la fidelización del cliente. </p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<h3>Ventajas &amp; Beneficios</h3>
                     <ul type="circle" style="font-size:16px">
                     <br><br>
					    <li>Reducción de costos, planillas, recursos humanos.</li>
					    <br>
					    <li>Puede tener más tiempo para planificar y hacer negocio.</li>
					    <br>
					    <li>No distraer el objetivo o fin principal del negocio.</li>
					    <br>
					    <li>Accede a nuevas tecnologías y especialidades.</li>
					    <br>
					    <li>No es intermediación laboral por lo tanto no esta sujeto al registro del Ministerio de Trabajo.</li>
					</ul>
                </div>
            </div>
        </div>
    </div>
</section><!--/#about-us-->

<section id="services" class="parallax-section">
    <div class="container">
    	<div class="row text-center">
    	    <div class="col-sm-8 col-sm-offset-2">
    	        <h2 class="title-one">Servicios</h2>
            </div>
        </div>
        <div class="row">
				<div class="col-sm-12">
					<div class="our-service">
						<div class="services row">
							<div class="col-sm-3">
								<div class="single-service">
									<i class="fa fa-book"></i>
									<h2>Cobranza Preventiva</h2>
									<p>Nuestro servicio se orienta en prevenir el incumplimiento de pago de los deudores mediante contactos telefónicos y postales tratando en todo momento que los pagos se anticipen a los plazos de vencimiento.</p>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-service">
									<i class="fa fa-briefcase"></i>
									<h2>Cobranza Pre Judicial</h2>
									<p>La diversificación en nuestra gestión nos permite agilizar el proceso. Nuestros agentes de negocios y ejecutivos de cuenta a través del contacto telefónico y visitas domiciliarias, ofrecen una</p><div id="oculto2" style="display:none; text-align:justify;"><p>variedad de soluciones y alternativas tales como: Cancelaciones, amortizaciones, compromisos de pago, convenios, refinanciamientos y otros, de acuerdo a las políticas propuestas por nuestros clientes. Teniendo como objetivo la reducción y la contención de la morosiddad, tratando de evitar los gastos judiciales.</p></div>     
									<a href="#" onclick="mostrar(this,'oculto2'); return false">Leer Más</a>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-service">
									<i class="fa fa-legal"></i>
									<h2>Cobranza Judicial</h2>
									<p>Previa a nuestra calificación y autorización de nuestros clientes se inicia la fase judicial que comtempla las acciones legales por la via procesal, ejecutandolas medidas correspondientes de <p><div id="oculto3" style="display:none; text-align:justify;"><p>acuerdo al marco legal vigente.
									Nuestro staff de abogados y especialistas, garantizan una efectiva recuperación en esta etapa, manteniendo siempre abierta la opción de negociación y solución de la deuda.</p></div>
									<a href="#" onclick="mostrar(this,'oculto3'); return false">Leer Más</a>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="single-service">
									<i class="fa fa-flag"></i>
									<h2>Cobranza Terminal</h2>
									<p>Última instancia en el proceso que permite recuperar en definitiva el capital. Es preciso indicar que se aplica sobre todas las carteras que  prescribieron o sobre aquellas que no calificaron en la fase<p><div id="oculto4" style="display:none; text-align:justify;"><p>judicial. Esta fase tiene un plan de propuesta y negociación especial acorde a la naturaleza de cada cartera nuestra mística y conocimiento del negocio persiste hasta lograr el objetivo y metas proyectadas.</p></div>
									<a href="#" onclick="mostrar(this,'oculto4'); return false">Leer Más</a>
								</div>
							</div>
                		</div>
                	</div>
                </div>
            </div>
        </div>
</section><!--/#service-->

<section id="our-team">
			<div class="container">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">Nuestros Clientes</h2>
						<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
					</div>
				</div>
				<div>
				    <div class="row item active">
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-clients/efectiva.png" alt="Financiera Efectiva" />
                                <h4>Financiera Efectiva S.A</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="{{ Url::to('http://www.efectiva.com.pe/') }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="{{ Url::to('https://www.facebook.com/Financiera-Efectiva-1511160189197426') }}" target="_blank" ><i class="fa fa-facebook"></i></a>
                                    <a href="{{Url::to('https://www.linkedin.com/company/financiera-efectiva-s.a') }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <img src="images/our-clients/efe.png" alt="EFE" />
                                <h4>Tiendas EFE S.A.</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="{{ Url::to('http://www.efe.com.pe') }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="{{ Url::to('https://www.facebook.com/tiendasefe') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ Url::to('https://twitter.com/efepruiz') }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="{{ Url::to('https://www.linkedin.com/company/tiendas-efe-s.a.') }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                                <br><br>
                                <img src="images/our-clients/lacuracao.png" alt="La Curacao" />
                                <br><br>
                                <h4>Tiendas La Curacao</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="{{ Url::to('http://lacuracaoperu.com/') }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="{{ Url::to('https://www.facebook.com/LaCuracaoPeru/?fref=nf') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ Url::to('https://twitter.com/LaCuracaoPeru') }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="single-member">
                               <br><br><br>
                                <img src="images/our-clients/motocorp.png" alt="Motocorp" />
                                <br><br><br>
                                <h4>Motocorp</h4>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
                                <div class="socials">
                                    <a href="{{ Url::to('http://www.motocorp.pe/') }}" target="_blank"><i class="fa fa-globe"></i></a>
                                    <a href="{{ Url::to('https://www.facebook.com/motocorpoficial') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="{{ Url::to('https://twitter.com/heromotocorp') }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="{{ Url::to('https://www.linkedin.com/company/heromotocorp') }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</section><!--/#Our-Team-->

<section id="contact">
    <div class="container">
        <div class="row text-center clearfix">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="contact-heading">
                    <h2 class="title-one">Contáctanos</h2>
                    <p>Contáctanos en nuestras oficinas o consulta tus dudas a través de correo electrónico.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact-details">
            <div class="pattern"></div>
            <div class="row text-center clearfix">
                <div class="col-sm-6">
                    <div class="contact-address"><address><p><span>Kamsa</span></p><i class="fa fa-home"></i>&nbsp;<strong>Oficina principal:<br>Calle San Martín 1094 - 2do piso<br>Sullana.</strong></address>
                      <address><i class="fa fa-sitemap"></i>&nbsp;<strong>Sucursales en:<br>Paita, Piura, Chiclayo y Sullana.</strong></address>
                       <address><i class="fa fa-rss-square"></i>&nbsp;<strong>Sucursales Satelitales:<br>Tambogrante, Talara y Lambayeque.</strong></address>
                        <phone><i class="fa fa-phone"></i>&nbsp;<strong>073 615916 <br><i class="fa fa-phone"></i>&nbsp;+51 956689686</strong></phone>
                    </div>
                </div>
                <div class="col-sm-6"> 
                    <div id="contact-form-section">
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control name-field" required="required" placeholder="Tu Nombre"></div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control mail-field" required="required" placeholder="Tu Correo">
                                </div> 
                                <div class="form-group">
                                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Mensaje"></textarea>
                                </div> 
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section> <!--/#contact--> 

<footer id="footer"> 
		<div class="container"> 
			<div class="text-center"> 
				<p>Copyright &copy; 2016 - Recuperaciones &amp; Abogados Kamsa | All Rights Reserved</p> 
			</div> 
		</div> 
	</footer> <!--/#footer--> 
	
	{!! Html::script('js/jquery.js') !!}
	{!! Html::script('js/jquery.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	{!! Html::script('js/main.js') !!}
	{!! Html::script('js/jquery.parallax.js') !!}
	{!! Html::script('js/jquery.prettyPhoto.js') !!}
	{!! Html::script('js/jquery.isotope.min.js') !!}
	{-- Html::script('js/dropdown.js') --}

</body>
</html>