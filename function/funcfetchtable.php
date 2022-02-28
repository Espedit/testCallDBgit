<?php
function funcfetchtable ()

 {


       include('callDB.php');
       global $row;
       global $out1;
       global $output;
  $query = "SELECT * from users ";


$output=mysqli_query($conn,$query);



$numrows=mysqli_num_rows($output);



//   // output data of each row


mysqli_close($conn);

}
// echo "username: " . $row["username"].
//  "  email: " . $row["email"].
//  "telefono: " . $row["telefono"].
//  "nazione:" .$row["nazione"].
//  "indirizzo:" .$row['indirizzo'].
//  "città:" .$row['città'].
//  "CAP:" .$row['CAP'];
?>
