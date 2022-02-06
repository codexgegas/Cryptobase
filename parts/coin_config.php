<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$servername = "localhost";
$db = "cryptobase";
$username = "root";
$password = "";
$fav="";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
if ($_GET["name"])

{
  $_GET["fav"]="";
    
    if ($_GET["name"]== 'all' || $_GET["name"]== 'All' ) {
      
      $sql = "SELECT * from `coin_table`;";
      
    } 
    else {
      $sql = "SELECT * from `coin_table` where `name` in ('" . $_GET["name"] . "');";
 
    }
    
    $result = mysqli_query($conn, $sql) or die("error getting info");


    while ($row = mysqli_fetch_assoc($result))
    {
        echo "<tr><td> ." . $row["id"] . "</td><td>" . $row["coin_id"] . "</td><td>" . $row["symbol"] . "
    </td>
    <td>
    " . $row["price"] . "
    </td>
    <td>
    " . $row["percent_change_24h"] . "
    </td>
    <td>
    " . $row["total_volume"] . "
    </td>
    <td>" . $row["market_cap"] . "
    </td>
    <td>
</tr>" ;
    }
    
}

if($_GET['fav'])
{
  $sql = "UPDATE users SET Fav='".$_GET['fav']."' WHERE username='".$_GET['user']."'";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
}
exit();

