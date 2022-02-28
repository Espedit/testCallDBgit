<?php

function deleteData()

{

  include('callDB.php');
if(isset($_REQUEST['delete']))

  {



      $username =$_REQUEST['username'];
$id=$_REQUEST['id'];



  $sqlcheck="SELECT username,ID FROM users WHERE username='$username' AND ID='$id'  ";

  if($outcheck=mysqli_query($conn,$sqlcheck))

  {


  while($rowcheck=mysqli_fetch_array($outcheck))
  {

    if(in_array($username,$rowcheck) && in_array($id,$rowcheck))
    {


      $sqldelete="DELETE FROM users where ID='$id'
      AND username='$username'";


      if (mysqli_query($conn, $sqldelete)) {


        echo 'Ok : current row was deleted !';

        $page = $_SERVER['PHP_SELF'];
        $sec = "1";
         header("Refresh: $sec; url=$page");



      } else {

      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

      $page = $_SERVER['PHP_SELF'];
      $sec = "1";
       header("Refresh: $sec; url=$page");
         exit();
    }else{

      echo 'username  or ID not found';
    }
  }
}


}

}



 ?>
