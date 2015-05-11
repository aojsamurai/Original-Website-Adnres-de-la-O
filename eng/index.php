<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html><html lang=es><head><meta charset="utf-8"/><title>Andr&eacute;s de la O Jim&eacute;nez | DiseÃ±ador Digital</title><link rel="shortcut icon" type=image/x-icon href="img/favicon.ico"/><link rel=author href=humans.txt /><meta name=sitedomain content=www.andres.geekonos.com /><meta name=Author content="Andres de la O Jimenez | DiseÃ±ador Digital"/><meta name=copyright content="Andres de la O"/><meta name=Classification content="digital, designer, diseÃ±ador, 3d, web, developer, desarrollo, diseÃ±o"/><meta name=country content=" Mexico" /><meta name=Language content=Spanish /><meta name=distribution content=Global /><meta property=og:title content="Andres de la O | DiseÃ±ador Digital" /><meta property=og:site_name content=www.andres.geekonos.com /><meta property=og:image content=http://geekonos.com/img/logo-geekonos+.png /><meta name=Robots content=INDEX,FOLLOW /><meta name=RATING content=GENERAL /><meta http-equiv=Last-Modified content="0"/><meta name=revisit-after content="4 days"/><meta name=keywords content="digital, designer, diseÃ±ador, 3d, web, developer, desarrollo, diseÃ±o, marketing, desarrollo, web, animacion, 3d, multimedia, seo, sem, comunicacion, creativa, tecnologia, Andres, de la O, andresdelao"/><meta name=description content="Andres de la O |  Digital Designer specialized in digital marketing, web development and design."/>
<!--[if lte IE 6]>
<style type=text/css media=screen>form label{background:#fff}</style>
<![endif]-->
<style>@import url("css/aoj.css");</style>
<script defer=defer type=text/javascript>window.onload=function(){var a;a=document.createElement("script");a.type="text/javascript";a.src="http://www.example.com/path/yourjavascriptfile.js";document.getElementsByTagName("head")[0].appendChild(a)};</script></head><body><div id=works><div id=works-content><h1>Book</h1><p class=worksP>Collection of my selected works.</p><br />
<?php include("php/book.php");?></div><div id=activework><div id=activework-content><div id=activework-verticalaligner></div></div></div></div>
<section id=profile>
<section id=profile-content class=ingoingProfile>
<?php include("php/profile.php");?>
</section>
</section>
<section id=contact>
<section id=contact-content class=ingoingContact>
<?php include("php/contacto.php");?>
</section>
</section>
<header id=header>
<section class=header-content>
<a href=# class=link_main><h1 class=logo>Andr&eacute;s de la O.</h1></a>
<nav class=navigation><ul><li><a href=# class=link_main>Home</a></li><li><a href=# class=link_works>Book</a></li><li><a href=# class=link_profile>Profile</a></li><li><a href=http://blog.andresdelao.com/ target=_blank>Blog</a></li><li><a href=# class=link_contact>Contact</a></li><li class=idiom><a href=http://mx.linkedin.com/in/andresdelao target=_blank>Linkedin</a> / <a href=https://twitter.com/#!/aojsamurai target=_blank>Twitter</a></li><li><a href=http://andresdelao.com/>Esp</a> / <a href=http://andresdelao.com/eng/ class=activeIdiom>Eng</a></li></ul>
</nav>
</section>
</header>
<header id=inverted-header>
<section class=header-content>
<a href=# class=link_main><h1 class=logoInv>Andr&eacute;s de la O.</h1></a>
<nav class=inverted-navigation><ul><li><a href=# class=link_main>Home</a></li><li><a href=# class=link_works>Book</a></li><li><a href=# class=link_profile>Profile</a></li><li><a href=http://blog.andresdelao.com/ target=_blank>Blog</a></li><li><a href=# class=link_contact>Contact</a></li><li class=idiom><a href=http://mx.linkedin.com/in/andresdelao target=_blank>Linkedin</a> / <a href=https://twitter.com/#!/aojsamurai target=_blank>Twitter</a></li><li><a href=http://andresdelao.com/>Esp</a> / <a href=http://andresdelao.com/eng/ class=activeIdiom>Eng</a></li></ul>
</nav>
</section>
</header>
<section id=container>
<section id=wrapper>
<section id=heading>
<article id=mensajeMail>
<?php if(isset($hasError)){?><p class=error><strong>Message sending failed</strong></p><p class=error>Please check that you filled out the form correctly.</p>
<?php }?>
<?php if(isset($emailSent)&&$emailSent==true){?><p class=errorno><strong>Â¡Your Mail has been sent successfully!</strong></p><p class=errorno>Â¡Thanks <strong><?php echo $name;?></strong>! I'll be in touch soon.</p>
<?php }?>
</article><h4><span class=bold>Digital Designer</span> specialized in digital marketing, front-end development and design.</h4><hr>
<figure class=tituloImg><img src=images/thor.png alt="Andres de la O" title="Andres de la O"/> </figure>
</section>
<?php include("php/home.php");?>
<section id=contactbox-container class=clearfix>
<?php include("php/downContent.php");?><div class=clearBoth></div>
</section>
</section>
<footer>
<article>Andr&eacute;s de la O &nbsp;|&nbsp; Digital Designer &nbsp;|&nbsp; <a href=humans.txt target=_blank>humansTXT</a> &nbsp;|&nbsp; <a href=http://iconos.edu.mx/ target=_blank>Iconos</a> &nbsp;|&nbsp; <a href=http://geekonos.com/ target=_blank>Geekonos</a> &nbsp;|&nbsp; <a href=http://bextlan.com/ target=_blank>Bextlan</a> &nbsp;|&nbsp; M&eacute;xico D.F. </article>
<article class=leyenda>
<a rel=license href=http://creativecommons.org/licenses/by-nc-sa/2.5/mx/><img alt="Licencia Creative Commons" style=border-width:0 src=http://i.creativecommons.org/l/by-nc-sa/2.5/mx/80x15.png /></a><br />Este obra est&aacute; bajo una <a rel=license href=http://creativecommons.org/licenses/by-nc-sa/2.5/mx/>licencia Creative Commons AtribuciÃ³n-NoComercial-CompartirIgual 2.5 MÃ©xico</a>.
</article>
</footer>
</section>
<script type=text/javascript src=https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js></script>
<script type=text/javascript src=https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js></script>
<script type=text/javascript src=js/aoj.ajax.js></script>
<script type=text/javascript src=js/jquery.cycle.all.js></script>
<script type=text/javascript src=js/jquery.easing.1.3.js></script>
<script type=text/javascript src=https://apis.google.com/js/plusone.js></script>
<script type=text/javascript src=js/jquery.validate.js></script></body></html>