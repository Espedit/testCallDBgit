<?php



function  updateData()
{

 include('callDB.php');

 if(isset($_REQUEST['update']))
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


echo 'Update: ';
}else{
   echo'<script>alert("Insert your phone number max eight values ")</script>';
   $page = $_SERVER['PHP_SELF'];
   $sec = "1";
    header("Refresh: $sec; url=$page");
    exit();
}





$sqlcheck="SELECT ID FROM users WHERE ID='$id'  ";


if($outcheck=mysqli_query($conn,$sqlcheck))

{


while($rowcheck=mysqli_fetch_array($outcheck))
{


    if(in_array($id,$rowcheck))
    {

      $query="UPDATE users SET username='$username',
      email='$email',
      telefono='$telefono',
       nazione='$nazione',
       indirizzo='$indirizzo',
       città='$città',
       cap='$CAP'

      where ID='$id'


      ";

      if(mysqli_query($conn,$query)){

      echo '<h2 style="text-align:center">Updated current row:YES</h2>';
      $page = $_SERVER['PHP_SELF'];
      $sec = "1";
      header("Refresh: $sec; url=$page");
      exit();

      }else{

      echo "Error: " . $query . "<br>" . mysqli_error($conn);



      }

 }


  }

}









 // $send=mysqli_query($conn,$query);
 //
 // if(!$send){
 //
 //
 //   echo 'No updated current row'. mysqli_error();
 // }else{





 mysqli_close($conn);






}
}


















 ?>
