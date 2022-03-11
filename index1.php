<?php
include_once 'index.php';
?>

<?php
$sql="INSERT INTO user (Id, name) VALUES (1, 'Mery')";
$stmt=$con->prepare($sql);
if($stmt->execute()){
  echo ' User has been added successfully ';
}else{
  echo ' User has not been added successfully ';
}
?>