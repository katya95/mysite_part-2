<?php  

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