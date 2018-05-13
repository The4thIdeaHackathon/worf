<?php
    include("dbconnect.php");
    $id=$_POST['id'];
    $hashtag=urlencode($_POST['hashtag']);
    $query="UPDATE user SET hashtag='$hashtag' WHERE no=$id";
    mysqli_query($con,$query);
?>