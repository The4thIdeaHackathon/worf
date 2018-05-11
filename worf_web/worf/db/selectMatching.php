<?php
    include("dbconnect.php");
    $no=$_GET['no'];
    $isforeigner;

    $query="SELECT * FROM user WHERE no='$no'";
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            //pass
            $isforeigner=$row[10];
        }
    }
    
    $query="SELECT * FROM user WHERE isforeigner <> $isforeigner";
    $array_result=array();
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            array_push($array_result,$row);
        }
    }
    $len=count($array_result);
    $rand_num=rand(0,$len-1);
    echo urldecode(json_encode($array_result[$rand_num]));
?>