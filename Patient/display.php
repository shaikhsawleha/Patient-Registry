<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="assets/css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet" type="css/text">
   <link rel="stylesheet" href="assets/font-awesome/font-awesome.min.css">
</head>
<body>
  <header>
  <nav>
    <div class="main clearfix">
      <img src ="assets/img/LOGO.png" class="logo">
      <h1>Healthcare</h1>
      <ul class="menu animated slideInDown" id="check">
      <li><a href="f2.php">ADD PATIENT INFO</a></li>
      <li><a href="display.php">SHOW PATIENT INFO</a></li>
      </ul>
      <a href="#" class="icon"  onclick="slideOption()"><i class="fa fa-bars" aria-hidden="true"></i></a>
    </div>

    <div class="search" style="overflow-x:auto;">
      <form method="post">
    <input type="search" name="search">
    <button>search</button>
  </form></div>
  </nav>

  <?php
  include "config/dbconnect.php";
  $set=$_POST['search'];
  if($set){
    $display="SELECT * FROM patient_data where firstname='$set'";
    $result = $conn->query($display);
    echo "<table>
          <tr>
            <th>FIRSTNAME</th>  <th>LASTNAME</th> <th>AGE</th> <th>DOB</th> <th>MOBILE NUMBER</th> <th>DESCRIPTION</th>
            </tr>";

            // output data of each row
            while($row = $result->fetch_assoc()) {

            echo "<tr>
                  <td>".$row["firstname"]."</td>
                  <td>".$row["lastname"]." </td>
                  <td>".$row["age"]."</td>
                  <td>".$row["dob"]."</td>
                  <td>".$row["phoneNumber"]."</td>
                  <td>".$row["description"]."</td>
                  </tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
  $conn->close();
  ?>

<?php
include "config/dbconnect.php";
$query = "SELECT * FROM patient_data";
$result = $conn->query($query);
if ($result->num_rows > 0) {
echo "<table>
      <tr>
        <th>FIRSTNAME</th>  <th>LASTNAME</th> <th>AGE</th> <th>DOB</th> <th>MOBILE NUMBER</th> <th>DESCRIPTION</th>
        </tr>";

        // output data of each row
        while($row = $result->fetch_assoc()) {
        echo "<tr>
              <td>".$row["firstname"]."</td>
              <td>".$row["lastname"]." </td>
              <td>".$row["age"]."</td>
              <td>".$row["dob"]."</td>
              <td>".$row["phoneNumber"]."</td>
              <td>".$row["description"]."</td>
              </tr>";

        }
        echo "</table>";
        echo "<br/>";
    } else {
        echo "0 results";
    }
    echo "<br/>";
$conn->close();
?>
</body>
</html>
