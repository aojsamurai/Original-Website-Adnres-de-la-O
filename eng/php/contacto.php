<?php if(isset($_POST['submit'])){if(trim($_POST['contactname'])==''){$hasError=true;}else{$name=trim($_POST['contactname']);}if(trim($_POST['subject'])==''){$hasError=true;}else{$subject=trim($_POST['subject']);}if(trim($_POST['email'])==''){$hasError=true;}else if(!preg_match("/^([a-zA-Z0-9])+([\.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-]+)*\.([a-zA-Z]{2,6})$/",trim($_POST['email']))){$hasError=true;}else{$email=trim($_POST['email']);}if(trim($_POST['message'])==''){$hasError=true;}else{if(function_exists('stripslashes')){$comments=stripslashes(trim($_POST['message']));}else{$comments=trim($_POST['message']);}}if(!isset($hasError)){$emailTo='andres@andresdelao.com';$body="Nombre: $name \n\n Email: $email \n\n Asunto: $subject \n\n Mensaje:\n\n $comments";$headers='From: ContactoWEB <'.$emailTo.'>'."\r\n".'Reply-To: '.$email;mail($emailTo,$subject,$body,$headers);$emailSent=true;}}?><form class="form" accept-charset="utf-8" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="contactform"><fieldset><legend>Get in touch.</legend>
<section id="form-mail"><p id="statusForm"></p><p>
<label for="name"></label><br />
<input type="text" name="contactname" value="Name" id="contactname" title="Field Required" required="required"/></p><p>
<label for="email"></label><br />
<input type="text" name="email" value="Email" id="email" title="Verify your email." required="required"/></p><p>
<label for="subject"></label><br />
<input type="text" name="subject" value="Subject" id="subject" title="Field Required" required="required"/></p><p>
<label for="message"></label><br />
<textarea cols="30" rows="10" value="Comment" name="message" id="message" title="Field Required" required="required"></textarea></p><p><input type="submit" value="Enviar" name="submit"></p>
</section>
<section id="form-social">
<section id="contacts">
Digital Designer&nbsp;&nbsp;/&nbsp;&nbsp;Mexico, D.F.
&nbsp;&nbsp;/&nbsp;&nbsp;<a href="http://geekonos.com/" target="_blank">Geekonos</a>
</section>
<br /><ul><li><a href="http://mx.linkedin.com/in/andresdelao" target="_blank"><img src="images/ln.png" alt="LinkedIn Andres de la O" title="LinkedIn Andres de la O"></a></li><li><a href="http://geekonos.com/" target="_blank"><img src="images/geekonos.png" alt="Geekonos + que un estudio Digital" title="Geekonos + que un estudio Digital"></a></li><li><a href="http://geekonos.com/podcast/" target="_blank"><img src="images/podcast.png" alt="Podcast Geekonos" title="Podcast Geekonos"></a></li><li><a href="https://twitter.com/#!/aojsamurai" target="_blank"><img src="images/twitter.png" alt="Twitter Andres de la O" title="Twitter Andres de la O"></a></li><li><a href="https://plus.google.com/116206122541758726181/posts" target="_blank"><img src="images/google.png" alt="Google Plus Andres de la O" title="Facebook Andres de la O"></a></li><li><a href="http://www.facebook.com/aoj.samurai" target="_blank"><img src="images/face.png" alt="Facebook Andres de la O" title="Facebook Andres de la O"></a></li></ul>
<br /><br /><p>If you are looking help or services based on digital media then fill this form.</p><p>If you want to contact me, you can send an email.
I'm glad to read your comments or suggestions.</p><p>Soon as i get the mail i'll wrote back to you. <span class="colorCyan">Don't be shy!</span></p>
<br /><br /><br /><ul><li><div class="g-plusone" data-size="medium" data-annotation="none" data-href="http://andresdelao.com/"></div>
<script type="text/javascript">window.___gcfg={lang:"es-419"};(function(){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src="https://apis.google.com/js/plusone.js";var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script></li><li>
<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="http://mx.linkedin.com/in/andresdelao"></script></li><li>
<a href="https://twitter.com/aojsamurai" class="twitter-follow-button" data-show-count="false" data-lang="es" data-show-screen-name="false">Seguir a @aojsamurai</a>
<script>!function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(!e.getElementById(f)){c=e.createElement(a);c.id=f;c.src="//platform.twitter.com/widgets.js";b.parentNode.insertBefore(c,b)}}(document,"script","twitter-wjs");</script></li><li>
<a href="https://twitter.com/share" class="twitter-share-button" data-text="Andres de la O Digital Designer" data-via="aojsamurai" data-lang="es">Twittear</a>
<script>!function(e,a,f){var c,b=e.getElementsByTagName(a)[0];if(!e.getElementById(f)){c=e.createElement(a);c.id=f;c.src="//platform.twitter.com/widgets.js";b.parentNode.insertBefore(c,b)}}(document,"script","twitter-wjs");</script></li><ul>
<br /><br />
</section></fieldset></form>