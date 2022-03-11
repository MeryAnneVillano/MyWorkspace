<?php
  # INSERT INTO Contact ('contactId', 'firstName', 'lastName', 'email', 'age', 'salary', 'address') VALUES
   # (1, 'Mery', 'Villano', 'merymery', 12, 123, 'tarlac'); 
?>

<?php
    $con = mysqli_connect("127.0.01", "root", "", "awd_db"); 
//server, username, password, database_name
    if($con){
        echo 'Connected successfully';
    }else{
        echo 'Failed to connect';
    }
?>

