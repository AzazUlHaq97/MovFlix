<!DOCTYPE html>
<html lang="en" >

<head>

  <meta charset="UTF-8">

<link rel="apple-touch-icon" type="image/png" href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">

<link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />

<link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />


  <title>CodePen - Picture Puzzle Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">



<style>
body, html {
  margin: 0 auto;
  width: 100%;
  height: 100%;
  background-color: #c7c7c7;
  background-image: url("data:image/svg+xml,%3Csvg width='42' height='44' viewBox='0 0 42 44' xmlns='http://www.w3.org/2000/svg'%3E%3Cg id='Page-1' fill='none' fill-rule='evenodd'%3E%3Cg id='brick-wall' fill='%23404040' fill-opacity='0.4'%3E%3Cpath d='M0 0h42v44H0V0zm1 1h40v20H1V1zM0 23h20v20H0V23zm22 0h20v20H22V23z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

#container {
  width: 835px;
  height: 400px;
  padding: 0;
  position: absolute;
  top: 8%;
  left: 50%;
  transform: translate(-48%, 0%);
}

.me {
  position: relative;
  background-size: 800px 400px;
  background-repeat: no-repeat;
  display: inline-block;
  margin: 2.2px;
  margin-top: -0.5px;
  border-radius: 10px;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  transition: 0.2s;
}

.full {
  height: 400px;
  width: 800px;
  border-radius: 15px;
}

.me_0 {
  height: 133.33px;
  width: 133.33px;
  background-position: -0px -0px;
}

.me_1 {
  height: 133.33px;
  width: 133.33px;
  background-position: -133.33px -0px;
}

.me_2 {
  height: 133.33px;
  width: 133.33px;
  background-position: -266.66px -0px;
}

.me_3 {
  height: 133.33px;
  width: 133.33px;
  background-position: -399.99px -0px;
}

.me_4 {
  height: 133.33px;
  width: 133.33px;
  background-position: -533.32px -0px;
}

.me_5 {
  height: 133.33px;
  width: 133.33px;
  background-position: -666.65px -0px;
}

.me_6 {
  height: 133.33px;
  width: 133.33px;
  background-position: -0px -133.33px;
}

.me_7 {
  height: 133.33px;
  width: 133.33px;
  background-position: -133.33px -133.33px;
}

.me_8 {
  height: 133.33px;
  width: 133.33px;
  background-position: -266.66px -133.33px;
}

.me_9 {
  height: 133.33px;
  width: 133.33px;
  background-position: -399.99px -133.33px;
}

.me_10 {
  height: 133.33px;
  width: 133.33px;
  background-position: -533.32px -133.33px;
}

.me_11 {
  height: 133.33px;
  width: 133.33px;
  background-position: -666.65px -133.33px;
}

.me_12 {
  height: 133.33px;
  width: 133.33px;
  background-position: -0px -266.66px;
}

.me_13 {
  height: 133.33px;
  width: 133.33px;
  background-position: -133.33px -266.66px;
}

.me_14 {
  height: 133.33px;
  width: 133.33px;
  background-position: -266.66px -266.66px;
}

.me_15 {
  height: 133.33px;
  width: 133.33px;
  background-position: -399.99px -266.66px;
}

.me_16 {
  height: 133.33px;
  width: 133.33px;
  background-position: -533.32px -266.66px;
}

.me_17 {
  height: 133.33px;
  width: 133.33px;
  background-position: -666.65px -266.66px;
}

.prevent_click {
  pointer-events: none;
}

.correct {
  border-radius: 0px;
  box-shadow: 0 0 0 transparent, 0 0 0 transparent;
  animation: corect 0.5s ease;
  animation-delay: 0.2s;
}

@keyframes corect {
  0% {
    transform: scale(1);
    border-radius: 10px;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
  }
  50% {
    transform: scale(1.25);
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  }
  100% {
    transform: scale(1);
    border-radius: 0px;
    box-shadow: 0 0 0 transparent, 0 0 0 transparent;
  }
}
.pre_img {
  margin-top: 10px;
  width: 100%;
  position: absolute;
  left: 100px;
}

.pre_img li {
  display: inline-block;
  list-style: none;
}

.pre_img li img {
  width: 150px;
  height: 75px;
  position: relative;
  cursor: pointer;
}

.cover {
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0, 0.38);
  width: 100%;
  height: 100%;
  z-index: 9999;
}



.score {
  margin: 13% auto;
  padding: 20px;
  background: #fff;
  border: 1px solid #666;
  width: 300px;
  box-shadow: 0 0 50px rgba(0, 0, 0, 0.8);
  position: relative;
}

#scr_head {
  text-align: center;
  font-weight: 600;
  font-size: 30px;

   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
  color: #3d3d3d;
}

#scr_time {
  text-align: center;
  font-weight: 600;
  font-size: 22px;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
  color: #3d3d3d;
}

#scr_moves {
  text-align: center;
  font-weight: 600;
  font-size: 22px;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
  color: #3d3d3d;
}

.start {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 18px 45px;
}

.reset {
  position: absolute;
  margin: 0 auto;
  padding: 18px 45px;
  left: 50%;
  transform: translate(-50%, 120px);
}

.OK {
  padding: 8px 25px;
  float: right;
  cursor: pointer;
}

.button {
  margin: 0px 10px 10px 0px;
  border-radius: 10px;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
  font-size: 25px;
  color: #FFF;
  text-decoration: none;
  background-color: #E74C3C;
  border-bottom: 5px solid #BD3E31;
  text-shadow: 0px -2px #BD3E31;
  z-index: 999;
  transition: all 0.1s;
  -webkit-transition: all 0.1s;
  box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

.button:active {
  border-bottom: 1px solid #BD3E31;
}

.i {
  text-align: center;
   font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
  font-weight: 550;
  color: #3c3c3c;
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
  <div id="container">
	<a href="#" class="button start">Start</a>
	<div class="box">
		<div class="me full"></div>
	</div>
	<div class="pre_img">
		<li data-bid="0"><img src="https://preview.ibb.co/kMdsfm/kfp.png"></li>
		<li data-bid="1"><img src="https://preview.ibb.co/kWOEt6/minion.png"></li>
		<li data-bid="2"><img src="https://preview.ibb.co/e0Rv0m/ab.jpg"></li>
		<li data-bid="3" id="upfile1"><img src="https://image.ibb.co/cXSomR/upload1.png" /></li>
		<input type="file" name="image" id="file1" style="display: none">
	</div>
	<div align="center"><a href="#" class="button reset" align="center">Reset</a></div>
</div>

<div class="cover">
	<div class="score">
		<p id="scr_head"> &#9875 Puzzel Solved &#9875</p>
		<p id="scr_time"> Time : <span id="min">00</span> Min <span id="sec">00</span> Sec</p>
		<p id="scr_moves"> Moves : <span id="moves"></span></p>
    <p id="scr_moves"> Your Coppon Code Is : <span id="moves">H467h3f</span></p>
		<p class="i">Developed by Team Developer</p>
		<div class="button OK">OK</div>
	</div>
</div>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
      <script id="rendered-js" >
$(document).ready(function () {


  var box = $(".box"),
  orginal = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17],
  temp = orginal,
  x = [],
  sec = 0,
  date1,date2,
  moves = 0,
  mm = 0,
  ss = 0,
  upIMG,
  images = ["https://preview.ibb.co/kMdsfm/kfp.png", "https://preview.ibb.co/kWOEt6/minion.png", "https://preview.ibb.co/e0Rv0m/ab.jpg"];
  img = 0;




  $('.me').css({ "background-image": 'url(' + images[0] + ')' });

  $(".start").click(function () {
    $(".start").addClass('prevent_click');
    $(".start").delay(100).slideUp(500);
    $(".full").hide();
    $(".pre_img").addClass("prevent_click");

    date1 = new Date();
    Start();
    return 0;
  });

  function Start() {
    randomTile();
    changeBG(img);
    var count = 0,
    a,
    b,
    A,
    B;
    $(".me").click(function () {
      count++;
      if (count == 1) {
        a = $(this).attr("data-bid");
        $('.me_' + a).css({ "opacity": ".65" });
      } else {
        b = $(this).attr("data-bid");
        $('.me_' + a).css({ "opacity": "1" });
        if (a == b) {
        } else {
          $(".me_" + a).
          addClass("me_" + b).
          removeClass("me_" + a);
          $(this).
          addClass("me_" + a).
          removeClass("me_" + b);
          $(".me_" + a).attr("data-bid", a);
          $(".me_" + b).attr("data-bid", b);
        }
        moves++;
        swapping(a, b);
        checkCorrect(a);
        checkCorrect(b);
        a = b = count = A = B = 0;
      }
      if (arraysEqual(x)) {
        date2 = new Date();
        timeDifferece();
        showScore();
        return 0;
      }
    });
    return 0;
  }

  function randomTile() {
    var i;
    for (i = orginal.length - 1; i >= 0; i--) {if (window.CP.shouldStopExecution(0)) break;
      var flag = getRandom(0, i);
      x[i] = temp[flag];
      temp[flag] = temp[i];
      temp[i] = x[i];
    }window.CP.exitedLoop(0);
    for (i = 0; i < orginal.length; i++) {if (window.CP.shouldStopExecution(1)) break;
      box.append(
      '<div  class="me me_' + x[i] + ' tile" data-bid="' + x[i] + '"></div>');

      if ((i + 1) % 6 == 0) box.append("<br>");
    }window.CP.exitedLoop(1);
    i = 17;
    return 0;
  }

  function arraysEqual(arr) {
    var i;
    for (i = orginal.length - 1; i >= 0; i--) {if (window.CP.shouldStopExecution(2)) break;
      if (arr[i] != i) return false;
    }window.CP.exitedLoop(2);
    return true;
  }

  function checkCorrect(N1) {
    var pos = x.indexOf(parseInt(N1, 10));
    if (pos != N1) {
      return;
    }
    $(".me_" + N1).addClass("correct , prevent_click ");
    return;
  }

  function swapping(N1, N2) {
    var first = x.indexOf(parseInt(N1, 10)),
    second = x.indexOf(parseInt(N2, 10));
    x[first] = parseInt(N2, 10);
    x[second] = parseInt(N1, 10);
    return 0;
  }

  function getRandom(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  }

  function timeDifferece() {
    var diff = date2 - date1;
    var msec = diff;
    var hh = Math.floor(msec / 1000 / 60 / 60);
    msec -= hh * 1000 * 60 * 60;
    mm = Math.floor(msec / 1000 / 60); // Gives Minute
    msec -= mm * 1000 * 60;
    ss = Math.floor(msec / 1000); // Gives Second
    msec -= ss * 1000;
    return 0;
  }


  function changeBG(img) {
    if (img != 3) {
      $('.me').css({
        "background-image": "url(" + images[img] + ")" });

      return;
    } else

    $('.me').css({ "background-image": "url(" + upIMG + ")" });
  }

  $('.pre_img li').hover(function () {
    img = $(this).attr("data-bid");
    changeBG(img);

  });

  function showScore() {
    $('#min').html(mm);
    $('#sec').html(ss);
    $('#moves').html(moves);
    setTimeout(function () {
      $('.cover').slideDown(350);
    }, 1050);
    return 0;
  }

  $('.OK').click(function () {
    $('.cover').slideUp(350);
  });

  $('.reset').click(function () {
    $(".tile").remove();
    $("br").remove();
    $(".full").show();
    $(".start").show();
    $(".pre_img, .start").removeClass("prevent_click");

    temp = orginal;
    x = [];
    moves = ss = mm = 0;
    return 0;
  });

  $("#upfile1").click(function () {
    $("#file1").trigger('click');
  });

  $("#file1").change(function () {
    readURL(this);
  });

  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        upIMG = e.target.result;
        img = 3;
        changeBG(3);
      };
      reader.readAsDataURL(input.files[0]);
    }

  }
});
//# sourceURL=pen.js
    </script>



</body>

</html>
