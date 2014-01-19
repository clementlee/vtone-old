<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>VTone<?php if($_GET["page"] != "") $page = $_GET["page"]; else $page = "photo"; echo ' | '.$page;?></title>
  <link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css">
  <link rel="stylesheet" href="main.css" type="text/css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="FlexSlider/jquery.flexslider.js"></script>
  <script type="text/javascript">
    /*if(window.top == window.self) {
      window.location.replace("http://vtonemusic.com");
    }*/
    $(window).load(function() {
<?php
  if($page==="photo")
    echo "$('.flexslider').flexslider({randomize:true,animation: \"slide\",slideshow: true,controlNav: false});";
  else if($page==="peeps")
    echo "$('.flexslider').flexslider({randomize:true,animation: \"slide\",slideshow: true});";
  else if($page==="links")
    echo "$('.flexslider').flexslider({randomize:false,slideshow: false,manualControls: \".links-control-nav div\", controlsContainer: \"#vtonecontent\",controlNav: true});";
  else
    echo "$('.flexslider').flexslider({randomize:false,animation: \"slide\",slideshow: false});"; ?>
    });
  </script>
</head>

<body>
<div class="aspectwrapper">
  <div class="leftcol">
    <div class="leftrow">
      <div class="logo">
        <a href="./">
        <img src="logo.png" width="200"/>
        </a>
      </div>
    </div>
    <div class="leftrow">
      <div class="sidebar">
        <ul class="navrow">
          <a href="./?page=audio">
          <li class="diag">V</li>
          <li>O</li>
          <li>C</li>
          <li>A</li>
          <li>L</li>
          </a>
          <span class="hidden">
            <a href="./?page=audio">
            <li class="diag">A</li>
            <li>U</li>
            <li>D</li>
            <li>I</li>
            <li>O</li>
            </a>
          </span>
        </ul>
        <ul class="navrow">
          <a href="./?page=peeps">
            <li>S</li>
            <li class="diag">T</li>
            <li>A</li>
            <li>R</li>
            <li>S</li>
          </a>
          <span class="hidden">
            <a href="./?page=peeps">
            <li>P</li>
            <li class="diag">E</li>
            <li>E</li>
            <li>P</li>
            <li>S</li>
            </a>
          </span>
        </ul>
        <ul class="navrow">
          <a href="./?page=links">
          <li>A</li>
          <li>D</li>
          <li class="diag">O</li>
          <li>R</li>
          <li>E</li>
          </a>
          <span class="hidden">
            <a href="./?page=links">
            <li>L</li>
            <li>I</li>
            <li class="diag">N</li>
            <li>K</li>
            <li>S</li>
            </a>
          </span>
        </ul>
        <ul class="navrow">
          <a href="./?page=photo">
            <li>S</li>
            <li>H</li>
            <li>I</li>
            <li class="diag">N</li>
            <li>Y</li>
          </a>
          <span class="hidden">
            <a href="./?page=photo">
            <li>P</li>
            <li>H</li>
            <li>O</li>
            <li class="diag">T</li>
            <li>O</li>
            </a>
          </span>
        </ul>
        <ul class="navrow">
          <li>S</li>
          <li>T</li>
          <li>Y</li>
          <li>L</li>
          <li class="diag">E</li>
          <span class="hidden">
            <li>V</li>
            <li>I</li>
            <li>D</li>
            <li>E</li>
            <li class="diag">O</li>
          </span>
        </ul>
      </div>
    </div>
    <div class="leftrow">
      <div class="leftbox">
        <span style="color:#d00;">Come audition for VTone!</span> Reserve <a href="https://wass.princeton.edu/pages/viewcalendar.page.php?makeapp=1%26cal_id=2033">here</a>.
      </div>
    </div>
    <div class="leftrow">
      <div class="leftbox">
        VTone is Princeton's first East Asian Music Production Group. Our repertoire consists of a capella pieces as well as mashups, medleys, and remixes. We focus on East Asian music (Chinese, Korean, and Japanese) but we do English pieces as well!
      </div>
    </div>
    <div class="leftrow">
      <div id="foot"></div> 
    </div>
  </div>
  <div id="vtonecontent">
    <div class="flexslider">
      <?php include($page.'.php');?>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#foot").html('© <?php date_default_timezone_set('America/New_York'); echo date("Y"); ?> <a href="mailto:'+"vtone(at)princeton.edu".replace('(at)','@')+'">VTone</a>, Design by <a href="mailto:'+"takumim(at)princeton.edu".replace('(at)','@')+'">Takumi Murayama \'14</a>.');
</script>
</body>
</html>
