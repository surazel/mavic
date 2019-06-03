<?php get_header(); ?>
<?php
if(post_password_required( )){?>
	<div class="container">
    <?php echo get_the_password_form();?>
    <br>
    </div>
<?php }else{?>


<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ajerosemka/ajero.css" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.arcticmodal.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/landing/css/animate.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/landing/css/adaptive.css" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/landing/js/feedback.js"></script>
<script src="<?php bloginfo('template_url'); ?>/landing/js/jquery.arcticmodal.js"></script>
<script src="<?php bloginfo('template_url'); ?>/landing/js/jquery.jgrowl.js"></script>
<script src="<?php bloginfo('template_url'); ?>/landing/js/wow.min.js"></script>
<!--<script src="<?php bloginfo('template_url'); ?>/landing/js/main.js"></script>  При активации появляется непонятный ноль "0" внизу страницы, который нельзя убрать средствами HTML-->
<script>
new WOW().init();
</script>
<!--<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', '0030d394fe99cb26cc32e5f4dcb626b1');
</script>-->
<script>
function show_hide(obj_id) {
doc=document.getElementById(obj_id);
if(doc.style.display == "none") doc.style.display = "block";
else doc.style.display = "none"
}
</script>
<body>

<div class="wrapper">
<!--=========================================================================================== ВИДЕО =============================================================================================-->
<div class="top-banner">
    <video autoplay loop muted class="bgvideo" poster="<?php bloginfo('template_url'); ?>/ajerosemka/img/bgvideo2.jpg" id="bgvideo">
        <!--<source src="<?php bloginfo('template_url'); ?>/landing/bgvideo2.webm" type="video/webm">-->
        <!--<source src="<?php bloginfo('template_url'); ?>/landing/bgvideo2.mp4" type="video/mp4">-->
        <!--source src="Skymec.mp4" type="video/mp4"></source-->
    </video>
   <div class="bgvideo-fon"></div>
        <div class="wr">
            <h1 class="top-banner-title">АЭРОСЪЁМКА</h1>
            <h1 class="top-banner-title2">В АЛМАТЫ И АСТАНЕ</h1>
            <div class="clearfix"></div>
          <a href="#" name="modal" style="margin-top: 450px" class="yelow-button">Заказать аэросъёмку</a>
        </div>
</div>
<!--======================================================================================= ТЕКСТ НА ВИДЕО ========================================================================================-->
<!--============================================================================================ ТЕКСТ ============================================================================================-->
<div style="max-width:1150px;margin:auto;margin-top:50px;line-height: 24px;width:95%;text-align: justify;margin-bottom: 50px;">
Аэросъемка с дронами DJI гарантирует высококачественное фото и видео с высоты птичьего полета. Вне зависимости от цели: свадебная аэросъемка, геодезия, съемка строительных объектов или недвижимости, спортивных мероприятий или торжеств - кадры будут четкими, плавными и яркими.
<a onclick="show_hide('detail'); return false;" href="javascript:void(0)">Подробнее</a>
<div id="detail" style="display: none;line-height: 24px;">
<p style="font-size:16px; margin-top:10px">Опытные пилоты легко запускают дрон в воздух, умело работают с режимами полета, справляются с управлением в любую погоду и создают потрясающее видео. Мы воплощаем в жизнь самые смелые идеи и проекты, монтируем и обрабатываем материал, и гордимся результатом.</p>
</div>
</div>
<!--============================================================================================ ТЕКСТ ============================================================================================-->
<!--========================================================================================== НАШИ ДРОНЫ =========================================================================================-->
<div class="block1" id="m1">
    <div class="wr">
        <div style="margin-left: -3%;margin-bottom: -30px;" class="block-title"><h1>В съёмках принимают участие следующие дроны</h1></div>
		<a href="//dji.kz/product/dron-dji-mavic-2-pro/" target="_blank">
        <div class="kvadropter-item wow zoomInDown" data-wow-delay="0.3s">
            <div class="ki-img"><img src="<?php bloginfo('template_url'); ?>/landing/img/Mavic2pro.png" alt="Обучение пилотированию на DJI Mavic Pro"></div>
            <a href="//dji.kz/product/dron-dji-mavic-2-pro/" target="_blank"><h2 class="ki-name">MAVIC 2 PRO</h2></a>
			<p style="text-align:center">Разрешение 4K, несменная оптика, формат MP4, MOV<br>Лучше всего подходит для:<br>- фото для интернет-использования<br>- низкобюджетного видео<br>- любительских кадров</p>
			<!--<div style="margin-top:2px" class="ki-name-price">622 000 KZT</div>-->
        </div>
		</a>
		<a href="//dji.kz/product/dron-phantom-4-pro-v2-0/" target="_blank">
        <div class="kvadropter-item wow zoomInDown" data-wow-delay="0.3s">
            <div class="ki-img"><img src="<?php bloginfo('template_url'); ?>/landing/img/phantome4pro.png" alt="Обучение пилотированию на DJI PHANTOM 4/PRO/PRO+" style="margin:44px 0 0 0"></div>
            <a href="//dji.kz/product/dron-phantom-4-pro-v2-0/" target="_blank"><h2 class="ki-name">PHANTOM 4 PRO</h2></a>
			<p style="text-align:center">Разрешение 4K, несменная оптика, формат MP4, MOV<br>Лучше всего подходит для:<br>- фото для интернет-использования<br>- профессионального видео<br>- съемки в темное время суток</p>
			<!--<div style="margin-top:2px" class="ki-name-price">618 000 KZT</div> -->
        </div>
		</a>
		<a href="//dji.kz/product/dji-inspire-2/" target="_blank">
        <div class="kvadropter-item kvadropter-item-last wow zoomInDown" data-wow-delay="0.3s">
            <div class="ki-img"><img src="<?php bloginfo('template_url'); ?>/landing/img/inspire2.png" alt="Обучение пилотированию на DJI Inspire 1/2" style="margin:40px 0 0 0"></div>
            <a href="//dji.kz/product/dji-inspire-2/" target="_blank"><h2 class="ki-name">INSPIRE 2</h2></a>
			<p style="text-align:center">Сменная оптика: Zenmuse Z30, Zenmuse XT, Zenmuse XT2, Zenmuse X5S<br>Лучше всего подходит для:<br>- профессиональной съемки<br>- съемки промышленного назначения<br>- отчетных и технических задач</p>
			<!--<div style="margin-top:2px" class="ki-name-price">1 405 500 KZT</div>-->
        </div>
		</a>
		<a href="//dji.kz/product/dron-dji-matrice-210/" target="_blank">
        <div class="kvadropter-item wow zoomInDown" data-wow-delay="0.3s">
            <div class="ki-img"><img src="<?php bloginfo('template_url'); ?>/landing/img/matrice.png" alt="Обучение пилотированию на DJI Mavic Pro"></div>
            <a href="//dji.kz/product/dron-dji-matrice-210/" target="_blank"><h2 class="ki-name">MATRICE 210</h2></a>
			<p style="text-align:center">Сменная оптика: X5S, разрешение 4K<br>Лучше всего подходит для:<br>- кинематографической съемки<br>- профессионального видео<br>- отчетных и технических задач</p>
			<!--<div style="margin-top:2px" class="ki-name-price">3 750 000 KZT</div>-->
        </div>
		</a>
    </div>
</div>
<!--========================================================================================== НАШИ ДРОНЫ =========================================================================================-->
<!--============================================================================================= FAQ =============================================================================================-->
<div class="vypad-text-top">
						<h1 style="text-align:center;color:#000;margin-bottom:10px;">ЧТО ПРОИСХОДИТ В ШКОЛЕ ПИЛОТОВ?</h1>
						<div class="vypad-text-anons">в мельчайших подробностях расскажем о всех теоретических и практических нюансах полетов на квадрокоптере</div>
					</div>
<div class="container page">

	<div class="vypad-raw">
	
		<div id = "payment" class="part-faq tab-pane fade active in" style="width:100%">
			<div class="row">
<div class="vypad-general">
	<div class="vypad col-sm-9">
		<div class = "faq">		
			<a id="accordion" class ="item-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo11">
				<h4 class="panel-title panel-title-dop">
					<span style="color:#44a8f2;font-size:16px;line-height: 38px;">Сколько времени снимает квадрокоптер?</span>
					<div style="float:right; color: #44a8f2;" class="fa fa-angle-down"></div>
				</h4>
			</a>
			<div id="collapseTwo11" class="panel-collapse collapse">
				<div class="panel-body desc">
					<ul>
						<li>
							<p>В воздухе дрон находится 20-25 минут (в зависимости от модели) на 1 аккумуляторе. Наша команда всегда имеет под рукой несколько батарей для аэросъемки. В среднем, фотосессия и видеосъемка длится примерно 1.5 - 2 часа.  </p>
						</li>
					</ul>
				</div>	
			</div>	
		</div>
		<div class = "faq">
			<a id="accordion" class ="item-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne22">
				<h4 class="panel-title panel-title-dop">
					<span style="color:#44a8f2; font-size: 16px;line-height: 38px;">Плохая погода и сильный ветер. Вдруг не взлетит?</span>
					<div style="float:right; color: #44a8f2;" class="fa fa-angle-down"></div>
				</h4>	
			</a>
			<div id="collapseOne22" class="panel-collapse collapse">
				<div class="panel-body desc">
					<ul>
						<p>Наши опытные пилоты могут управлять квадрокоптером в пасмурную или ветреную погоду. Но если на улице шквальный ветер или дождь, аэросъемку придется перенести.</p>
					</ul>
				</div>      	
			</div>	
		</div>
		<div class = "faq">
		    <a id="accordion" class ="item-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne33">
				<h4 class="panel-title panel-title-dop">
					<span style="color:#44a8f2; font-size: 16px;line-height: 38px;">Можем ли мы сделать ролик только с квадрокоптера?</span>
					<div style="float:right; color: #44a8f2;" class="fa fa-angle-down"></div>
				</h4>	
			</a>
			<div id="collapseOne33" class="panel-collapse collapse">
				<div class="panel-body desc">
					<ul>
						<li>
							<p>Конечно. Аэросъемка - это универсальное решение для любых проектов. Строительство дома, геодезия, городской праздник, фестиваль или свадьба - любое из этих событий сможет запечатлеть квадрокоптер с высоты птичьего полета. </p>
						</li>
					</ul>
				</div>      	
			</div>	
		</div>

		<div class = "faq">
			<a id="accordion" class ="item-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne44">
				<h4 class="panel-title panel-title-dop">
					<span style="color:#44a8f2; font-size: 16px;line-height: 38px;">Вы можете обработать фото и видео?</span>
					<div style="float:right; color: #44a8f2;" class="fa fa-angle-down"></div>
				</h4>	
			</a>
		    <div id="collapseOne44" class="panel-collapse collapse">
				<div class="panel-body desc">
				  	<ul>
						<li>
							<p>Уточняется</p>
						</li>
					</ul>
				</div>      	
			</div>	
		</div>
        <div class = "faq">
			<a id="accordion" class ="item-title" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
				<h4 class="panel-title panel-title-dop">
					<span style="color:#44a8f2; font-size: 16px;line-height: 38px;">Снимаете на камеру дрона DJI или на профессиональные?</span>
					<div style="float:right; color: #44a8f2;" class="fa fa-angle-down"></div>
				</h4>
			</a>
			<div id="collapseFive" class="panel-collapse collapse">
				<div class="panel-body desc">
					<ul>
						<li>
							<p>Уточняется</p>
						</li>
					</ul>
				</div>
			</div>	
		</div>
	</div>		
</div>
</div>	
</div>	
</div>
</div>
<!--============================================================================================= FAQ =============================================================================================-->
<!--======================================================================================== ПРИМЕРЫ РАБОТ ========================================================================================-->
<div style="text-align:centre;background:#f1f1f1;padding-bottom: 60px;padding-bottom: 20px;">
<h1 class="block-title">НАШИ РАБОТЫ</h1>
<div class="works">
<div class="works-s"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/p8ZTxJ3Du7Y" frameborder="0" allow="accelerometer; autoplay; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div class="works-s"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/p8ZTxJ3Du7Y" frameborder="0" allow="accelerometer; autoplay; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
<div class="works">
<div class="works-s"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/p8ZTxJ3Du7Y" frameborder="0" allow="accelerometer; autoplay; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
<div class="works-s"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/p8ZTxJ3Du7Y" frameborder="0" allow="accelerometer; autoplay; 
encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
</div>
</div>
<!--======================================================================================== ПРИМЕРЫ РАБОТ ========================================================================================-->

<!--========================================================================================= О Т З Ы В Ы ========================================================================================-->
<div>
<div class="rev-block" id="m3">
    <h1 class="block-title">Отзывы</h1>
        <div id="slider-wrap">
            <div id="slider">
                <div class="slide">
                    <div class="rev-item">
                        <div class="rev-item-img"><img src="<?php bloginfo('template_url'); ?>/ajerosemka/img/rev3.jpg" alt=""></div>
                        <h2 class="rev-item-name">Айгуль</h2>
                        <div class="rev-item-text">Приглашали ребят снимать нашу свадьбу! Конечно, были сомнения, потому что раньше никогда не заказывали аэросъемку. Но когда я увидела смонтированное видео, я просто влюбилась в него! Снято было просто потрясающие и кадр с высоты попали все наши родственники ) Получилось очень нестандартно, красиво. Нам будет такая память! Спасибо!</div>
                    </div>
                    <div class="rev-item rev-item2">
                        <div class="rev-item-img"><img src="<?php bloginfo('template_url'); ?>/ajerosemka/img/rev2.jpg" alt=""></div>
                        <h2 class="rev-item-name">Жадигер</h2>
                        <div class="rev-item-text">Заказывал аэросъемку земельного участка 20 гектар, чтобы получить полную картину участка перед покупкой. И несмотря на то, что я мог выехать на объект только утром в воскресенье (100 км от города), ребята согласились на эту работу за вполне адекватную цену. За несколько часов они сняли хорошее видео с приближением, и качественные фото, благодаря которым я получил всю необходимую информацию об этом участке. Спасибо.</div>
                    </div>
                    <div class="rev-item rev-item3">
                        <div class="rev-item-img"><img src="<?php bloginfo('template_url'); ?>/ajerosemka/img/rev1.jpg" alt=""></div>
                        <h2 class="rev-item-name">Кайрат</h2>
                        <div class="rev-item-text">Крутые пилоты, видео просто класс! Спасибо операторам за такую качественную работу. Мы снимали рекламный ролик и уложились в пару часов. Подготовка и монтаж заняли 1 день. Настоящие профессионалы. </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
 </div>
<!--========================================================================================= О Т З Ы В Ы ========================================================================================-->
<!--========================================================================================= ФОРМА ЗАЯВКИ =======================================================================================-->
<div class="zajavka-block" >
    <div class="zajavka-block-wr">
<img class="img-down" src="<?php bloginfo('template_url'); ?>/ajerosemka/img/dron2.jpg"></img>
        <div class="zajavka-form zajavka-form-dop">
            <h2 class="form-tittle">Наши специалисты свяжутся с вами</h2>
			<form action="" method="post" name="form-2" onsubmit="яндекс счётчик">
                <input type="text" placeholder="Ваше имя" name="name">
                <input type="text" placeholder="Ваш телефон" name="phone">
                <input type="submit" class="yelow-button feedback" value="Записаться" name="send">
            </form>
        </div>
    </div>
</div>
<!--========================================================================================= ФОРМА ЗАЯВКИ =======================================================================================-->
</div>
</div><!--.wrapper -->
</div>
</div>

<?php }
?>
<?php get_footer(); ?>