<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yolo";

    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connetion
   if ($conn -> connect_error)
   {
       die ("Connection faield". $conn-> connect_error);
   }
   else {
     
   }
    
?>