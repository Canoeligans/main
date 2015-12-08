<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<title>Kscav Pictures</title>

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

</head>




<body>

<div id="content" style="background-color:#000">

<!--BEGIN HEADER-->
<div id="header">
<div id="headlogo" style="font-size:72px">
Canoeligans Scavenger Hunt
<!--<img src="/files/ithacawb.png" width="548px" height="135px" />-->
</div>
<!--<a href="http://www.canoeligans.com" title="Return to Homepage"><img id="headblank" src="/zoo/files/blank.png" width="100%" height="140px" /></a>-->
</div>

<div id="menu">
<ul>
<!--
<li><a href="/about.html" title="All there is to know">About us</a></li>-->
<li><a href="/adventures/kscav/uploadphp.php"  title="upload an image">Upload</a></li>
<li><a class="currentpage" href="/adventures/kscav/albums.php"  title="See what went on, in vivid COLOR">View</a></li>
</ul>
</div>
<!--END HEADER-->

<div id="pictures">
<ul class="thumb">
<p>Team #1<p>
<?php
for ($picture = 100; $picture <= 199; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 100; $picture <= 199; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';}}?>

<p>Team #2<p>
<?php
for ($picture = 200; $picture <= 299; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 200; $picture <= 299; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';}}?>

<p>Team #3<p>
<?php
for ($picture = 300; $picture <= 399; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 300; $picture <= 399; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';}}?>

<p>Team #4<p>
<?php
for ($picture = 400; $picture <= 499; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 400; $picture <= 499; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';}}?>

<p>Team #5<p>
<?php
for ($picture = 500; $picture <= 599; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 500; $picture <= 599; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';}}?>

<p>Team #6<p>
<?php
for ($picture = 600; $picture <= 699; $picture += 1){
if (file_exists("upload/".$picture.".JPG")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.JPG"><img src="/adventures/kscav/upload/'.$picture.'.JPG" title="'.$picture.'" /></a></li>';}}?>
<?php
for ($picture = 600; $picture <= 699; $picture += 1){
if (file_exists("upload/".$picture.".jpg")){
	echo '<li><a href="/adventures/kscav/upload/'.$picture.'.jpg"><img src="/adventures/kscav/upload/'.$picture.'.jpg" title="'.$picture.'" /></a></li>';
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