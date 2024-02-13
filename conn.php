<?php
 $username="root";
 $server="localhost";
 $db="EMPLOYEE_DB";
 $pwd="";
 $conn=new mysqli($server,$username,$pwd,$db);
 if (!$conn) 
    echo "connection failure<br>";
else
    echo"connection success<br>";
?>