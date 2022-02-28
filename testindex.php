
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>insertnew</title>
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
    background-color: #f2f2f2;
    padding: 20px;
  }
  </style>
  <body>

  <h3>InsertForm</h3>

  <?php

if(isset($_REQUEST['submit']))


{
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


  echo 'OK';
  $page = $_SERVER['PHP_SELF'];
  $sec = "1";
   header("Refresh: $sec; url=$page");
 exit();
}else{
  	 echo'<script>alert("Insert your phone number max eight values ")</script>';
     $page = $_SERVER['PHP_SELF'];
     $sec = "1";
      header("Refresh: $sec; url=$page");
}

}

  ?>

  <div>
    <form  method="post">


      <label for="telefono">telefono</label>
    <input type="text"  name="telefono" placeholder="Your telefono.." required>




      <input type="submit" value="Submit"  name="submit">
    </form>
  </div>







    </body>
  </html>
