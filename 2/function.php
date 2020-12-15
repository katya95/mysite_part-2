<?php
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