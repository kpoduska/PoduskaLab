<?php 
if (strlen($_GET["content"])< 2) {$_GET["content"]="home";} 

if(strlen($_GET["topic"])< 1) {
    $_GET["topic"]="main"; }
else if (strlen($_GET["topic"])< 2) {
    $_GET["topic"]="research"; }
else if(strlen($_GET["topic"])< 3 ) {
    $_GET["topic"]="teaching"; }
else if(strlen($_GET["topic"])< 4 ) {
    $_GET["topic"]="advocacy"; }




$topic=$_GET["topic"];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>

<title>Physics at Memorial University of Newfoundland - Dr. Poduska - <?php echo $_GET["content"]?></title>

<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" />
<meta name="mssmarttagspreventparsing" content="true" />
<!-- <meta http-equiv="imagetoolbar" content="no" />-->
<link rel="SHORTCUT ICON" href="favicon.ico" />

<style type="text/css">
<?php include("kris.css"); ?>
</style>

<script type="text/javascript" src="protect_email.js"></script>

</head>

<body>



<div class="maincol">

<div class="sidenav">

<ul>
<br><li><a href="http://www.mun.ca"><br><img src="munlogosmall.jpg" title="Memorial University of Newfoundland" width="115"><br><br></a>
<br>
<li><a href="index.php?"><br><b>Home</b><br><br></a></li><br>
<li><a href="index.php?content=cv&topic=main"><br><b>About Kris</b><br><br></a></li>
<li><a href="index.php?content=research&topic=research"><br><b>Research</b><br><br></a></li>
<li><a href="index.php?content=teaching&topic=teaching"><br><b>Teaching</b><br><br></a></li>
<li><a href="index.php?content=advocacy&topic=advocacy"><br><b>Advocacy</b><br><br></a></li>
<li><a href="index.php?content=links&topic=main"><br><b>Links</b><br><br></a></li><br>
<li><a href="index.php?content=contact&topic=main"><br><b>Contact</b><br><br></a></li><br>
</ul>
<ol>
<li><a href="https://www.mun.ca/physics/"><img src="munphysics.jpg" title="Physics & Physical Oceanography at Memorial University of Newfoundland" alt="Physics & Physical Oceanography at Memorial University of Newfoundland" width="115"></a> </li><br>
<li><a href="https://www.mun.ca/chem/"><img src="munchem.jpg" title="Chemistry at Memorial University of Newfoundland" alt="Chemistry at Memorial University of Newfoundland" width="115" ></a><br></li>
</ol>
</div>

<div class="headerbig"> 
Dr. Kristin Poduska
</div>  
<div class="headersmall"> 
Professor
</div>
<div class="headersmall">
Memorial University of Newfoundland & Labrador
<hr> 
 </div> 
 <div class="headermed"> 
Experimental Materials Physics & Chemistry<br>
<br>
</div>

<div class="headerbar">
<a href="index.php?content=projects&topic=research#Archaeology">decoding the past</a>  &nbsp;&nbsp;&nbsp;&nbsp; and &nbsp;&nbsp;&nbsp;&nbsp; <a href="index.php?content=projects&topic=research#Environment"> directing the future </a> &nbsp;&nbsp;&nbsp;&nbsp;
</div>

<?php
//$_GET["content"]
include($_GET["content"].".php");
?>

<div class="tiny alignright">
Webmaster: kris_at_mun.ca<br>

<!--<script>protect("kris", "kp")</script><br>-->

Last updated: 28 Apr 2023<br>
Created 10 Nov 2012
</p>
</div>
<a rel="me" href="https://mastodon.green/@experimentalist">  </a>
<div class="tiny italics">
This site uses CSS and the Jello mold page layout.</a>
</div>


</body>
</html>
