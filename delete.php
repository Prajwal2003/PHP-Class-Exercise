<?php
    include 'conn.php';
    $id=$_GET["id"];

    $sql="DELETE FROM EMPLOYEE WHERE ID =".$id;
    if($conn->query($sql))
        {echo"Deleted";
        echo $sql;
            }
                else
        echo"Failed to Delete";
    $conn->close();
    ?>