
<?php
    include("dbconnect.php");
    $no=$_GET['no'];
    $isforeigner;
    $hashtag;

    $query="SELECT * FROM user WHERE no='$no'";
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            //pass
            $isforeigner=$row[10];
            $hashtag=$row[11];
        }
    }
    $hashtag=urldecode($hashtag);
    $hashtag_list=split("\/",$hashtag);


    $query="SELECT * FROM user WHERE isforeigner <> $isforeigner";
    $array_result=array();
    if($result=mysqli_query($con,$query)){
        while($row=mysqli_fetch_row($result)){
            if($row[11]=="null" || $row[11]==""){
                continue;
            }
            $count=0;
            $target_hashtag=urldecode($row[11]);
            $target_hashtag_list=split("\/",$target_hashtag);
            foreach($hashtag_list as $v){
                foreach($target_hashtag_list as $v2){
                    if($v==$v2){
                        $count++;
                    }
                }
            }
            if($count>=2){
                array_push($array_result,$row);
            }
        }
    }
    $len=count($array_result);

    $rand_num=rand(0,$len-1);
    echo urldecode(json_encode($array_result[$rand_num]));
?>