<?php
include_once('content3.php');
$a=1;
$flag=new Flag();
			 
             //echo $flag->getA();
			 
	$menu = array(
		"Номе"=>"index.php?id=home", 
		//"Add image"=>"index.php?id=page1", 
		"Page2"=>"index.php?id=page2",  
		//"Page4"=>"index.php?id=page4", 
		"Post insert"=>"index.php?id=page5", 
	         "Post"=>"index.php?id=page6", 
                "Registracia"=>"index.php?id=page7");
	
	//if ($_SESSION['id'] !=0){
	
	$menu_autor = array(
		"About autor"=>"index.php?id=page3",  
	 "update"=>"index.php?id=page8",
	 "Add image"=>"index.php?id=page1");
	

?>	
<table width="100%">
	<tr>
		<td>
			<p>Меню</p>
			<?php
			$a=0;
			$a = file_get_contents('content2.php');
				getMenu($menu);
				//if ($_SESSION['id'] !=0){
				//if ($flag->getA()!=0){
					if ($a!=0){
				getMenu($menu_autor);}
			?>
		</td>
	</tr>
</table>