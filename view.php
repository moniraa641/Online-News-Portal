<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
die("Connection failed: " . mysqli_connect_error());
}else{

}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View</title>
  </head>
  <body>
    <?php
    if(isset($_POST['search'])){
      $username  ='%'.$_POST['username'].'%';
      $sql = "SELECT * FROM latestnews where type LIKE '$username';";
    }else{
      $sql = "SELECT * FROM latestnews;";
    }

    $result = mysqli_query($conn, $sql);



     ?>
     <form class="" action="" method="post">
       <input type="text" name="username" value=""><input type="submit" name="search" value="search">
     </form>
    <table border="1">
      <tr>
        <td>UserName</td>
        <td>Email</td>
        <td>Address</td>
        <td>Web Address</td>
        <td>Date of Birth</td>
        <td>Gender</td>
        <td>Course</td>
      </tr>
      <?php
      if (mysqli_num_rows($result) > 0) {

        while($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>". $row["type"]."</td>";
         /*echo "<td>". $row["email"]."</td>";
          echo "<td>". $row["address"]."</td>";
          echo "<td>". $row["web_address"]."</td>";
          echo "<td>". $row["dob"]."</td>";
          echo "<td>". $row["gender"]."</td>";
          echo "<td>". $row["enrolled_course"]."</td>";*/
          echo "</tr>";
        }
      }else{
        echo "<tr>";
        echo "<td colspan='7'>"."No Result Found"."</td>";

      }


       ?>

    </table>

  </body>
</html>
