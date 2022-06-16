

<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">

<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Online Racing Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1">



<style>
#version{
	position: absolute;
	top: 20px;
	left: 20px;
	font-size: 1vmin;
}
html{
	margin: 0;
	padding: 0;
	overflow: hidden;
}
body{
	margin: 0;
	padding: 0;
	height: 100vh;
}
input{
	border-radius: 0 !important;
}
.data{
	display: none;
}
#fore{
	transition: transform .5s ease-in-out;
	text-align: center;
}
.title{
	font-family: Monoton;
}
#title{
	padding-top: 20px;
	color: white;
	font-size: 10vmin;
	text-shadow: 0 0 1vmin black;
	text-align: center;
	transform: translate3d(0, -100vh, 0);
	transition: transform .5s ease-out;
/* 	animation: slidetop 0.5s ease-out forwards; */
}
/* @keyframes slidetop{
	0%{transform: translate3d(0, -100vh, 0)}
}
@keyframes leavetop{
	100%{transform: translate3d(0, -100vh, 0)}
}
@keyframes slideleft{
	0%{transform: translate3d(-100vw, 0, 0)}
	50%{transform: translate3d(-100vw, 0, 0)}
}
@keyframes slideright{
	0%{transform: translate3d(100vw, 0, 0)}
	50%{transform: translate3d(100vw, 0, 0)}
} */
.menuitem{
	color: white;
	font-size: 7vmin;
	text-align: center;
	text-shadow: 0 0 1vmin black;
	transform: translate3d(-100vw, 0, 0);
	transition: transform .5s ease-out;
/* 	animation: slideleft 1s -0.5s ease-out forwards; */
}
#name{
	background-color: rgba(0, 0, 0, 0.5);
	outline: none;
	border: 1vmin solid white;
	font-size: 10vmin;
	text-align: center;
	color: white;
	padding: 1vmin;
	width: 60vw;
}
#colorpicker{
	margin: 0;
	padding: 0;
	width: 80vw;
	height: 5vmin;
	background: linear-gradient(90deg,
		hsl(0, 100%, 50%),
		hsl(60, 100%, 50%),
		hsl(120, 100%, 50%),
		hsl(180, 100%, 50%),
		hsl(240, 100%, 50%),
		hsl(300, 100%, 50%),
		hsl(360, 100%, 50%)
	);
	border-radius: 3.5vmin;
	border: 1vmin solid white;
	display: inline-block;
	cursor: pointer;
}
#slider{
	margin: 0;
	padding: 0;
	width: 7vmin;
	height: 7vmin;
	border: 1vmin solid white;
	border-radius: 4.5vmin;
	transform: translate(-4.5vmin, -2vmin);
	cursor: pointer;
	box-shadow: 0 0 1vmin black;
	transition: transform .2s;
}
#slider:hover{
	transform: translate(-4.5vmin, -2vmin) scale(1.2);
}
#settings{
	height: 20vmin;
	width: 20vmin;
	background-color: #6eb0ea;
	position: absolute;
	bottom: 2vmin;
	right: 2vmin;
	opacity: 1;
	border-radius: 10vmin;
	cursor: pointer;
	box-shadow: 0 2vmin 3vmin rgba(0, 0, 0, 0.5);
	transition: transform .2s, box-shadow .2s, background .2s;
	transform: translate3d(50vw, 0, 0);
	z-index: 100;
}
#settings::after{
	content: "";
	background-image: url("https://jchabin.github.io/cars/gear.png");
	background-size: cover;
	height: 10vmin;
	width: 10vmin;
	position: absolute;
	bottom: 5vmin;
	left: 5vmin;
	filter: invert(1);
	transition: transform .2s;
}
#settings:hover{
	transform: scale(0.9) rotate(45deg) !important;
	box-shadow: 0 0.5vmin 1vmin rgba(0, 0, 0, 0.5);
}
#toolbar{
	width: 22vmin;
	height: 85vmin;
	border-radius: 11vmin;
	background-color: rgba(0, 0, 0, 0.5);
	position: absolute;
	right: 1vmin;
	bottom: 1vmin;
	transform: scaleY(0);
	transition: transform .5s;
	transform-origin: 50% 87.5%;
}
#toolbar.sel{
	transform: scaleY(1);
}
.tools{
	height: 20vmin;
	width: 20vmin;
	background-color: #db6262;
	border-radius: 10vmin;
	cursor: pointer;
	transition: transform .2s, box-shadow .2s, background .2s;
	margin: 1vmin;
	box-shadow: 0 1vmin 2vmin rgba(0, 0, 0, 0.5);
}
.tools:hover{
	transform: scale(0.9) !important;
	box-shadow: 0 0.5vmin 1vmin rgba(0, 0, 0, 0.5);
}
.tools::after{
	content: "";
	display: inline-block;
	background-image: url("https://jchabin.github.io/cars/newTrack.png");
	filter: invert(1);
	background-size: cover;
	margin-top: 5vmin;
	height: 10vmin;
	width: 10vmin;
	transition: transform .2s;
}
.tools:sel{
	background-color: #62db68;
}
#edit{
	background-color: #55db8f;
}
#cardboard::after{
	background-image: url("https://jchabin.github.io/cars/cardboard.png");
	filter: brightness(5);
}
#cardboard.sel{
	background-color: #62db68;
}
#cardboard.disabled{
	background-color: #a3a3a3 !important;
	cursor: default !important;
}
#cardboard.disabled:hover{
	background-color: #a3a3a3 !important;
	transform: none !important;
}
#cardboard{
	background-color: #db6262;
}
#help{
	background-color: #9a55db;
	font-family: Arial;
	color: white;
	font-size: 15vmin;
	text-align: center;
	line-height: 20vmin;
}
#help::after{
	display: none;
}
#start{
/* 	animation: slideleft 1s -0.25s forwards; */
	font-size: 10vmin;
	background-color: rgba(0, 0, 0, 0.5);
	display: inline-block;
	border: 1vmin solid white;
	padding: 2vmin;
	cursor: pointer;
	transition: transform .2s, box-shadow .2s;
	text-shadow: none;
	box-shadow: 0 2vmin 3vmin rgba(0, 0, 0, 0.5);
}
#start:hover{
	transform: scale(0.9);
	box-shadow: 0 0.5vmin 1vmin rgba(0, 0, 0, 0.5);
}
.button{
	border: 1vmin solid white;
	padding: 2vmin;
	font-size: 10vmin !important;
	background-color: rgba(0, 0, 0, 0.5);
	position: absolute;
	width: 80vmin;
	left: calc(50vw - 43vmin);
	text-shadow: none;
	line-height: 10vmin;
	cursor: pointer;
	box-shadow: 0 2vmin 3vmin rgba(0, 0, 0, 0.5);
	transition: transform .2s, box-shadow .2s;
}
.button:hover{
	transform: scale(0.9) !important;
	box-shadow: 0 0.5vmin 1vmin rgba(0, 0, 0, 0.5);
}
#host{
	top: calc(30vh - 8vmin);
	transform: translate3d(-100vw, 0, 0);
	transition: transform .5s ease-out, box-shadow .2s;
/* 	-webkit-transform-style: preserve-3d; */
/* 	animation: slideleft 1s -0.5s ease-out forwards; */
}
#join{
	top: calc(70vh - 8vmin);
	transform: translate3d(-100vw, 0, 0);
	transition: transform .5s ease-out, box-shadow .2s;
/* 	-webkit-transform-style: preserve-3d; */
/* 	animation: slideleft 1s ease-out forwards; */
}
.info{
	position: absolute;
	top: 0;
	left: 0;
	color: white;
	font-size: 5vmin;
	text-align: center;
	background-color: rgba(0, 0, 0, 0.5);
	width: 100%;
	border-bottom: 1vmin solid white;
	z-index: 100000;
}
.info.title{
	padding-top: 20px;
}
#code{
	text-align: center;
	font-size: 20vmin;
	text-shadow: 0 0 2vmin white;
}
#incode{
	text-align: center;
	font-size: 20vmin;
	text-shadow: 0 0 2vmin white;
	outline: none;
	border: none;
	width: 80vw;
	color: white;
	background: none;
	background-color: rgba(0, 0, 0, 0.5);
	text-transform: uppercase;
}
#startgame{
	position: absolute;
	bottom: 5vmin;
	right: 5vmin;
	color: white;
	border: 1vmin solid white;
	background-color: rgba(0, 0, 0, 0.5);
	cursor: pointer;
	font-size: 10vmin;
	padding: 2vmin;
	transition: box-shadow .2s, transform .2s;
	box-shadow: 0 2vmin 3vmin rgba(0, 0, 0, 0.5);
	z-index: 100000;
}
#startgame:hover{
	box-shadow: 0 0.5vmin 1vmin rgba(0, 0, 0, 0.5);
	transform: scale(0.9);
}
.label{
	font-family: "Press Start 2P";
	color: white;
	text-shadow: 0 0 1vmin black;
	display: inline-block;
	padding: 2vmin;
	position: absolute;
	font-size: 3vmin;
	transform: translateX(-50%) translateY(-100%);
	text-align: center;
	line-height: 4vmin;
	z-index: 0;
}
#countdown{
	font-size: 50vmin;
	height: 70vmin;
	width: 100vw;
	position: absolute;
	top: calc(50vh - 35vmin);
	color: white;
	text-shadow: 0 0 2vmin white;
	z-index: 100000;
	display: table-cell;
	vertical-align: middle;
	text-align: center;
	line-height: 23vmin;
}
#lap{
	font-size: 10vmin;
	position: absolute;
	color: white;
	text-shadow: 0 0 2vmin white;
	z-index: 100000;
	top: 3vmin;
	left: 3vmin;
}
#divider{
	height: 100vh;
	width: 4px;
	position: absolute;
	top: 0;
	left: calc(50vw - 2px);
	background-color: white;
}
.amzad{
	position: absolute;
	left: 0;
	bottom: 0;
	height: 15vmax;
	width: 30vmax;
	transform: translate3d(-50vw, 0, 0);
	transition: transform .2s;

	z-index: 0;
}
</style>

  <script>
  window.console = window.console || function(t) {};
</script>



  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>


</head>

<body translate="no" >
  <!-- <script data-ad-client="ca-pub-8222390470642566" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
<!--
  I considered putting ads on the GitHub version of this game (because it had gotten somewhat popular)
  but I decided against it, as it went against my vision for the game. I left this script tag from when
  I was testing it, to see how it would appear visually. The ads are intentionally not functional.
-->

<link href="https://fonts.googleapis.com/css?family=Monoton|Press+Start+2P" rel="stylesheet">
<!-- <div id="trackcode" class="data">
	1,-5/1,2 1,2/0,4 0,4/-1,5 -1,5/-3,6 -3,6/-7,6 -7,6/-9,5 -9,5/-10,4 -10,4/-11,2 -11,2/-11,-4 -11,-4/-10,-5 -10,-5/-8,-5 -8,-5/-7,-4 -7,-4/-7,-1 -7,-4/-6,-5 -6,-5/-4,-5 -4,-5/-3,-4 -3,-6/-3,-1 -3,-6/-2,-8 -2,-8/-1,-9 -1,-9/1,-10 1,-10/5,-10 5,-10/7,-9 7,-9/8,-8 8,-8/9,-6 9,-6/9,-1 9,-1/8,1 8,1/6,2 6,2/4,2 4,2/2,1 2,1/1,-1 -1,-5/0,-7 0,-7/2,-8 2,-8/4,-8 4,-8/6,-7 6,-7/7,-5 7,-5/7,-1 7,-1/6,0 6,0/4,0 4,0/3,-1 3,-1/3,-4 -1,-5/-1,1 -1,1/-2,3 -2,3/-4,4 -4,4/-6,4 -6,4/-8,3 -8,3/-9,1 -9,1/-9,-3 -9,0/-8,1 -8,1/-6,1 -6,1/-5,0 -5,0/-5,-3 -5,0/-4,1 -4,1/-2,1 -2,1/-1,0 1,-5/2,-6 2,-6/4,-6 4,-6/5,-5 5,-5/5,-2
</div> -->
<div id="trackcode" class="data">
1,5/0,7 0,7/-1,8 -1,8/-3,9 -3,9/-7,9 -7,9/-9,8 -9,8/-10,7 -10,7/-11,5 -6,7/-4,7 -4,7/-2,6 -2,6/-1,4 -6,7/-8,6 -8,6/-9,4 -1,4/-1,0 1,0/1,5 -11,5/-11,0 -11,0/-10,-1 -10,-1/-8,-1 -8,-1/-7,0 -7,0/-7,2 -9,3/-8,4 -8,4/-6,4 -6,4/-5,3 -5,3/-5,1 -9,1/-9,4 -5,3/-4,4 -4,4/-2,4 -2,4/-1,3 -7,0/-6,-1 -6,-1/-4,-1 -4,-1/-3,0 -3,0/-3,2 -1,0/-1,-2 -1,-2/0,-4 0,-4/2,-5 2,-5/4,-5 4,-5/6,-4 6,-4/7,-2 -3,0/-3,-3 -3,-3/-2,-5 -2,-5/-1,-6 -1,-6/1,-7 1,-7/5,-7 5,-7/7,-6 7,-6/8,-5 8,-5/9,-3 9,-3/9,2 9,2/8,4 8,4/6,5 6,5/4,5 4,5/2,4 2,4/1,2 7,-2/7,2 7,2/6,3 6,3/4,3 4,3/3,2 4,-3/2,-3 2,-3/1,-2 1,-2/1,0 4,-3/5,-2 5,-2/5,1 3,2/3,-1 |-1,3/1,3 6,-4/7,-6 |-7,5 -5,6 -4,5 2,6 1,8 3,9 4,6 3,7 -3,10 -4,12 -10,11 -12,8 -14,8 -12,6 -7,10 -12,2 -15,3 -13,-1 -10,-4 -8,-2 -6,-4 -4,-3 -11,-2 -8,-3 -4,-5 -3,-6 -5,-2 0,-8 -2,-8 -4,-8 -5,-6 -3,-10 2,-9 4,-8 5,-10 6,-8 10,-7 8,-7 9,-11 9,-5 15,-4 11,-2 11,-1 10,3 16,2 12,1 8,6 7,9 6,6 -8,-7 -13,-7 -13,-4 -15,-4 -17,0 |1,3,6/22 0,3,8/55 -2,3,9/77 -8,3,9/115 -10,3,8/148 -11,3,6/166 -8,3,4/-86 -7,3,4/-83 -6,3,4/-90 -10,3,-1/-83 -9,3,-1/-88 -8,3,-1/-90 -6,3,-1/-89 -5,3,-1/-89 -4,3,-1/-89 -4,3,4/-90 -3,3,4/-90 -2,3,4/265 -3,3,-4/194 -2,3,-6/218 0,3,-7/262 6,3,-7/-69 8,3,-6/-42 9,3,-4/-16 9,3,4/40 8,3,5/70 2,3,5/135 3,3,6/122|
</div>
<div id="fore">
	<div id="version">v1.1.3</div>
	<div class="title" id="title">Online Racing Game!</div>
	<div class="menuitem title">Pick a name:<br/><input id="name" class="title" ontouchstart="this.focus()" placeholder="Name"></input></div>
	<script>
		var color, updateColor, menu2, host, joinGame, codeCheck;
	</script>
<!-- 	<div class="amzad" id="amzn-assoc-ad-36be7933-d9ec-4909-a713-60b9ce598691"></div><script async src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US&adInstanceId=36be7933-d9ec-4909-a713-60b9ce598691"></script> -->
	<div class="menuitem title">Choose a color:<br/><div id="colorpicker" ontouchstart="event.touches[0].buttons = 1; this.onmousemove(event.touches[0])" ontouchmove="event.touches[0].buttons = 1; this.onmousemove(event.touches[0])" onmousedown="this.onmousemove(event)" onmousemove="if(event.buttons == 1){ var x = event.clientX - this.getBoundingClientRect().left; x = Math.min(this.clientWidth, Math.max(0, x)); color = Math.floor(x / this.clientWidth * 360); updateColor(); }"><div id="slider"></div></div></div>
	<div class="menuitem title"><div id="start" onclick="menu2()">Start!</div></div>
	<div id="settings" ontouchstart="this.onclick()" onclick="this.parentNode.children[7].className = this.parentNode.children[7].className == 'sel' ? '' : 'sel';"></div>
	<div id="toolbar">
		<div class="tools" id="edit" ontouchstart="this.onclick()" onclick="window.open('editor')"></div>
		<div class="tools" id="cardboard" ontouchstart="this.onclick()" onclick="this.className = this.className == 'tools disabled' ? this.className : this.className == 'tools sel' ? 'tools' : 'tools sel';"></div>
		<div class="tools" id="help" ontouchstart="this.onclick()" onclick="window.open('help')">?</div>
	</div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.min.js'></script>
<script src='https://www.gstatic.com/firebasejs/4.6.2/firebase.js'></script>
<script src='https://jchabin.github.io/VR-ThreeJS-Test/ThreeJS/DeviceOrientationControls.js'></script>
<script src='https://jchabin.github.io/VR-ThreeJS-Test/ThreeJS/StereoEffect.js'></script>
      <script id="rendered-js" >
var SPEED = 0.004;
var CAMERA_LAG = 0.9;
var COLLISION = 1.1;
var BOUNCE = 0.7;
var mapscale = 5;
var shiny = false;
var VR = false;
var BOUNCE_CORRECT = 0.01;
var WALL_SIZE = 1.2;
function MODS() {

}
setTimeout(function () {
  document.getElementById("title").style.transform = "none";
}, 500);
setTimeout(function () {
  document.getElementsByClassName("menuitem")[0].style.transform = "none";
}, 1000);
setTimeout(function () {
  document.getElementsByClassName("menuitem")[1].style.transform = "none";
}, 1200);
setTimeout(function () {
  document.getElementsByClassName("menuitem")[2].style.transform = "none";
}, 1400);
setTimeout(function () {
  document.getElementById("settings").style.transform = "none";
}, 1600);
// setTimeout(function(){
// 	document.getElementsByClassName("amzad")[0].style.transform = "none";
// }, 1800);
var connected = false;
var config = {
  apiKey: "AIzaSyDiJsMLlix5o9XqPW1EpeBvuA15XNjlR8M",
  authDomain: "car-game-a86b9.firebaseapp.com",
  databaseURL: "https://car-game-a86b9.firebaseio.com",
  projectId: "car-game-a86b9",
  storageBucket: "car-game-a86b9.appspot.com",
  messagingSenderId: "722396856191" };

firebase.initializeApp(config);
var database = firebase.database();
database.ref("/testServer").once("value", function (e) {
  if (connected) {
    database = firebase.apps[0].database();
    console.log("Just kidding, the original one was working!");
  }
  connected = true;
});
setTimeout(function () {
  if (!connected) {
    connected = true;
    console.log("Regular database not working, using backup database...");
    config = {
      apiKey: "AIzaSyCsqpn0aTDqU8ffGVE284fmSEOTK2tOgq8",
      authDomain: "car-game-backup.firebaseapp.com",
      databaseURL: "https://car-game-backup.firebaseio.com",
      projectId: "car-game-backup",
      storageBucket: "car-game-backup.appspot.com",
      messagingSenderId: "1015722732476" };

    firebase.initializeApp(config, "backup");
    database = firebase.apps[1].database();
  }
}, 2000);

function forceScroll() {
  requestAnimationFrame(forceScroll);
  window.scrollTo(0, 0);
}
forceScroll();

//var database = firebase.database();

var camera,renderer,scene,renderer2,scene2,labels = [];
scene = new THREE.Scene();
renderer = new THREE.WebGLRenderer();
renderer.setPixelRatio(window.devicePixelRatio);
renderer.setSize(window.innerWidth, window.innerHeight);
var mobile = navigator.userAgent.match("Mobile") != null || navigator.userAgent.match("Linux;") != null;
if (mobile)
window.onclick = function () {
  function reactOrientation(e) {
    var angle = screen.msOrientation || screen.mozOrientation || (screen.orientation || {}).angle == 0 ? e.gamma : screen.msOrientation || screen.mozOrientation || (screen.orientation || {}).angle < 0 ? -e.beta : e.beta;
    // document.body.innerHTML = angle;
    me.data.steer = Math.max(Math.min(-angle / 180 * Math.PI, Math.PI / 6), -Math.PI / 6);
  }

  // code stolen/borrowed from https://dev.to/li/how-to-requestpermission-for-devicemotion-and-deviceorientation-events-in-ios-13-46g2

  // i hope this works

  if (typeof DeviceOrientationEvent.requestPermission === 'function') {
    DeviceOrientationEvent.requestPermission("The game needs to access phone tilt so you can steer your car.").then(permissionState => {
      if (permissionState === 'granted')
      window.addEventListener('deviceorientation', reactOrientation);else

      alert("Permission denied");
    }).catch(alert);
  } else {
    window.addEventListener('deviceorientation', reactOrientation);
  }
  window.onclick = null;
  document.getElementById("start").ontouchstart = function () {this.onclick();};
};
if (!mobile) {
  renderer.shadowMap.enabled = false;
  renderer.shadowMap.autoUpdate = false;
  renderer.shadowMap.needsUpdate = true;
  renderer.shadowMap.type = THREE.PCFSoftShadowMap;
  document.getElementById("cardboard").className += " disabled";
  console.log(mobile);
}
var element = renderer.domElement;
var shinymat;

window.ontouchstart = function (e) {
  if (window.onclick == null)
  e.preventDefault();
};
window.ontouchmove = function (e) {
  if (window.onclick == null)
  e.preventDefault();
};
window.ontouchend = function (e) {
  if (window.onclick == null)
  e.preventDefault();
};
// window.onclick = function(e){
// 	toggleFullScreen();
// }
function toggleFullScreen() {
  var doc = window.document;
  var docEl = doc.documentElement;

  var requestFullScreen = docEl.requestFullscreen || docEl.mozRequestFullScreen || docEl.webkitRequestFullScreen || docEl.msRequestFullscreen;
  var cancelFullScreen = doc.exitFullscreen || doc.mozCancelFullScreen || doc.webkitExitFullscreen || doc.msExitFullscreen;

  if (!doc.fullscreenElement && !doc.mozFullScreenElement && !doc.webkitFullscreenElement && !doc.msFullscreenElement) {
    requestFullScreen.call(docEl);
  } else
  {
    cancelFullScreen.call(doc);
  }
  window.scrollTo(0, 1);
}

var name,code,players = {},me = {},gameStarted = false,gameSortaStarted = false,left = false,right = false,lap;
var carPos = [
{ x: 0, y: 0 },
{ x: 2, y: 0 },
{ x: -2, y: 0 },
{ x: 0, y: -3 },
{ x: -2, y: -3 },
{ x: 2, y: -3 },
{ x: 0, y: -6 },
{ x: 2, y: -6 },
{ x: -2, y: -6 },
{ x: 0, y: -9 },
{ x: 2, y: -9 },
{ x: -2, y: -9 },
{ x: 0, y: -12 },
{ x: -2, y: -12 },
{ x: 2, y: -12 },
{ x: 0, y: -15 },
{ x: 2, y: -15 },
{ x: -2, y: -15 }];

color = Math.floor(Math.random() * 360);
var f = document.getElementById("fore");
var s = document.getElementById("slider");
updateColor = function () {
  s.style.marginLeft = color / 360 * 80 + "vw";
  s.style.backgroundColor = "hsl(" + color + ", 100%, 50%)";
  document.body.style.backgroundColor = "hsl(" + color + ", 50%, 50%)";
};
updateColor();

menu2 = function () {
  if (document.getElementById("name").value == "")
  name = "Win with No Name","Coupon Code, H546j";else

  name = document.getElementById("name").value;
  VR = document.getElementById("cardboard").className == "tools sel";
  f.style.transform = "translate3d(0, -100vh, 0)";
  setTimeout(function () {
    f.innerHTML = "<div class='menuitem title button' id='host' ontouchstart='this.click()' onclick='host()'>Host a game</div><div class='menuitem title button' ontouchstart='this.click()' id='join' onclick='joinGame()'>Join a game</div>";
    f.style.transform = "none";
    setTimeout(function () {
      document.getElementById("host").style.transform = "none";
      setTimeout(function () {
        document.getElementById("host").style.transition = "transform .2s, box-shadow .2s";
      }, 500);
    }, 500);
    setTimeout(function () {
      document.getElementById("join").style.transform = "none";
      setTimeout(function () {
        document.getElementById("join").style.transition = "transform .2s, box-shadow .2s";
      }, 500);
    }, 1000);
  }, 500);
};

host = function () {
  document.getElementById("host").onclick = null;
  f.style.transform = "translate3d(0, -100vh, 0)";
  setTimeout(function () {
    f.innerHTML = "<div class='info title'>Use this code to join the game!<div id='code'>Loading...</div></div><div id='startgame' class='title' onclick='startGame()' ontouchstart='this.click()'>Start!</div>";
    if (VR)
    f.innerHTML += "<div id='divider'></div>";
    f.appendChild(element);
    f.style.transform = "none";
    getCode();
  }, 1000);

  function getCode() {
    code = "";
    var letters = "ABCDEFGHIJKLMMNOPQRSTUVWXYZ";
    for (var i = 0; i < 4; i++)
    code += letters[Math.floor(Math.random() * letters.length)];
    database.ref(code).once("value", function (codeCheck) {
      console.log(codeCheck.val());
      if (codeCheck.val() == null || codeCheck.val().status == -1) {
        console.log(code);
        document.getElementById("code").innerHTML = code;

        database.ref(code).set({
          status: 0,
          players: {},
          map: document.getElementById("trackcode").innerHTML });


        database.ref(code + "/players").on("child_added", function (p) {
          console.log(p);
          players[p.ge.path.n[2]] = {
            data: p.val(),
            model: new THREE.Mesh(new THREE.BoxBufferGeometry(1, 1, 2)) };

          var pl = players[p.ge.path.n[2]];
          pl.model.position.set(pl.data.x, 0.6, pl.data.y);
          pl.model.material = shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("hsl(" + pl.data.color + ", 100%, 50%)") });
          var wheel = new THREE.Mesh(
          new THREE.CylinderBufferGeometry(0.5, 0.5, 0.2, 10),
          shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("#222") }));

          var w1 = wheel.clone();
          w1.position.set(0.6, -0.1, 0.7);
          w1.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w1);
          var w2 = wheel.clone();
          w2.position.set(-0.6, -0.1, 0.7);
          w2.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w2);
          var w3 = wheel.clone();
          w3.position.set(0.6, -0.1, -0.7);
          w3.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w3);
          var w4 = wheel.clone();
          w4.position.set(-0.6, -0.1, -0.7);
          w4.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w4);
          var label = document.createElement("DIV");
          label.className = "label";
          label.innerHTML = pl.data.name + "<br/>|";
          pl.label = label;
          label.position = pl.model.position;
          console.log(label);
          f.appendChild(label);
          labels.push(label);
          pl.model.receiveShadow = true;
          scene.add(pl.model);

          if (p.ge.path.n[2] == me.ref.path.n[2]) {
            me.label = pl.label;
            me.model = pl.model;
            me.label.innerHTML = "";
          }
        });

        database.ref(code + "/players").on("child_changed", function (p) {
          // console.log(p);
          players[p.ge.path.n[2]].data = p.val();
        });

        me.ref = database.ref(code + "/players").push();
        me.data = {
          x: 0,
          y: 0,
          xv: 0,
          yv: 0,
          dir: 0,
          steer: 0,
          color: color,
          name: name,
          checkpoint: 1,
          lap: 0,
          collision: {} };

        me.ref.set(me.data);

        database.ref(code + "/status").on("value", function (v) {
          v = v.val();
          if (v == 1) {
            document.getElementsByClassName("info")[0].outerHTML = "";
            document.getElementById("startgame").outerHTML = "";

            gameStarted = true;
            gameSortaStarted = true;

            var countDown = document.createElement("DIV");
            countDown.innerHTML = "3";
            countDown.className = "title";
            countDown.id = "countdown";
            f.appendChild(countDown);

            lap = document.createElement("DIV");
            lap.innerHTML = "1/3";
            lap.className = "title";
            lap.id = "lap";
            f.appendChild(lap);

            setTimeout(function () {
              countDown.innerHTML = "2";
            }, 1000);

            setTimeout(function () {
              countDown.innerHTML = "1";
            }, 2000);

            setTimeout(function () {
              countDown.innerHTML = "GO!";
              gameSortaStarted = false;
            }, 3000);

            setTimeout(function () {
              countDown.innerHTML = "";
            }, 4000);
          }
        });
      } else
      getCode();
    });
  }

  join();
};

joinGame = function () {
  document.getElementById("join").onclick = null;
  f.style.transform = "translate3d(0, -100vh, 0)";
  setTimeout(function () {
    f.innerHTML = "<div class='info title'>Enter a code to join a game!<input id='incode' class='title' onkeyup='codeCheck(event)' ontouchstart='this.focus()'></input></div>";
    if (VR)
    f.innerHTML += "<div id='divider'></div>";
    f.appendChild(element);
    f.style.transform = "none";
  }, 1000);
  join();
};

var map, trees, signs, startc;

function deleteMap() {
  while (map.children.length > 0)
  map.remove(map.children[0]);
  scene.remove(map);
  while (trees.children.length > 0)
  trees.remove(trees.children[0]);
  scene.remove(trees);
  while (signs.children.length > 0)
  signs.remove(signs.children[0]);
  scene.remove(signs);
  while (startc.children.length > 0)
  startc.remove(startc.children[0]);
  scene.remove(startc);
}

function loadMap() {
  var racedata = document.getElementById("trackcode").innerHTML.trim().split("|")[0].trim().split(" ");
  var material = new THREE.MeshLambertMaterial({ color: new THREE.Color(0xf48342) });
  //var mapscale = 7;
  map = new THREE.Object3D();
  for (var i = 0; i < racedata.length; i++) {
    if (racedata[i] == "")
    continue;
    var point1 = new THREE.Vector2(parseInt(racedata[i].split("/")[0].split(",")[0]), parseInt(racedata[i].split("/")[0].split(",")[1]));
    var point2 = new THREE.Vector2(parseInt(racedata[i].split("/")[1].split(",")[0]), parseInt(racedata[i].split("/")[1].split(",")[1]));
    var wall = new THREE.Mesh(
    new THREE.BoxBufferGeometry(point1.distanceTo(point2) * mapscale + 0.3, 1.5, 0.3),
    material);

    var angle = Math.atan2(point1.y - point2.y, point1.x - point2.x);
    wall.position.set(-(point1.x + point2.x) / 2 * mapscale, 0.75, (point1.y + point2.y) / 2 * mapscale);
    wall.rotation.set(0, angle, 0, "YXZ");
    var plane = new THREE.Plane(new THREE.Vector3(0, 0, 1).applyAxisAngle(new THREE.Vector3(0, 1, 0), angle));
    wall.plane = plane;
    wall.width = point1.distanceTo(point2) * mapscale;
    wall.p1 = point1.multiply(new THREE.Vector2(-mapscale, mapscale));
    wall.p2 = point2.multiply(new THREE.Vector2(-mapscale, mapscale));
    wall.castShadow = true;
    wall.receiveShadow = true;
    map.add(wall);
  }
  scene.add(map);

  trees = new THREE.Object3D();
  var tree = new THREE.Mesh(
  new THREE.CylinderBufferGeometry(0, 4, 15),
  new THREE.MeshLambertMaterial({ color: new THREE.Color("#1bad2c") }));

  var treedata = document.getElementById("trackcode").innerHTML.trim().split("|")[2].trim().split(" ");
  for (var i = 0; i < treedata.length; i++) {
    if (treedata[i] == "")
    continue;
    var t = tree.clone();
    t.position.set(-parseInt(treedata[i].split(",")[0]) * mapscale, 0, parseInt(treedata[i].split(",")[1]) * mapscale);
    var s = Math.random() + 1;
    t.scale.set(s, s, s);
    t.castShadow = true;
    t.receiveShadow = true;
    trees.add(t);
  }
  scene.add(trees);

  signs = new THREE.Object3D();
  var sign = new THREE.Mesh(
  new THREE.ConeBufferGeometry(0.7, 2, 5),
  new THREE.MeshLambertMaterial({ color: new THREE.Color("#f00") }));

  var signdata = document.getElementById("trackcode").innerHTML.trim().split("|")[3].trim().split(" ");
  for (var i = 0; i < signdata.length; i++) {
    if (signdata[i] == "")
    continue;
    var s = sign.clone();
    var da = signdata[i].split("/");
    s.position.set(-parseFloat(da[0].split(",")[0]) * mapscale, parseFloat(da[0].split(",")[1]) + 1, parseFloat(da[0].split(",")[2]) * mapscale);
    s.rotation.set(Math.PI / 2, parseInt(da[1]) / 180 * Math.PI, 0, "YXZ");
    s.castShadow = true;
    s.receiveShadow = true;
    signs.add(s);
  }
  scene.add(signs);

  var startdata = document.getElementById("trackcode").innerHTML.trim().split("|")[1].trim().split(" ");
  startc = new THREE.Object3D();
  for (var i = 0; i < startdata.length; i++) {
    if (startdata[i] == "")
    continue;
    var point1 = new THREE.Vector2(parseInt(startdata[i].split("/")[0].split(",")[0]), parseInt(startdata[i].split("/")[0].split(",")[1]));
    var point2 = new THREE.Vector2(parseInt(startdata[i].split("/")[1].split(",")[0]), parseInt(startdata[i].split("/")[1].split(",")[1]));
    var wall = new THREE.Mesh(
    new THREE.BoxBufferGeometry(point1.distanceTo(point2) * mapscale, 0.1, 1),
    new THREE.MeshLambertMaterial({ color: new THREE.Color(i == 0 ? "#2580db" : "#db2525") }));

    var angle = Math.atan2(point1.y - point2.y, point1.x - point2.x);
    wall.position.set(-(point1.x + point2.x) / 2 * mapscale, 0, (point1.y + point2.y) / 2 * mapscale);
    wall.rotation.set(0, angle, 0, "YXZ");
    var plane = new THREE.Plane(new THREE.Vector3(0, 0, 1).applyAxisAngle(new THREE.Vector3(0, 1, 0), angle));
    wall.plane = plane;
    wall.width = point1.distanceTo(point2) * mapscale;
    wall.castShadow = true;
    wall.receiveShadow = true;
    startc.add(wall);
  }
  scene.add(startc);
  return document.getElementById("trackcode").innerHTML.trim().split("|")[4];
}

function join() {
  var cubeCamera = new THREE.CubeCamera(1, 100, 128);
  scene.add(cubeCamera);

  shinymat = new THREE.MeshBasicMaterial({ envMap: cubeCamera.renderTarget });

  eval(loadMap());

  scene.background = new THREE.Color(0x7fb0ff);

  camera = new THREE.PerspectiveCamera(
  90,
  window.innerWidth / window.innerHeight,
  0.01,
  1000);


  camera.position.set(0, 3, 10);
  scene.add(camera);

  var player = new THREE.Object3D();
  player.position.set(0, 0, 0);

  camera.lookAt(player.position);

  scene.add(player);
  var stripes = new THREE.TextureLoader().load("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAACCAYAAACZgbYnAAAAEklEQVQYV2NgYGD4z/D/////AA/6BPwHejn9AAAAAElFTkSuQmCC");
  stripes.magFilter = THREE.NearestFilter;
  stripes.wrapS = THREE.RepeatWrapping;
  stripes.wrapT = THREE.RepeatWrapping;
  stripes.repeat.set(100, 100);
  var ground = new THREE.Mesh(
  new THREE.PlaneBufferGeometry(1000, 1000),
  new THREE.MeshLambertMaterial({ color: new THREE.Color(0x57c115), emissive: new THREE.Color(0x0f0f0f), emissiveMap: stripes }));

  ground.rotation.set(-Math.PI / 2, 0, 0);
  ground.receiveShadow = true;
  scene.add(ground);

  for (var i = 0; i < 100; i++) {
    var cube = new THREE.Mesh(
    new THREE.BoxBufferGeometry(100, 100, 100),
    new THREE.MeshLambertMaterial({ color: new THREE.Color("#888"), side: THREE.DoubleSide }));

    var dist = Math.random() * 250 + 250;
    var dir = Math.random() * Math.PI * 2;
    cube.position.set(dist * Math.sin(dir), 0, dist * Math.cos(dir));
    cube.rotation.set(Math.random() * Math.PI * 2, Math.random() * Math.PI * 2, Math.random() * Math.PI * 2);
    scene.add(cube);
  }

  var light = new THREE.DirectionalLight(0xffffff, 0.7);
  light.position.set(3000, 2000, -2000);
  // light.castShadow = !mobile;
  light.shadow.mapSize.width = 2048;
  light.shadow.mapSize.height = 2048;
  light.shadow.camera.near = 3000;
  light.shadow.camera.far = 5000;
  light.shadow.camera.top = 100;
  light.shadow.camera.bottom = -100;
  light.shadow.camera.left = -100;
  light.shadow.camera.right = 120;
  light.shadow.bias = 0.00002;
  scene.add(light);
  scene.add(new THREE.AmbientLight(0xffffff, 0.5));

  //scene.add(new THREE.AmbientLight(0x404040));

  var x = 0;
  var ray = new THREE.Raycaster();
  function toXYCoords(pos) {
    pos = pos.clone();
    pos.y += 0.5;
    var vector = pos.project(camera);
    vector.x = (vector.x + 1) / 2 * window.innerWidth;
    vector.y = -(vector.y - 1) / 2 * window.innerHeight;
    return vector;
  }
  var windowsize = { x: window.innerWidth, y: window.innerHeight };

  var ray = new THREE.Raycaster();
  ray.near = 0;
  ray.far = 1;

  var ren = renderer;
  var controls;
  if (VR) {
    var effect = new THREE.StereoEffect(renderer);
    effect.setSize(window.innerWidth, window.innerHeight);
    effect.setEyeSeparation(0.7);
    ren = effect;
    controls = new THREE.DeviceOrientationControls(camera);
  }

  var lastTime = performance.now();
  function render(timestamp) {
    requestAnimationFrame(render);
    var timepassed = timestamp - lastTime;
    lastTime = timestamp;
    var warp = timepassed / 16;

    if (gameStarted) {
      if (!mobile) {
        if (left)
        me.data.steer = Math.PI / 6;
        if (right)
        me.data.steer = -Math.PI / 6;
        if (!(left ^ right))
        me.data.steer = 0;
      }
      if (VR)
      me.data.steer = camera.rotation.z;
      me.data.steer = Math.max(-Math.PI / 6, Math.min(Math.PI / 6, me.data.steer));

      players[me.ref.path.n[2]].data = me.data;

      if (!gameSortaStarted) {
        for (var p in players) {
          var play = players[p];

          play.data.dir += play.data.steer / 10 * warp;

          play.data.xv += Math.sin(play.data.dir) * SPEED * warp;
          play.data.yv += Math.cos(play.data.dir) * SPEED * warp;

          play.data.xv *= Math.pow(0.99, warp);
          play.data.yv *= Math.pow(0.99, warp);

          play.data.x += play.data.xv * warp;
          play.data.y += play.data.yv * warp;

          play.model.position.x = play.data.x + play.data.xv;
          play.model.position.z = play.data.y + play.data.yv;
          play.model.rotation.y = play.data.dir;

          play.model.children[0].rotation.z = Math.PI / 2 - play.data.steer;
          play.model.children[1].rotation.z = Math.PI / 2 - play.data.steer;

          // function checkCubes(angle){
          // 	ray.set(play.model.position, angle);
          // 	var inter = ray.intersectObjects(blocks);
          // 	if(inter.length > 0 && inter[0].distance < 0.5){
          // 		// console.log(inter[0]);
          // 		var vel = new THREE.Vector3(play.data.xv, 0, play.data.yv);
          // 		vel.reflect(inter[0].face.normal);
          // 		play.data.xv = vel.x * 0.3;
          // 		play.data.yv = vel.z * 0.3;
          // 		play.data.x += play.data.xv;
          // 		play.data.y += play.data.yv;
          // 	}
          // }
          // checkCubes(new THREE.Vector3(0, 0, 1));
          // checkCubes(new THREE.Vector3(0, 0, -1));
          // checkCubes(new THREE.Vector3(1, 0, 0));
          // checkCubes(new THREE.Vector3(-1, 0, 0));

          for (var w in map.children) {
            var wall = map.children[w];
            var posi = new THREE.Vector2(play.data.x, play.data.y);
            if (Math.abs(wall.plane.distanceToPoint(play.model.position.clone().sub(wall.position))) < WALL_SIZE) {
              if (wall.position.clone().distanceTo(play.model.position) < wall.width / 2) {
                var vel = new THREE.Vector3(play.data.xv, 0, play.data.yv);
                vel.reflect(wall.plane.normal);
                play.data.xv = vel.x + BOUNCE_CORRECT * wall.plane.normal.x * Math.sign(wall.plane.normal.dot(play.model.position.clone().sub(wall.position)));
                play.data.yv = vel.z + BOUNCE_CORRECT * wall.plane.normal.z * Math.sign(wall.plane.normal.dot(play.model.position.clone().sub(wall.position)));
                //var dir = Math.normalize();
                while (Math.abs(wall.plane.distanceToPoint(new THREE.Vector3(play.data.x, 0, play.data.y).sub(wall.position))) < WALL_SIZE) {
                  play.data.x += play.data.xv;
                  play.data.y += play.data.yv;
                }
                play.data.xv *= BOUNCE;
                play.data.yv *= BOUNCE;
              }
            }
            if (posi.distanceTo(wall.p1) < WALL_SIZE + 0.1) {
              // console.log("o1");
              var norm = posi.clone().sub(wall.p1);
              norm = new THREE.Vector3(norm.x, 0, norm.y);
              norm.normalize();
              var vel = new THREE.Vector3(play.data.xv, 0, play.data.yv);
              vel.reflect(norm);
              play.data.xv = vel.x + norm.x * BOUNCE_CORRECT * 1;
              play.data.yv = vel.z + norm.z * BOUNCE_CORRECT * 1;
              while (new THREE.Vector2(play.data.x, play.data.y).distanceTo(wall.p1) < WALL_SIZE + 0.1) {
                play.data.x += play.data.xv;
                play.data.y += play.data.yv;
              }
              play.data.xv *= BOUNCE;
              play.data.yv *= BOUNCE;
            }
            if (posi.distanceTo(wall.p2) < WALL_SIZE + 0.1) {
              // console.log("o2");
              var norm = posi.clone().sub(wall.p2);
              norm = new THREE.Vector3(norm.x, 0, norm.y);
              norm.normalize();
              var vel = new THREE.Vector3(play.data.xv, 0, play.data.yv);
              vel.reflect(norm);
              play.data.xv = vel.x + norm.x * BOUNCE_CORRECT * 1;
              play.data.yv = vel.z + norm.z * BOUNCE_CORRECT * 1;
              while (new THREE.Vector2(play.data.x, play.data.y).distanceTo(wall.p2) < WALL_SIZE + 0.1) {
                play.data.x += play.data.xv;
                play.data.y += play.data.yv;
              }
              play.data.xv *= BOUNCE;
              play.data.yv *= BOUNCE;
            }
          }

          for (var i in startc.children) {
            var cp = startc.children[i];
            if (Math.abs(cp.plane.distanceToPoint(play.model.position.clone().sub(cp.position))) < 1) {
              if (cp.position.clone().distanceTo(play.model.position) < cp.width / 2 + 1) {
                // console.log(i);
                if (i == 0) {
                  if (play.data.checkpoint == 1) {
                    play.data.checkpoint = 0;
                    play.data.lap++;
                  }
                } else
                play.data.checkpoint = 1;
              }
            }
          }

          if (play.data.lap > 3) {
            document.getElementById("countdown").style.fontSize = "25vmin";
            document.getElementById("countdown").innerHTML = play.data.name + " Won!";
          }

          for (var pl in players) {
            if (play != players[pl] && play.model.position.distanceTo(players[pl].model.position) < 2) {
              var ply = players[pl];
              var temp = new THREE.Vector2(play.data.xv, play.data.yv);
              var temp2 = new THREE.Vector2(ply.data.xv, ply.data.yv);
              ply.data.xv -= temp.x;
              ply.data.yv -= temp.y;
              play.data.xv -= temp2.x;
              play.data.yv -= temp2.y;
              var norm = new THREE.Vector2(play.data.x, play.data.y).sub(new THREE.Vector2(ply.data.x, ply.data.y));
              norm = new THREE.Vector3(norm.x, 0, norm.y);
              norm.normalize();
              var vel = new THREE.Vector3(play.data.xv, 0, play.data.yv);
              var vel2 = new THREE.Vector3(ply.data.xv, 0, ply.data.yv);
              vel.reflect(norm);
              vel2.reflect(norm);
              ply.data.xv += COLLISION * vel2.x;
              ply.data.yv += COLLISION * vel2.z;
              play.data.xv += COLLISION * vel.x;
              play.data.yv += COLLISION * vel.z;
              ply.data.xv += temp.x;
              ply.data.yv += temp.y;
              play.data.xv += temp2.x;
              play.data.yv += temp2.y;
              while (new THREE.Vector2(play.data.x, play.data.y).distanceTo(new THREE.Vector2(ply.data.x, ply.data.y)) < 2) {
                play.data.x += play.data.xv;
                play.data.y += play.data.yv;
              }
            }
          }

          if (play.model.position.distanceTo(new THREE.Vector3()) > 200) {
            play.data.x = 0;
            play.data.y = 0;
          }
        }
      }

      var target = new THREE.Vector3(
      me.model.position.x + Math.sin(-me.model.rotation.y) * 5,
      3,
      me.model.position.z + -Math.cos(-me.model.rotation.y) * 5);

      camera.position.set(
      camera.position.x * Math.pow(CAMERA_LAG, warp) + target.x * (1 - Math.pow(CAMERA_LAG, warp)),
      3,
      camera.position.z * Math.pow(CAMERA_LAG, warp) + target.z * (1 - Math.pow(CAMERA_LAG, warp)));

      camera.lookAt(me.model.position);

      me.ref.set(me.data);

      lap.innerHTML = me.data.lap <= 3 ? me.data.lap + "/3" : "";
    } else {
      camera.position.set(50 * Math.sin(x), 20, 50 * Math.cos(x));
      camera.lookAt(player.position);
    }

    x += 0.01;

    camera.updateMatrix();
    camera.updateMatrixWorld();
    camera.updateProjectionMatrix();
    var frustum = new THREE.Frustum();
    frustum.setFromMatrix(new THREE.Matrix4().multiplyMatrices(camera.projectionMatrix, camera.matrixWorldInverse));
    for (var i = 0; i < labels.length; i++) {
      var label = labels[i];
      if (frustum.containsPoint(label.position) && !VR) {
        var vec = toXYCoords(label.position);
        label.style.left = vec.x + "px";
        label.style.top = vec.y + "px";
        label.style.zIndex = 99999 - Math.floor(camera.position.distanceTo(label.position) * 10);
        label.style.display = "inline-block";
      } else
      label.style.display = "none";
    }

    if (windowsize.x != window.innerWidth || windowsize.y != window.innerHeight) {
      windowsize = { x: window.innerWidth, y: window.innerHeight };
      onWindowResize();
    }

    if (shiny) {
      me.model.material = shinymat;
      me.model.visible = false;
      cubeCamera.updateCubeMap(renderer, scene);
      cubeCamera.position.copy(me.model.position);
      me.model.visible = true;
    }
    if (VR) {
      var a = camera.rotation.y;
      controls.update();
      camera.rotation.y += a - Math.PI / 2;
    }
    ren.render(scene, camera);
    MODS();
  }

  render(performance.now());

  window.addEventListener("resize", onWindowResize, false);
  window.addEventListener("orientationchange", onWindowResize, false);

  function onWindowResize() {
    function orientCamera() {
      camera.aspect = window.innerWidth / window.innerHeight;
      renderer.setSize(window.innerWidth, window.innerHeight);
    }
    orientCamera();
    setTimeout(orientCamera, 0);
  }
}
codeCheck = function () {
  var incode = document.getElementById("incode");
  if (incode.value.length == 4) {
    incode.onkeyup = null;
    code = incode.value.toUpperCase();
    database.ref(code).once("value", function (cc) {
      if (typeof cc.val() != "undefined" && cc.val() != null && cc.val().status === 0) {
        document.getElementsByClassName("info")[0].innerHTML = "<div class='info title'>Waiting for the game to start...<div id='code'>" + code + "</div></div>";
        var playerCount = 0;
        for (var p in cc.val().players) {
          playerCount++;
          console.log(p);
          players[p] = {
            data: cc.val().players[p],
            model: new THREE.Mesh(new THREE.BoxBufferGeometry(1, 1, 2)) };

          var pl = players[p];
          pl.model.position.set(pl.data.x, 0.6, pl.data.y);
          pl.model.material = shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("hsl(" + pl.data.color + ", 100%, 50%)") });
          var wheel = new THREE.Mesh(
          new THREE.CylinderBufferGeometry(0.5, 0.5, 0.2, 10),
          shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("#222") }));

          var w1 = wheel.clone();
          w1.position.set(0.6, -0.1, 0.7);
          w1.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w1);
          var w2 = wheel.clone();
          w2.position.set(-0.6, -0.1, 0.7);
          w2.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w2);
          var w3 = wheel.clone();
          w3.position.set(0.6, -0.1, -0.7);
          w3.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w3);
          var w4 = wheel.clone();
          w4.position.set(-0.6, -0.1, -0.7);
          w4.rotation.set(Math.PI / 2, 0, Math.PI / 2);
          pl.model.add(w4);
          var label = document.createElement("DIV");
          label.className = "label";
          label.innerHTML = pl.data.name.substring(0, 50) + "<br/>|";
          pl.label = label;
          label.position = pl.model.position;
          console.log(label);
          f.appendChild(label);
          labels.push(label);
          pl.model.receiveShadow = true;
          scene.add(pl.model);
        }
        database.ref(code + "/players").on("child_added", function (p) {
          if (typeof players[p.ge.path.n[2]] == "undefined") {
            console.log(p);
            players[p.ge.path.n[2]] = {
              data: p.val(),
              model: new THREE.Mesh(new THREE.BoxBufferGeometry(1, 1, 2)) };

            var pl = players[p.ge.path.n[2]];
            pl.model.position.set(pl.data.x, 0.6, pl.data.y);
            pl.model.material = shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("hsl(" + pl.data.color + ", 100%, 50%)") });
            var wheel = new THREE.Mesh(
            new THREE.CylinderBufferGeometry(0.5, 0.5, 0.2, 10),
            shiny ? shinymat : new THREE.MeshLambertMaterial({ color: new THREE.Color("#222") }));

            var w1 = wheel.clone();
            w1.position.set(0.6, -0.1, 0.7);
            w1.rotation.set(Math.PI / 2, 0, Math.PI / 2);
            pl.model.add(w1);
            var w2 = wheel.clone();
            w2.position.set(-0.6, -0.1, 0.7);
            w2.rotation.set(Math.PI / 2, 0, Math.PI / 2);
            pl.model.add(w2);
            var w3 = wheel.clone();
            w3.position.set(0.6, -0.1, -0.7);
            w3.rotation.set(Math.PI / 2, 0, Math.PI / 2);
            pl.model.add(w3);
            var w4 = wheel.clone();
            w4.position.set(-0.6, -0.1, -0.7);
            w4.rotation.set(Math.PI / 2, 0, Math.PI / 2);
            pl.model.add(w4);
            var label = document.createElement("DIV");
            label.className = "label";
            label.innerHTML = pl.data.name.substring(0, 50) + "<br/>|";
            pl.label = label;
            label.position = pl.model.position;
            console.log(label);
            f.appendChild(label);
            labels.push(label);
            pl.model.receiveShadow = true;
            scene.add(pl.model);

            if (p.ge.path.n[2] == me.ref.path.n[2]) {
              me.label = pl.label;
              me.model = pl.model;
              me.label.innerHTML = "";
            }
          }
        });

        database.ref(code + "/players").on("child_changed", function (p) {
          // console.log(p);
          players[p.ge.path.n[2]].data = p.val();
        });
        console.log("playerCount: " + playerCount);
        me.ref = database.ref(code + "/players").push();
        me.data = {
          x: carPos[playerCount].x,
          y: carPos[playerCount].y,
          xv: 0,
          yv: 0,
          dir: 0,
          steer: 0,
          color: color,
          name: name,
          checkpoint: 1,
          lap: 0,
          collision: {} };

        me.ref.set(me.data);

        database.ref(code + "/status").on("value", function (v) {
          v = v.val();
          if (v == 1) {
            document.getElementsByClassName("info")[0].outerHTML = "";

            gameStarted = true;
            gameSortaStarted = true;

            var countDown = document.createElement("DIV");
            countDown.innerHTML = "3";
            countDown.className = "title";
            countDown.id = "countdown";
            f.appendChild(countDown);

            lap = document.createElement("DIV");
            lap.innerHTML = "1/3";
            lap.className = "title";
            lap.id = "lap";
            f.appendChild(lap);

            setTimeout(function () {
              countDown.innerHTML = "2";
            }, 1000);

            setTimeout(function () {
              countDown.innerHTML = "1";
            }, 2000);

            setTimeout(function () {
              countDown.innerHTML = "GO!";
              gameSortaStarted = false;
            }, 3000);

            setTimeout(function () {
              countDown.innerHTML = "";
            }, 4000);
          }
        });
        database.ref(code + "/map").once("value", function (e) {
          document.getElementById("trackcode").innerHTML = e.val();
          deleteMap();
          eval(loadMap());
        });
      } else
      incode.onkeyup = codeCheck;
    });
  } else {
    incode.onkeyup = codeCheck;
    if (incode.value.length > 4)
    incode.value = incode.value.substring(0, 4);
  }
};

function startGame() {
  database.ref(code + "/status").set(1);
}

window.onkeydown = function (e) {
  if (e.keyCode == 37)
  left = true;
  if (e.keyCode == 39)
  right = true;
};

window.onkeyup = function (e) {
  if (e.keyCode == 37)
  left = false;
  if (e.keyCode == 39)
  right = false;
};

if (mobile) {
  window.ondeviceorientation = function (e) {
    var angle = orientation == 0 ? e.gamma : orientation < 0 ? -e.beta : e.beta;
    // document.body.innerHTML = angle;
    me.data.steer = Math.max(Math.min(-angle / 180 * Math.PI, Math.PI / 6), -Math.PI / 6);
  };
}

document.body.onkeydown = function (e) {
  if (e.keyCode == 73 && (e.ctrlKey || e.metaKey))
  document.getElementById("trackcode").innerHTML = prompt("Track data?");
};
//# sourceURL=pen.js
    </script>



</body>

</html>

