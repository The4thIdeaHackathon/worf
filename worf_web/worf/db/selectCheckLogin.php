<?php
    include("dbconnect.php");
    $id=$_POST['id'];
    $pw=$_POST['pw'];
    
    $query="SELECT * FROM user WHERE id='$id' AND password='$pw'";
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            //pass
            echo $row[0];
            return;
        }
    }
    echo 0;
    return;
?>