<?php
    include 'conn.php';
    
    $oid=$_GET["id"];
    $nid=$_GET["id"];
    $name=$_GET["fn"];
    $lname=$_GET["ln"];
    $date=$_GET["dd"];
    $gender=$_GET["gen"];

    $sql="UPDATE EMPLOYEE SET ID = ".$nid." ,FIRSTNAME = ".$name" ,LASTNAME = ".$lname." ,GENDER = ".$gender" ,DOB = ".$date." WHERE ID = ".$oid.";";
    
    if($conn->query($sql))
        echo"Updated";
    else
        echo"Failed to Delete".error();
    $conn->close();
    ?>