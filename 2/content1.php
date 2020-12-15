
<?php

$id=0;
include_once ('config.php');
include_once ('content3.php');
$flag=new Flag ();
//$id_user=2;

$myimg = './foto/' . basename($_FILES['uploadfile']['name']);

if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $myimg)) {
    // сохраняем путь в базу
	if (($flag->getA)!=0){
		$id_user=$flag->getA();
		$connection->query("UPDATE user SET avatar='$myimg' WHERE id_user='$id_user'") ;
		
	}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv='refresh' content='5; URL=<?php echo $_SERVER['HTTP_REFERER'];?> '  />
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
<title>Отзыв</title>
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


