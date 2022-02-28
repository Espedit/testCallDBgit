<html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">

     <title>fetchtable</title>
     <style>
     table {
       font-family: arial, sans-serif;
       border-collapse: collapse;
       width: 100%;
     }

     td, th {
       border: 1px solid #2222;
       text-align: left;
       padding: 8px;
     }

     tr:nth-child(even) {
       background-color: #2222;
     }
     </style>
   </head>

   <body>


     <?php




     include('function/funcfetchtable.php');
    funcfetchtable();





          echo" <table>";
          echo "<tr>
             <th>username</th>
             <th>email</th>
             <th>telefono</th>
             <th>nazione</th>
             <th>indirizzo</th>
             <th>città</th>
             <th>CAP</th>
             </tr>";


             while($row = mysqli_fetch_array($output))
             {

          echo   "<tr>
               <td>{$row['username']}</td>
               <td>{$row['email']}</td>
               <td>{$row['telefono']}</td>
               <td>{$row['nazione']}</td>
                <td>{$row['indirizzo']}</td>
                <td>{$row['città']}</td>
                <td>{$row['cap']}</td>
             </tr>";



}
           echo "</table>";


?>
   </body>
 </html>
