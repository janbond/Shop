<!doctype html>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=1024">
<meta name="keywords" content="詹雯守作品集">
<meta name="description" content="詹雯守作品集">
<title>詹雯守作品集</title>
<link href="favicon.ico" rel="icon">
<link href="favicon.ico" rel="shortcut icon">
<link href="apple-touch-icon.png" rel="apple-touch-icon">
<link href="css/style.css" rel="stylesheet">
<script src="js/plugins/jQuery/jquery-1.8.3.min.js"></script>
<script src="js/plugins/jQuery/jquery.nivo.slider-3.2.min.js"></script>
<script src="js/plugins/jQuery/jquery.easing-1.3.min.js"></script>
<script src="js/common.js"></script>
<script src="js/demo_website.js"></script>
<script>
jQuery(document).ready(function(e) {
	
	// Banner輪播
	jQuery('#slider').nivoSlider({
	  //effect: 'sliceDown',
		animSpeed: 1000,
		pauseTime: 4000,
		pauseOnHover: false,
		directionNav: false
	});
	
});
</script>
</head>
<body class="iFooterBg">
	<?php include("page_header.php"); ?>
  
  
  <div id="iBody">
  	<div id="bigShot">
      <div id="slider" class="nivoSlider">
        <a href="#" title=""><img src="images/i_banner_1.jpg" width="1000" height="470" alt="*"></a>
        <a href="#" title=""><img src="images/i_banner_2.jpg" width="1000" height="470" alt="*"></a>
        <a href="#" title=""><img src="images/i_banner_3.jpg" width="1000" height="470" alt="*"></a>
        <a href="#" title=""><img src="images/i_banner_4.jpg" width="1000" height="470" alt="*"></a>
      </div>
    </div>
  </div>
  <div id="iFooter">詹雯守作品集&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&copy;&nbsp;2015&nbsp;Chan,Wen-Shou&nbsp;portfolio&nbsp;website.</div>
</body>
</html>