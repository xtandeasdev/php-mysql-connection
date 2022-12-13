<?php 
  //Import database
  include 'connection.php';
  //Sql code
  $sql = "select * from users;";
  //Database query
  $query = mysqli_query($connection, $sql);
  $count_rows = mysqli_num_rows($query);
 
  echo "Your site have $count_rows users!"; 
?>
