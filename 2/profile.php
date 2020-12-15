<?php
include_once('content3.php');
$id=0;
include ('config.php');

		$id = file_get_contents('content2.php');
		foreach($connection->query("SELECT * FROM user WHERE id_user='$id'") as $row) {
		echo $row['name'] . ' ' . $row['surname'].$row['avatar'].'</br>';
		echo "<td>".$row['id_user']."</td>";
              echo "<td><a href='index.php?id=page8'>Update</a>"."</br>"."</td>";
		}
?>


