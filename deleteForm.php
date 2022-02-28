<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DeleteForm</title>
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

    h2{

      text-align: center;
    }
    </style>
  </head>


  <body>
<?php
include('function/deleteData.php');



usleep(1000000);
  deleteData();

 ?>


    <h2>DeleteForm</h2>
<form   method="post">
  <label ">ID</label>
  <input type="text"  name="id" placeholder="ID.." required>

  <label for="username">username</label>
  <input type="text"  name="username" placeholder="Your username.." required>

  <input type="submit" value="delete"  name="delete">
</form>
  </body>
</html>
