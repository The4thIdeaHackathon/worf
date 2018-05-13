<?php
    include("dbconnect.php");
    $id=$_POST['id'];
    $email=$_POST['email'];
    $depart=$_POST['depart'];
    $major=urlencode($_POST['major']);
    $language=urlencode($_POST['language']);
    $studID=$_POST['studID'];
    $intro=urlencode($_POST['intro']);
    $name=urlencode($_POST['name']);
    $password=urlencode($_POST['password']);
    $isforeigner=$_POST['isforeigner'];
    $hashtag=urlencode($_POST['hashtag']);
    $query="INSERT INTO user(no,id,email,depart,major,language,studID,intro,name,password,isforeigner,hashtag) VALUES(NULL,'$id','$email','$depart','$major','$language','$studID','$intro','$name','$password',$isforeigner,'$hashtag')";
    mysqli_query($con,$query);
?>