    <?php
    
    $connection = new PDO('mysql:host=localhost;dbname=mysite;charset=utf8', 'root', '');
     if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    ?>