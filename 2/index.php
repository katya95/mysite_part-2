<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title></title>


<link rel="stylesheet" type="text/css" href="style.css"/> 

</head>


<body>
<div class="container">
<!-- header -->
<?php
include ('header.php');
?>






</div>
<div class=pages>
<div class="sidebar">


    <?php
		include ("config.php");
		include ("menu.inc.php"); // navigation подключен
	?>

</div>
<div class="content">
<h2>Контент</h2>


<!-- function -->
<?php
 //include ('function.php');
  function page ($page)
{
/*if($page == 1) include("home.php");
if($psge == 2) include("content1.php");
if($psge == 3) include("content5.php");
if($psge == 4) include("content3.php");*/

}
function getMenu($menu, $vertical=true){
		if(!$vertical){
			$style = "display:inline";
		}
		echo '<ul style="list-style-type:none">';
		
			foreach ($menu as $link=>$href){
				echo "<li style=''><a href=\"$href\">", $link, '</a></li>';
			}
		
		echo '</ul>';
	}	
?> 
<!-- center block layout  -->
<?php  
//include('layout.php');
 

if(!isset($_GET["id"]) )
{ 
include("home.php");}
else{


 $id = strip_tags($_GET["id"]);
			switch($id){
				case "page1":
					include "content.php";break;
				//case "page2":
					//include "content1.php";break;	
				case "page3":
				//include "db.php";break;
					include "profile.php";break;
					//case "page4":
					//include "registracia.php";break;
					//"login.php";
					case "page5":
					include "form_insert_post.php";break;
					case "page6":
					include "db.php";break;
					case "page7":
					include "form_insert.php";break;
					case "page8":
					include "form_update.php";break;
					case "page9":
					include "enter.php";break;
					case "page10":
					include "home.php";
					$filename='content2.php';
					$b=0;
			file_put_contents($filename, $b);
					break;
						
				case "home": include "home.php";break;
				default:
					echo "<h1 align='center'>Добро пожаловать!</h1>";	
			}  
}

  
  ?>


  
</div>

<div class="foot">
</div>
<!-- footer -->
<?php
include('footer.php');
?>
</div>
</body>
</html>

