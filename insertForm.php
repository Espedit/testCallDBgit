<?php session_start();
if(isset( $_SESSION['idsess'])){

   $_SESSION['idsess'] = $id=isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
}
?>
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




  include('function/insertData.php');
usleep(1000000);
insertData();



?>

<div>
  <form  method="post">

<input type="hidden" name="id" id="id" value="'$id'">
    <label for="username">username</label>
    <input type="text"  name="username" placeholder="Your username.." required>

    <label for="email">email</label>
    <input type="text" name="email" placeholder="Your email.." required>

    <label for="telefono">telefono</label>
  <input type="text"  name="telefono" placeholder="Your telefono.." required>


<label for="nazione">nazione</label>
<input type="text"  name="nazione" placeholder="Your nazione.." required>

<label for="indirizzo">indirzzo</label>
<input type="text"  name="indirizzo" placeholder="Your indirizzo.." required>

<label for="città">città</label>
<input type="text"  name="città" placeholder="Your città.." required>

<label for="CAP">CAP</label>
<input type="text" name="CAP" placeholder="Your CAP.." required>

    <input type="submit" value="Submit"  name="submit">
  </form>
</div>







  </body>
</html>
