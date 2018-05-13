<?php
    include("dbconnect.php");
    $id=$_GET['id'];
    
    $query="SELECT * FROM message WHERE src_id=$id OR dest_id=$id";
    $array_result=array();
    if($result=mysqli_query($con,$query)){ 
        while($row=mysqli_fetch_row($result)){
            //pass
            $name;
            $query2;
            $dest;
            if($row[1]==$id){
                $query2="SELECT * FROM user WHERE no=".$row[2];
                $dest=$row[2];
            }else{
                $query2="SELECT * FROM user WHERE no=".$row[1];
                $dest=$row[1];
            }
            if($result2=mysqli_query($con,$query2)){
                while($row2=mysqli_fetch_row($result2)){
                    $name=$row2[8];
                }
            }
            $array_temp=array();
            array_push($array_temp,$name);
            array_push($array_temp,$dest);
            array_push($array_temp,$row[3]);
            array_push($array_result,$array_temp);
        }
    }
    echo urldecode(json_encode($array_result));
?>