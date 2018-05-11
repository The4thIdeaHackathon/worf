<?php
    include("dbconnect.php");
    $src_id=$_POST['src_id'];
    $dest_id=$_POST['dest_id'];
    $text=$_POST['text'];
    $time=date("Y-m-d H:i:s");
    $query="INSERT INTO message(no,src_id,dest_id,text,time) 
    VALUES(NULL,$src_id,$dest_id,'$text','$time')";
    mysqli_query($con,$query);
?>