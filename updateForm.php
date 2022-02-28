<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>updateform</title>
  </head>
  <body>

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #3484BF
  padding: 20px;
}
</style>
<body>

<h3>updateForm</h3>

<?php
include('function/callDB.php');

if(isset($_REQUEST['update']))
{
// session_start()
// if(isset( $_SESSION['idsess'])){
//
//    $_SESSION['idsess'] = $id=isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
// }
//
// $id =isset($_REQUEST['id']);
// $username =isset($_REQUEST['username']);
// $email = isset($_REQUEST['email']) ;
// $telefono = isset($_REQUEST['telefono']) ;
// $nazione =isset($_REQUEST['nazione']) ;
// $indirizzo =isset($_REQUEST['indirizzo']);
// $città =isset($_REQUEST['città']) ;
// $CAP=isset($_REQUEST['CAP'] );
//
//
// $row;
// $out1;
//
// $query = "SELECT * from users  ";
//
//
//
// if($output=mysqli_query($conn,$query))
//
// {
//
//
//
//
//
// while($row = mysqli_fetch_array($output))
// {
//
//
// $rowid=$row['ID'];
// $rowuser=$row['username'];
// $rowmail =$row['email'];
// $rowtel=$row['telefono'];
// $rownaz = $row['nazione'];
// $rowcit= $row['città'];
// $rowcap=$row['cap'];
//
//
// var_dump($row);
//
// if(!array_search($username,$row)) {
//
//
//   $page = $_SERVER['PHP_SELF'];
//   $sec = "1";
//    header("Refresh: $sec; url=$page");
//    echo '<h4>Not present</h4>';
//      exit();
// }else{




// switch($row)
// {
//
//   case $username :
// if(!array_search($username,$row)) {
//
//   $page = $_SERVER['PHP_SELF'];
//   $sec = "1";
//    header("Refresh: $sec; url=$page");
//    echo '<h4>Not present</h4>';
//      exit();
// };
//   break;
//   case $email :
//   if(!array_search($email,$row))
//   {
//     $page = $_SERVER['PHP_SELF'];
//     $sec = "1";
//      header("Refresh: $sec; url=$page");
//        exit();
//   } ;
//   break;
//   case $telefono:
//   if(!array_search($telefono,$row))
//   {
//     $page = $_SERVER['PHP_SELF'];
//     $sec = "1";
//      header("Refresh: $sec; url=$page");
//        exit();
//   };
//   break;
//   case $nazione :
//   if(!array_search($nazione,$row)){
//     $page = $_SERVER['PHP_SELF'];
//     $sec = "1";
//      header("Refresh: $sec; url=$page");
//        exit();
//   }
//   case $città;
//   if(!array_search($città,$row)){
//
//     $page = $_SERVER['PHP_SELF'];
//     $sec = "1";
//      header("Refresh: $sec; url=$page");
//        exit();
//   }
//   case $CAP :
//   if(!array_search($CAP,$row))
//   {
//
//     $page = $_SERVER['PHP_SELF'];
//     $sec = "1";
//      header("Refresh: $sec; url=$page");
//        exit();
//   }
// }



include('function/updateData.php');
usleep(1000000);
updateData();



}




?>



    <div>
      <form  method="post">

            <label for="username">ID</label>
                  <input type='text'  name='id'  placeholder='ID..' required>
        <label for="username">username</label>
              <input type='text'  name='username'  placeholder='Your username..' required>
                <label for='email'>email</label>
                <input type='text' name='email' placeholder='Your email..' required>

                <label for='telefono'>telefono</label>
              <input type='text'  name='telefono' placeholder='Your telefono..' required>

              <label for='nazione'>nazione</label>
            <input type='text'  name='nazione' placeholder='Your nazione..' required>


            <label for='indirizzo'>indirzzo</label>
            <input type='text'  name='indirizzo' placeholder='Your indirizzo..'required>

            <label for='città'>città</label>
            <input type='text'  name='città' placeholder='Your città..' required>

            <label for='CAP'>CAP</label>
            <input type='text' name='CAP' placeholder='Your CAP..' required>

                <input type='submit' value='update' name='update'>

                </form>
                    </div>















  </body>
</html>
