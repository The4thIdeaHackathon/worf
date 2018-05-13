<?php
    include("dbconnect.php");
    $src=$_POST['src'];
    $dest=$_POST['dest'];
    $message_no=$_POST['message_no'];

    $query="SELECT * FROM message WHERE ((src_id=$src AND dest_id=$dest) OR (src_id=$dest AND dest_id=$src)) AND $message_no < no";
    $array_result=array();
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            array_push($array_result,$row);
        }
    }
    
    echo urldecode(json_encode($array_result));
?>