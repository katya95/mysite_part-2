<?php 

include ('config.php');
      $name=htmlspecialchars(stripslashes (trim($_POST['name'])));
       $name_2=htmlspecialchars(stripslashes (trim($_POST['name_2'])));
       $city=$_POST['city'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       //$avatar='<img src="./image/ekr_icons/tv.gif"</img>';
       $avatar=$_POST['avatar'];
$connection->exec('INSERT INTO user VALUES (1,"$name","$name_2","$city","$email","$avatar")');


   
  /* $query ="INSERT INTO user (name,surname,city,email,password,avatar) VALUES ('$name','$name_2','$city','$email','$password', '$avatar')";
    
    $result = mysqli_query($conn, $query) or die("Ошибка " . mysqli_error($conn)); 
 
    if($result)
        echo "<span style='color:blue;'>Данные обновлены</span>";
        else echo "Error";

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