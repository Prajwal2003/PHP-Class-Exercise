<?php
    include "conn.php";
    $id=$_GET["id"];
    $sql="select * from EMPLOYEE where id=".$id;
    $res=$conn->query($sql);

    if($res->num_rows>0){
        echo"<table>";
        while($row=($res->fetch_assoc()))
    {
        echo"<tr><td>".$row['ID']."</td>";
        echo"&nbsp; <td>".$row['FIRSTNAME']."</td>";
        echo"<td>".$row['LASTNAME']."</td>";
        echo"<td>".$row['GENDER']."</td>";
        echo"<td>".$row['DOB']."</td></tr>";
    }
    echo"</table>";
}   else{
    echo"no data found";}
?>