<?php
    include 'conn.php';
    $id=$_GET["id"];
    $name=$_GET["fn"];
    $lname=$_GET["ln"];
    $date=$_GET["dd"];
    $gender=$_GET["gen"];

    $sql="INSERT INTO EMPLOYEE VALUES(".$id.",'".$name."','".$lname."','".$gender."','".$date."')";
    if($conn->query($sql))
        echo"inserted";
    else
        echo"failed to insert";
    $conn->close();
    ?>