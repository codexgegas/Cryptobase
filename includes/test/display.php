<?php
include_once "../CRYPTOBASE/parts/config.php";
 $sql= "SELECT * FROM `coin_table`";
 $result=mysqli_query($conn, $sql);
 $nums= mysqli_num_rows($result);
echo "connected"
?>
