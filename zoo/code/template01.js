// JavaScript Document


/*BEGIN MAINPAGE HILIGHT FUNCTION*/
herd1 = new Image(800,600);
herd1.src = "/files/herd1.jpg";
herd2 = new Image(800,600);
herd2.src = "/files/herd2.jpg";
profiles1 = new Image(800,600);
profiles1.src = "/files/profiles1.jpg";
profiles2 = new Image(800,600);
profiles2.src = "/files/profiles2.jpg";
farm1 = new Image(800,600);
farm1.src = "/files/farm1.jpg";
farm2 = new Image(800,600);
farm2.src = "/files/farm2.jpg";
dismount1 = new Image(800,600);
dismount1.src = "/lightning/dismount1.jpg";
dismount2 = new Image(800,600);
dismount2.src = "/lightning/dismount2.jpg";
poster1 = new Image(1200,600);
poster1.src = "/lightning/posterV1.jpg";
poster2 = new Image(1200,600);
poster2.src = "/lightning/posterV2.jpg";

function imgswap(imgDocID, imgObjName) {
document.images[imgDocID].src = eval(imgObjName + ".src");}
/*END MAINPAGE HILIGHT FUNCTION*/


/*BEGIN BROWSER SIZE FUNCTION*/
function getBrowserWindowSize() {
var myWidth = 0, myHeight = 0;
if( typeof( window.innerWidth ) == 'number' ) {//Non-IE
myWidth = window.innerWidth;
myHeight = window.innerHeight;}
else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {//IE 6+ in 'standards compliant mode'
myWidth = document.documentElement.clientWidth;
myHeight = document.documentElement.clientHeight;}
else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {//IE 4 compatible
myWidth = document.body.clientWidth;
myHeight = document.body.clientHeight;}
return {width:myWidth, height:myHeight};}
/*END BROWSER SIZE FUNCTION*/


/*BEGIN SOUND FUNCTION*/
function moo(soundobj) {
var thissound= eval("document."+soundobj);
thissound.Play();}
/*END SOUND FUNCTION*/


/*BEGIN DYNAMIC PAGE LOAD FUNCTION*/
var loadedobjects=""//define loaded objects to null
var rootdomain="http://"+window.location.hostname//define rootdomain as current page

function ajaxpage(url, containerid){
var page_request = false
if (window.XMLHttpRequest) // if Mozilla, Safari etc
page_request = new XMLHttpRequest()
else if (window.ActiveXObject){ // if IE
try {
page_request = new ActiveXObject("Msxml2.XMLHTTP")
} 
catch (e){
try{
page_request = new ActiveXObject("Microsoft.XMLHTTP")
}
catch (e){}
}
}
else
return false
page_request.onreadystatechange=function(){
loadpage(page_request, containerid)
}
page_request.open('GET', url, true)
page_request.send(null)
}

function loadpage(page_request, containerid){
if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
document.getElementById(containerid).innerHTML=page_request.responseText
}

function loadobjs(){
if (!document.getElementById)
return
for (i=0; i<arguments.length; i++){
var file=arguments[i]
var fileref=""
if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
if (file.indexOf(".js")!=-1){ //If object is a js file
fileref=document.createElement('script')
fileref.setAttribute("type","text/javascript");
fileref.setAttribute("src", file);
}
else if (file.indexOf(".css")!=-1){ //If object is a css file
fileref=document.createElement("link")
fileref.setAttribute("rel", "stylesheet");
fileref.setAttribute("type", "text/css");
fileref.setAttribute("href", file);
}
}
if (fileref!=""){
document.getElementsByTagName("head").item(0).appendChild(fileref)
loadedobjects+=file+" " //Remember this object as being already added to page
}
}
}
/*END DYNAMIC PAGE LOAD FUNCTION*/


/*BEGIN TEXT RESIZE FUNCTIONS*/
function makeSmall(type){
    //Change class for Text Resizer Links
 	jQuery('.text_resize .small').addClass('current');
    jQuery('.text_resize .medium').removeClass('current');
    jQuery('.text_resize .large').removeClass('current');
	jQuery('#aboutcontent').removeClass('size20text');
	jQuery('#aboutcontent').removeClass('size24text');
	jQuery('#aboutcontent').addClass('size16text');
}
function makeMedium(type){
    //Change class for Text Resizer Links
    jQuery('.text_resize .small').removeClass('current');
    jQuery('.text_resize .medium').addClass('current');
    jQuery('.text_resize .large').removeClass('current');
	jQuery('#aboutcontent').removeClass('size16text');
	jQuery('#aboutcontent').removeClass('size24text');
	jQuery('#aboutcontent').addClass('size20text');
}
function makeLarge(type){
    //Change class for Text Resizer Links
    jQuery('.text_resize .small').removeClass('current');
    jQuery('.text_resize .medium').removeClass('current');
    jQuery('.text_resize .large').addClass('current');
	jQuery('#aboutcontent').removeClass('size16text');
	jQuery('#aboutcontent').removeClass('size20text');
	jQuery('#aboutcontent').addClass('size24text');
}
/*END TEXT RESIZE FUNCTIONS*/


/*BEGIN IMAGE POPUP FUNCTION
$(document).ready(function(){

$("ul.thumb li").hover(function() {
	$(this).css({'z-index' : '10'});
	$(this).find('img').addClass("hover").stop()
		.animate({
			marginTop: '-112px', 
			marginLeft: '-150px', 
			top: '50%', 
			left: '50%', 
			width: '300px', 
			height: '225px',
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
		}, 400);
});
});
/*END IMAGE POPUP FUNCTION*/

/*BEGIN WINDOW RESET FUNCTION*/
function getCookie(c_name)
{
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
  {
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}

function windowReset(){
var oldWidth=getCookie('widthCookie');
var newWidth = 0, maxHeight = 0;
		if( typeof( window.innerWidth ) == 'number' ) {//Non-IE
			newWidth = window.innerWidth;
			newHeight = window.innerHeight;}
		else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {//IE 6+ in 'standards compliant mode'
			newWidth = document.documentElement.clientWidth;
			newHeight = document.documentElement.clientHeight;}
		else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {//IE 4 compatible
			newWidth = document.body.clientWidth;
			newHeight = document.body.clientHeight;}			
	if(oldWidth!=1600){
	if((newWidth-oldWidth)>300){i
	Galleria.loadTheme('/code/galleria/src/themes/classic/galleria.farm.js');
    $('#galleria').galleria();}}
	//window.location.reload();}}//if the window wasn't large, check to see if it got wider by 300 pixels
	if(oldWidth!=800){
	if((oldWidth-newWidth)>-50){
    Galleria.loadTheme('/code/galleria/src/themes/classic/galleria.farm.js');
    $('#galleria').galleria();}}
	//window.location.reload();}}//if the window wasn't small check to see if it got smaller
}
/*END WINDOW RESET FUNCTION*/