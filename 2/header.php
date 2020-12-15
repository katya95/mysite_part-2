<div  class="header">
<h2>Шапка</h2>
<div>

 <?php
 //session_start ();
 error_reporting(-1);
//header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding("UTF-8");
 include ('content3.php');
 $a=0;
 $flag=new Flag();
 $a = file_get_contents('content2.php');
 //$a=0;
 //if ($_SESSION['id'] !=0){
 //if ($flag->getA()==0){
	 if ($a==0){
echo '<a href="index.php?id=page9">Вход</a></li>';

 }
 else{
	 echo $flag->getUser().'<br/>';
echo '<a href="index.php?id=page10">Выход</a></li>';

 }
?>

</div>