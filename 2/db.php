<?php 


//вывод пользователей
foreach($connection->query('SELECT * FROM user') as $row) {
    echo $row['name'] . ' ' . $row['surname'].$row['avatar'].'</br>';
    echo "<td>".$row['id_user']."</td>";
              echo "<td><a href='index.php?id=page7'>Update</a>"."</br>"."</td>";
}

//вывод постов
foreach($connection->query('SELECT * FROM post') as $row) {
    echo $row['data'] . ' ' . $row['title'].$row['text'].'</br>';
    //echo "<td>".$row['id_user']."</td>";
              //echo "<td><a href='index.php?id=page7'>Update</a>"."</br>"."</td>";
}



 
?>



<?php 
//mysqli_close( $conn);
?>