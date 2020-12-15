<?php 

include ('config.php');
 $data=date("Y-m-d");
 $title=$_POST['name'];
       $text=$_POST['name_2'];
      $id_user=2;
	  
//$connection->exec('INSERT INTO post VALUES (2,2,"$data","$title","$text")');
$flag=new Flag ();
if ($flag->getA()!=0){
$id_user=$flag->getA();}
$connection->exec('INSERT INTO post VALUES (2,2,"$data","$title","$text")');

//$affectedRows = $connection->exec('INSERT INTO post VALUES (2,2,"$data","$title","$text")');
//echo $affectedRows;


/*
if(isset($_POST['name']) && isset($_POST['name_2'])){
    
    echo $_POST['name'];
  
      $title=$_POST['name'];
       $text=$_POST['name_2'];
      $id_user=1;//считать ид автора
      // $data=date("Y-m-d");
   
  $query ="INSERT INTO user (name,surname,city,email,password,avatar) VALUES ('$name','$name_2',NULL,NULL,'qwerty', '$avatar')";
   $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
        else echo "Error";
}
 */

?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>пост</title>
</head>

<body bgcolor="#efefef" >

<table border="0" width="100%">
	<tr>
		<td width="50%"></td>
		<td valign="middle">
<div style=" margin-top:300px; height:120px; width:500px; background:#DCDCDC; border: solid 3px #808080; font-family:Arial, Helvetica, sans-serif; font-size:18px; padding:20px;">
<?php echo 'Данные отправлены';?>
</div>
		</td>
		<td width="50%"></td>
	</tr>
</table>


</body>
</html>