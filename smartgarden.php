<?php 
include "language/config.php";


 ?>


<!DOCTYPE html>
<html>
<head>
	<title><?php   echo $lang['title']?></title>
<link rel="icon" href="image/main.jpg" type="image/x-icon" />	
<style type="text/css">
	
*
{
	margin:0;
	padding: 0;
}
header
{ 
	background-image: url(image/bachkhoa.jpeg);
	height: 100vh;
	background-size: cover;
	background-position: center;


}
.main-nav
{
	float: right;
	list-style: none;
	margin-top: 30px;
	margin-right: 50px;
}
.main-nav li
{
	display: inline-block;


}
.main-nav li a
{
	color: white;
	text-decoration: none;
	padding:5px 20px;
	font-family: "Roboto",sans-serif;
	font-size: 15px;

}
.main-nav li.active a
{
	border: 1px solid white;
}
.main-nav li a:hover
{
 	border: 1px solid white;

}



.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
min-width: 170px;
  
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: red;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: red}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}







</style>
</head>
<body>
	<header>
		<div class="row">
			<ul class="main-nav">
				<li class="active"><a href=""><?php   echo $lang['home']?></a></li>
				<li><a href="https://www.hcmut.edu.vn/vi"><?php   echo $lang['daihocbachkhoa']?></a></li>
				<li><a href="http://www.dee.hcmut.edu.vn/"><?php   echo $lang['khoadientu']?></a></li>
				<li>
<div class="dropdown">
					<a href="#"><?php   echo $lang['lang']?></a>

			
  <div class="dropdown-content">
    <a href="smartgarden.php?lang=en"><?php   echo $lang['lang_en']?></a>
    <a href="smartgarden.php?lang=vietnam"><?php   echo $lang['lang_vn']?></a>
  </div>
</div>
</li>


<li>
	
	<div class="dropdown">
					<a href="#"><?php   echo $lang1['admin']?></a>

			
  <div class="dropdown-content">
    <a href="login/login2.php"><?php   echo $lang7['lg']?></a>
    <a href="login/login.php"><?php   echo $lang7['ch']?></a>
  </div>
</div>
</li>


				


			</ul>
			

		</div>
		

	</header>


</body>
</html>