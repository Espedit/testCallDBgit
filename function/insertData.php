<?php


$id=isset($_SESSION['idsess']);


function insertData()
{
  include('callDB.php');
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
    if(isset($_REQUEST['submit']))
     {


    $id=$_REQUEST['id'];

    $username =$_REQUEST['username'];
$email = $_REQUEST['email'] ;
$telefono = $_REQUEST['telefono'] ;
$nazione =$_REQUEST['nazione'] ;
$indirizzo =$_REQUEST['indirizzo'];
$città =$_REQUEST['città'] ;
$CAP=$_REQUEST['CAP'] ;





  if(preg_match("/@/",$_REQUEST['email']) == ""){

  echo '<script>alert( "Remeber of adding : @ in the field")</script>' ;


  $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");

  exit();

  }



   if(strcmp($_POST['telefono'],
  	strval(intval($_POST['telefono'] ) ) )

  ) {

  	 echo'<script>alert("Insert your phone number in numbers format ")</script>';

     $page = $_SERVER['PHP_SELF'];
     $sec = "1";
      header("Refresh: $sec; url=$page");
    exit();

  }

if(strlen($_POST['telefono']) <=  8 )
{


echo 'Inserted: ';
}else{
  	 echo'<script>alert("Insert your phone number max eight values ")</script>';
     $page = $_SERVER['PHP_SELF'];
     $sec = "1";
      header("Refresh: $sec; url=$page");
      exit();
}






$sqlcheck="SELECT username FROM users WHERE username='$username'  ";

if($outcheck=mysqli_query($conn,$sqlcheck))

{


while($rowcheck=mysqli_fetch_array($outcheck))
{

  if(in_array($username,$rowcheck))
  {

echo 'Warning. username already exists in DB ';

    $page = $_SERVER['PHP_SELF'];
    $sec = "1";
     header("Refresh: $sec; url=$page");
       exit();
  }
}


}


$sql = "INSERT INTO users
(username, email, telefono,nazione,indirizzo,città,cap)
VALUES ('$username', '$email', '$telefono','$nazione ',
  '$indirizzo','$città','$CAP')";

if (mysqli_query($conn, $sql)) {


  echo 'Ok : New line is created !';

  $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");



} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


mysqli_close($conn);
}
}






?>
