<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Разработка чат-ботов, сайтов и веи-приложений" />
	<meta name="keywords" content="чат, бот, чат-бот, чат-боты, разработка, сайт, chatbot, chat, bot, chat-bot" />
    <meta name="author" content="">
	<meta name="yandex-verification" content="376485fb6c44da1d" />
	<meta name="google-site-verification" content="TMr4bvx95t2P0jzYfMOh_RD_h0nzMWLMPw0zCcl-lpU" />
	
	
    <title>Jackbot - чат-боты</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	
	<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
	<link rel="manifest" href="../img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<style>







header {
	position: relative;
}

header video {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	object-fit: fill;
	opacity : 0.3;
	
}

#about {
	position: relative;
}

#about video {
	position: absolute;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	object-fit: fill;
	opacity : 0.3;
	
}
select {
	
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  appearance: none;
  outline: 0;
  box-shadow: none;
  border: 0 !important;
  background: #6ed7ae;
  background-image: none;
}
/* Custom Select */
.select {
	font-weight: bold;
  position: relative;
  display: block;

  height: 3em;
  line-height: 3;
  background: #6ed7ae;
  overflow: hidden;
  border-radius: .25em;
}
select {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0 0 0 .5em;
  color: #fff;
  cursor: pointer;
}
select::-ms-expand {
  display: none;
}
/* Arrow */
.select::after {
	font-weight: bold;
  content: '\25BC';
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  padding: 0 1em;
  background: #09b282;
  pointer-events: none;
}
/* Transition */
.select:hover::after {
  color: #9AB999;
}
.select::after {
  -webkit-transition: .25s all ease;
  -o-transition: .25s all ease;
  transition: .25s all ease;
}


	</style>	

<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
				
				<img src="../img/logo.png" alt="" width="45px" height="45px" style="float: left; margin-right: 15px;">
                <a class="navbar-brand" href="http://jackbot.ru" style="font-family: 'Oleo Script Swash Caps', cursive; text-transform: capitalize;float: left;">JackBot</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Платформы</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">О нас</a>
                    </li>
					<li class="page-scroll">
                         <a href="#portfolioModal2" class="page-scroll" data-toggle="modal">Проекты</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Контакты</a>
                    </li>
					<li class="page-scroll">
                        <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">Для клиентов</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>




    <!-- Portfolio Grid Section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
				<img src="../img/strongman.jpg" alt="" style=" width: 230px;">
                    <h2 style="font-family: 'Lobster', cursive; text-transform: capitalize; color: #2c3e50; font-size: 50px;">Лифтёр</h2>
                    <hr class="star-primary">
                </div>
            </div>
			
            <div class="row">
            <div class="col-sm-4 card" >
			  <img class="card-img-top" src="../img/icon-lifter-1.jpg" alt="Card image cap">
			  
			  <div class="card-body" >
			  <form>
				<div style="text-align:center !important;"><h3 style="font-family: 'Lobster', cursive; text-transform: capitalize; font-size: 30px; color: #4aab96;">Жим лежа</h3></div>
				<p class="card-text">Введите максимальный вес, который вы можете пожать на <b>1 раз</b>.</p>
				<div class="select">
				<select name="slct" id="weigth">
                       <option>40</option><option>42,5</option><option>45</option><option>47,5</option><option>50</option><option>52,5</option><option>55</option><option>57,5</option><option>60</option><option>62,5</option><option>65</option><option>67,5</option><option>70</option><option>72,5</option><option>75</option><option>77,5</option><option>80</option><option>82,5</option><option>85</option><option>87,5</option><option>90</option><option>92,5</option><option>95</option><option>97,5</option><option>100</option><option>102,5</option><option>105</option><option>107,5</option><option>110</option><option>112,5</option><option>115</option><option>117,5</option><option>120</option><option>122,5</option><option>125</option><option>127,5</option><option>130</option><option>132,5</option><option>135</option><option>137,5</option><option>140</option><option>142,5</option><option>145</option><option>147,5</option><option>150</option><option>152,5</option><option>155</option><option>157,5</option><option>160</option><option>162,5</option><option>165</option><option>167,5</option><option>170</option><option>172,5</option><option>175</option><option>177,5</option><option>180</option>
				</select>
				</div>
				<br>
				<p class="card-text">Введите <b>количество дней в неделю</b>, которые вы можете посвятить тренировке данного упражнения.</p>
				<div class="select">
				<select name="slct" id="bench-days">
                      <option>1</option><option>2</option>
				</select>
				</div>
				<br>
				<div style="text-align:center;"><div onclick="benchpress()" class="btn btn-success" style="font-family: 'Lobster', cursive; width:200px; background-color: orange; border-color: orange; font-size:15px;">Рассчитать программу</div></div>
            </form>  

			<div id="benchpresscolumn"></div>

			
			  </div>
			  
			</div>
			
			
            <div class="col-sm-4 card" >
			  <img class="card-img-top" src="../img/icon-lifter-2.jpg" alt="Card image cap">
			  <div class="card-body">
			  <form>
				<div style="text-align:center !important;"><h3 style="font-family: 'Lobster', cursive; text-transform: capitalize; font-size: 30px; color: #4aab96;">Становая тяга</h3></div>
				<p class="card-text">Введите максимальный вес, который вы можете потянуть на <b>1 раз</b>.</p>
			<div class="select">
				<select name="slct" id="weigthleafts">
                       <option>40</option><option>42,5</option><option>45</option><option>47,5</option><option>50</option><option>52,5</option><option>55</option><option>57,5</option><option>60</option><option>62,5</option><option>65</option><option>67,5</option><option>70</option><option>72,5</option><option>75</option><option>77,5</option><option>80</option><option>82,5</option><option>85</option><option>87,5</option><option>90</option><option>92,5</option><option>95</option><option>97,5</option><option>100</option><option>102,5</option><option>105</option><option>107,5</option><option>110</option><option>112,5</option><option>115</option><option>117,5</option><option>120</option><option>122,5</option><option>125</option><option>127,5</option><option>130</option><option>132,5</option><option>135</option><option>137,5</option><option>140</option><option>142,5</option><option>145</option><option>147,5</option><option>150</option><option>152,5</option><option>155</option><option>157,5</option><option>160</option><option>162,5</option><option>165</option><option>167,5</option><option>170</option><option>172,5</option><option>175</option><option>177,5</option><option>180</option>
				</select>
				</div>
				<br>
				<p class="card-text">Введите <b>количество дней в неделю</b>, которые вы можете посвятить тренировке данного упражнения.</p>
				<div class="select">
				<select name="slct" id="slct">
					<option>1</option>
				</select>
				</div>
				<br>
				<div style="text-align:center;"><div onclick="deadleafts()" class="btn btn-success" style="font-family: 'Lobster', cursive; width:200px; background-color: orange; border-color: orange; font-size:15px;">Рассчитать программу</div></div>
            </form>  

			<div id="deadleaftscolumn"></div>

			
			  </div>
			  
			</div>
			
			
			
			
			
			
			
			
            <div class="col-sm-4 card" >
			  <img class="card-img-top" src="../img/icon-lifter-3.jpg" alt="Card image cap">
			  <div class="card-body">
			  <form>
				<div style="text-align:center !important;"><h3 style="font-family: 'Lobster', cursive; text-transform: capitalize; font-size: 30px; color: #4aab96;">Приседания</h3></div>
				<p class="card-text">Введите максимальный вес, с которым вы можете присесть <b>1 раз</b>.</p>
				<div class="select">
				<select name="slct" id="weigthsquats">
                       <option>40</option><option>42,5</option><option>45</option><option>47,5</option><option>50</option><option>52,5</option><option>55</option><option>57,5</option><option>60</option><option>62,5</option><option>65</option><option>67,5</option><option>70</option><option>72,5</option><option>75</option><option>77,5</option><option>80</option><option>82,5</option><option>85</option><option>87,5</option><option>90</option><option>92,5</option><option>95</option><option>97,5</option><option>100</option><option>102,5</option><option>105</option><option>107,5</option><option>110</option><option>112,5</option><option>115</option><option>117,5</option><option>120</option><option>122,5</option><option>125</option><option>127,5</option><option>130</option><option>132,5</option><option>135</option><option>137,5</option><option>140</option><option>142,5</option><option>145</option><option>147,5</option><option>150</option><option>152,5</option><option>155</option><option>157,5</option><option>160</option><option>162,5</option><option>165</option><option>167,5</option><option>170</option><option>172,5</option><option>175</option><option>177,5</option><option>180</option>
				</select>
				</div>
				<br>
				<p class="card-text">Введите <b>количество дней в неделю</b>, которые вы можете посвятить тренировке данного упражнения.</p>
				<div class="select">
				<select name="slct" id="days-squats">
						<option>1</option><option>2</option>
				</select>
				</div>
								<br>
				<div style="text-align:center;"><div onclick="squats()" class="btn btn-success" style="font-family: 'Lobster', cursive; width:200px; background-color: orange; border-color: orange; font-size:15px;">Рассчитать программу</div></div>
                     </form> 
					 
					 <div id="squatscolumn"></div>
			  </div>
			</div>
            </div>

        </div>
    </section>

    <!-- About Section -->
    <section class="success" id="about">
	
	<div class="in"></div>
<video loop muted autoplay>
  <source src="../video/1.mp4" type="video/mp4" />
 </video>
	
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>О приложении</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p>Приложение "Лифтёр" расчитывает индивидуальную программу тренировок.</p>
					<hr>
					<p>Все метрики и процентовки даны исходя из самых современных методологических разработок в области поуэрлифтинга и физиологии.</p>
                </div>
                <div class="col-lg-4">
                    <p>Все программы рассчитаны на девять недель. Вы сами решаете сколько раз в неделю посещать спортзал.</p>
					<hr>
					<p>В приложении использованы программы таких именитых спортсменов и методистов как Тед Арсиди, Борис Шейко и Юрий Верхошанский.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Свяжитесь с нами</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="name">ФИО</label>
                                <input type="text" class="form-control" placeholder="Имя" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="phone">Телефон</label>
                                <input type="tel" class="form-control" placeholder="Телефон" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="message">Сообщение</label>
                                <textarea rows="5" class="form-control" placeholder="Сообщение" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Местоположение</h3>
                        <p>Мы находимся<br>в Москве</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Мы в соцсетях</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>О нас</h3>
                        <p>Разработка чат-ботов под все платформы и любой сложности.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; JackBot 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Вход для клиентов</h2>
                            <hr class="star-primary">
                            <img src="../img/profile.png" class="img-responsive img-centered" alt="">
                            						
									<form onsubmit="identity()" name="enter" novalidate>
											<div class="row control-group">
												<div class="form-group col-xs-12 floating-label-form-group controls">
													<label for="name">Логин</label>
													<input id="login" type="text" class="form-control" placeholder="Логин" required data-validation-required-message="Please enter your name.">
													<p class="help-block text-danger"></p>
												</div>
											</div>
											<div class="row control-group">
												<div class="form-group col-xs-12 floating-label-form-group controls">
													<label for="email">Пароль</label>
													<input id="pass" type="password" class="form-control" placeholder="Пароль" required data-validation-required-message="Please enter your email address.">
													<p class="help-block text-danger"></p>
												</div>
											</div>
											
											<br>
											<div id="success"></div>
											<div class="row">
												<div class="form-group col-xs-12">
													<button type="submit" class="btn btn-success btn-lg">Войти</button>
												</div>
											</div>
									</form>
									<script>
										function identity(){
											login = document.getElementById("login").value;
											pass = document.getElementById("pass").value;
											if(login=="vivienne" && pass=="sabo")
											{
												window.open('http://jackbot.ru/clients/vivienne_sabo.php');
												
											}
											else
											{
												alert("Error")
											}
										}
									</script>
									
									
						
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
	
	
	
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Разные проекты</h2>
                            <hr class="star-primary">
							<div style="float: left; text-align: center;">
                            <img src="../img/booksee.jpg" alt="Букси-книго-навигатор" style="width: 230px; padding: 10px;">
                            <img src="../img/lifter.jpg" alt="Букси-книго-навигатор" style="width: 230px; padding: 10px;">
                            <img src="../img/booksee.jpg" alt="Букси-книго-навигатор" style="width: 230px; padding: 10px;">
                            
							<p>Мы занимаемся самыми разными проектами.<br>В сферу наших интересов входят Веб приложения, разработка сайтов и мобильных приложений.</p>
            
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	
	
	
	
	
	
	
	
	
	
	



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
    <script src="../js/calculator-bench-press.js"></script>
    <script src="../js/calculator-dead-leafts.js"></script>
    <script src="../js/calculator-squats.js"></script>

    <!-- Theme JavaScript -->
    <script src="../js/freelancer.min.js"></script>

</body>

</html>
