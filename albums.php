<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Stolen souls</title>

<!--load stylesheets and javascript-->
<link rel="stylesheet" href="/zoo/code/template01.css" type="text/css" media="screen" />
<script type="text/javascript" src="/zoo/code/template01.js"></script>
<script type="text/javascript" src="/zoo/code/jquery.js"></script>
<link href='http://fonts.googleapis.com/css?family=Old+Standard+TT:regular,bold&subset=latin' rel='stylesheet' type='text/css'>
<script type="text/javascript"> 
$(document).ready(function(){

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-84px', 
			marginLeft: '-112px', 
			top: '40%', 
			left: '40%', 
			width: '225px', 
			height: '168px',
		}, 200);
	
	} , function() {
	$(this).css({'z-index' : '4'});
	$(this).find('img').removeClass("hover").stop()
		.animate({
			marginTop: '0', 
			marginLeft: '0',
			top: '0', 
			left: '0', 
			width: '150px', 
			height: '112px', 
		}, 600);
});
});
</script> 

<!--Facebook meta data-->
<meta property="og:title" content="Canoeligans"/>
<meta property="og:type" content="company"/>
<meta property="og:url" content="http://www.canoeligans.com"/>
<meta property="og:image" content="http://www.canoeligans.com/files/logo.jpg"/>
<meta property="og:site_name" content="Canoeligans"/>
<meta property="og:description" content="FREEDOM!"/>

</head>




<body>

<div id="content">

<!--BEGIN HEADER-->
<div id="header">
<div id="headlogo">
<!--<img src="/files/ithacawb.png" width="548px" height="135px" />-->
</div>
<a href="http://www.canoeligans.com" title="Return to Homepage"><img id="headblank" src="/zoo/files/blank.png" width="100%" height="140px" /></a>
</div>

<div id="menu">
<ul>
<li><a href="/about.html" title="All there is to know">About us</a></li>
<li><a href="/events.html"  title="See what's going on">Events</a></li>
<li><a class="currentpage" href="/albums.php"  title="See what went on, in vivid COLOR">Albums</a></li>
</ul>
</div>
<!--END HEADER-->

<div id="pictures">
<ul class="thumb">
<!--insert list items by searching the profiles folder for numbered subfolders. for each numbered subfolder, find the corresponding thumbnial image in the files/profiles folder and display it as a link-->
<?php
for ($picture = 100; $picture <= 900; $picture += 1){
if ( is_dir("pictures/".$picture."/")){
	echo '<li><a href="/album.php?picture='.$picture.'"><img src="/pictures/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';
}
}
?>
</ul>
</div>
</div>

<!--BEGIN FOOTER
<div id="footer">
<ul>
<li><a href="http://www.ilovenyfarms.com" title="visit the partner farms"><img id="flf" src="/files/flflogo.png" width="100px" />fingerlakes farms</a></li>
<li><a href="http://www.facebook.com/pages/Ithaca-NY/FingerLakes-Farms/150795148275584" title="check out the facebook page">facebook</a></li>
<li><a href="/contact.html" title="get in touch with us">contact us</a></li>
</ul>
<div id="ride">
<div id="ridelike">
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://www.facebook.com/pages/Ithaca-NY/FingerLakes-Farms/150795148275584" layout="button_count" show_faces="false" width="158" font="tahoma" colorscheme="dark"></fb:like>
</div>
</div>

</div>
END FOOTER-->

<div id="preload">
</div>

</body>
</html>