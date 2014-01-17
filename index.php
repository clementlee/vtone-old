<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>VTone</title>
  <style type="text/css">
a:link {color:inherit;text-decoration:none;}
a:visited {color:inherit;text-decoration:none;}
body {background:#ddd;font-family:'Verdana';}
.logo{
background:white;
right:102%;
position:absolute;
z-index:5;
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
top:0px;
width:200px;
height:60px;
padding-top:2px;
padding-right:2px;
}
.sidebar {
background:white;
right:61%;
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
position:absolute;
top:70px;
right:102%;
width: 155px;
height:155px;
padding-top:5px;
}
.about {
background:white;
right:61%;
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
position:absolute;
top:240px;
right:102%;
width: 240px;
padding:5px 5px 5px 5px;
font-size:8pt;
}
#foot {
width:100%;
text-align:right;
right:0;
position:absolute;
bottom:-13px;
font-size:7pt;
}
.aspectwrapper {
margin-top:40px;
margin-left:40%;
display: inline-block; /* shrink to fit */
width: 50%; /* whatever width you like */
position: relative; /* so .content can use position: absolute */
}
.aspectwrapper::after {
padding-top: 100%; /* percentage of containing block _width_ */
display: block;
content: '';
}
#content {
background:white;
position: absolute;
top: 0; bottom: 0; right: 0; left: 0; /* follow the parent's edges */
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
}
.navrow {
  margin:0 0 0 0;
  padding:0 0 0 0;
  width:155px;
  font-size: 0px;
  position:relative;
}
.navrow li {
  font-size:25px;
  width:31px;
  text-align:center;
  display:inline-block;
}
.navrow .diag {
  color:#d00;
}
.navrow .hidden {
  display:none;
}
.navrow:hover > .hidden {
  position:absolute;
  background:#eee;
  top:0;
  display:block;
}
.flexslider .slides li {
    position:relative;
}
.flex-caption {
    position:absolute;
    width:96%;
    padding:2%;
    left:0;bottom:-16px;
    background:rgba(0, 0, 0,0.6);
    z-index:1;
    color:white;
    text-align:center;
 }
  </style>
  <link rel="stylesheet" href="FlexSlider/flexslider.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="FlexSlider/jquery.flexslider.js"></script>
  <?php if($_GET["page"] != "") $page = $_GET["page"]; else $page = "photo";?> 
  <script type="text/javascript" charset="utf-8">
    $(window).load(function() {
    <?php
      if($page==="photo" || $page==="peeps")
        echo "$('.flexslider').flexslider({randomize:true,animation: \"slide\",slideshow: true});";
      else
        echo "$('.flexslider').flexslider({randomize:false,animation: \"slide\",slideshow: false});";
    ?>
    });
  </script>
</head>

<body>
<div class="aspectwrapper">
<div class="logo">
  <img src="logo.png" width="200"/>
</div>
<div class="sidebar">
  <ul class="navrow">
    <li class="diag">V</li>
    <li>O</li>
    <li>C</li>
    <li>A</li>
    <li>L</li>
    <div class="hidden">
      <a href="./?page=audio">
      <li class="diag">A</li>
      <li>U</li>
      <li>D</li>
      <li>I</li>
      <li>O</li>
      </a>
    </div>
  </ul>
  <ul class="navrow">
    <li>S</li>
    <li class="diag">T</li>
    <li>A</li>
    <li>R</li>
    <li>S</li>
    <div class="hidden">
      <a href="./?page=peeps">
      <li>P</li>
      <li class="diag">E</li>
      <li>E</li>
      <li>P</li>
      <li>S</li>
      </a>
    </div>
  </ul>
  <ul class="navrow">
    <li>A</li>
    <li>D</li>
    <li class="diag">O</li>
    <li>R</li>
    <li>E</li>
    <div class="hidden">
      <li>L</li>
      <li>I</li>
      <li class="diag">N</li>
      <li>K</li>
      <li>S</li>
    </div>
  </ul>
  <ul class="navrow">
    <li>S</li>
    <li>H</li>
    <li>I</li>
    <li class="diag">N</li>
    <li>Y</li>
    <div class="hidden">
      <a href="./?page=photo">
      <li>P</li>
      <li>H</li>
      <li>O</li>
      <li class="diag">T</li>
      <li>O</li>
      </a>
    </div>
  </ul>
  <ul class="navrow">
    <li>S</li>
    <li>T</li>
    <li>Y</li>
    <li>L</li>
    <li class="diag">E</li>
    <div class="hidden">
      <li>V</li>
      <li>I</li>
      <li>D</li>
      <li>E</li>
      <li class="diag">O</li>
    </div>
  </ul>
</div>
<div class="about">
  VTone is Princeton's first East Asian Music Production Group. Our repertoire consists of a capella pieces as well as mashups, medleys, and remixes. We focus on East Asian music (Chinese, Korean, and Japanese) but we do English pieces as well!
<div id="foot">
</div> 
</div>
<div id="content">
<div class="flexslider">
  <?php include($page.'.php');?>
</div>
</div>
</div>
<script>
  $("#foot").html('© <?php date_default_timezone_set('America/New_York'); echo date("Y"); ?> <a href="mailto:'+"vtone(at)princeton.edu".replace('(at)','@')+'">VTone</a>, Design by <a href="mailto:'+"takumim(at)princeton.edu".replace('(at)','@')+'">Takumi Murayama \'14</a>.');
</script>
</body>
</html>
