<!DOCTYPE html>
<html>
<head>
<title>Promoqube Challenger</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="author" content="www.promoqube.com"/>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" media="screen" />
<script>
var baseUrl = '<?php echo Yii::app()->request->baseUrl; ?>';
</script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.0.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/validation.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.maskedinput-1.3.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.uniform.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/custom.js"></script>
</head>
<body>
<div id="fb-root"></div>
<script src="http://connect.facebook.net/tr_TR/all.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/tr_TR/all.js#xfbml=1&appId=214817232008823";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


FB.Event.subscribe('edge.create',
    function(response) {
        window.location = '<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/join';
    }
);

</script>
<script>

  function getEmail() {
    FB.init({ appId: '214817232008823', status: true, cookie: true, xfbml : true });
     FB.login(function(response) {
   if (response.authResponse) {
     FB.api('/me', function(response) {
        window.location = '<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=site/subscribe&email='+response.email +'&name='+response.name;
     });
   } else {
     console.log('User cancelled login or did not fully authorize.');
   }
 } , {scope:'email'});
 

}




</script>




<div class="overlay"></div>
<div class="loader"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/loader.gif" alt=""></div>
<!-- Pop-Up Page -->
<div class="popupexternal dnone">
	<div class="popupcontnet">
		<div class="close">
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/close.png" alt="">
		</div>
		<div class="popupimage">
			<img src="" alt="">
		</div>
		<div class="popuptext">
			<span>İsim</span>
		</div>
	</div>
</div>

<!-- Katılım Koşulları -->
<div class="popup" id="privacyPopup">
    <a id="close" class="closeText">Kapat</a>
    <h3>"CHALLENGER"<br /> KATILIM KOŞULLARI</h3>
    <div class="termsList">
        <p><span class="number">1.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est. </p>
        <p><span class="number">2.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">3.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est. </p>
        <p><span class="number">4.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">5.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">6.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">7.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">8.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">9.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">10.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">11.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">12.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">13.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>
        <p><span class="number">14.</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec quam id enim rhoncus posuere vitae tempor sem. Quisque mauris enim, lobortis vel commodo quis, eleifend at lacus. Etiam ut dictum est.</p>

    </div>
</div>

<div class="wrapper">
	<div class="logo"></div>
	<div class="clear"></div>
<div id="homepage">
<div class="container">
<div class="content">
<?php echo $content; ?>
</div>
</div>	
	</div>
	<!-- Tebrik Ekranı -->
	<div id="successful" class="dnone">
		<div class="container">
			<div class="content">
				<br />
				<br />
				<br />
				<br />
				<h1>Teşekkürler</h1>
				<br />
				<span>onsequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
			</div>
		</div>
	</div>



	<!-- Footer -->
	<div class="footer">
		<div class="share">
		<?php echo CHtml::link('<img src="'.Yii::app()->request->baseUrl.'/images/share.png" alt=""/>',array('site/join')); ?>
		<span id="privacyclick"><img src="<?=Yii::app()->request->baseUrl?>/images/rule.png" alt=""/></span>
        
        	
 			
		</div>
		<div class="pq">
			<a href="http://www.promoqube.com" target="_blank" alt="promoqube"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/pqlogo.png" alt=""></a>
		</div>
	</div>
</div>

</body>
</html>