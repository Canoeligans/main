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
<li><a class="currentpage" href="/adventures/kscav/uploadphp.php"  title="upload an image">Upload</a></li>
<li><a href="/adventures/kscav/albums.php"  title="See what went on, in vivid COLOR">View</a></li>
</ul>
</div>
<!--END HEADER-->

<div id="pictures">
<ul class="thumb">

<p>
To uplaod an image, rename the image on your computer a 3 digit number with the extension .JPG
<p>
The first digit should represent your team number, the next two digits should be sequential from 1-99, the same number cannot be used twice.
<p>
For example, Team 6, the obvious winners, should name their files 601.JPG, 602.JPG, 603.JPG and so on...
<p>
You can look at the pictures on the view tab, and hover on the last image determine the next number in the upload sequence for your team.
<p>
If you're not sure which team number you are, check the pictures already up on the view tab.
<p>
Sorry, I haven't figured out how to handle batch uploads or videos just yet... Nor have I figured out why some image thumbnails are upside down...
<p>
<p>
<p>
<?php
// Simple PHP Upload Script:  http://coursesweb.net/php-mysql/

$uploadpath = 'upload/';      // directory to store the uploaded files
$max_size = 2000;          // maximum file size, in KiloBytes
$alwidth = 900;            // maximum allowed width, in pixels
$alheight = 800;           // maximum allowed height, in pixels
$allowtype = array('bmp', 'gif', 'JPG', 'jpe', 'png', 'jpg');        // allowed extensions

if(isset($_FILES['fileup']) && strlen($_FILES['fileup']['name']) > 1) {
  $uploadpath = $uploadpath . basename( $_FILES['fileup']['name']);       // gets the file name
  $sepext = explode('.', strtolower($_FILES['fileup']['name']));
  $type = end($sepext);       // gets extension
  list($width, $height) = getimagesize($_FILES['fileup']['tmp_name']);     // gets image width and height
  $err = '';         // to store the errors

  // Checks if the file has allowed type, size, width and height (for images)
  if(!in_array($type, $allowtype)) $err .= 'The file: <b>'. $_FILES['fileup']['name']. '</b> not has the allowed extension type.';
  if($_FILES['fileup']['size'] > $max_size*1000) $err .= '<br/>Maximum file size must be: '. $max_size. ' KB.';
  if(isset($width) && isset($height) && ($width >= $alwidth || $height >= $alheight)) $err .= '<br/>The maximum Width x Height must be: '. $alwidth. ' x '. $alheight;

  // If no errors, upload the image, else, output the errors
  if($err == '') {
    if(move_uploaded_file($_FILES['fileup']['tmp_name'], $uploadpath)) { 
      echo 'File: <b>'. basename( $_FILES['fileup']['name']). '</b> successfully uploaded:';
      echo '<br/>File type: <b>'. $_FILES['fileup']['type'] .'</b>';
      echo '<br />Size: <b>'. number_format($_FILES['fileup']['size']/1024, 3, '.', '') .'</b> KB';
      if(isset($width) && isset($height)) echo '<br/>Image Width x Height: '. $width. ' x '. $height;
    }
    else echo '<b>Unable to upload the file.</b>';
  }
  else echo $err;
}
?> 
<div style="margin:1em auto; width:333px; text-align:center;">
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
  Upload File: <input type="file" name="fileup" /><br/>
  <input type="submit" name='submit' value="Upload" /> 
 </form>
</div>

</ul>
</div>
</div>

<div id="preload">
</div>

</body>
</html>