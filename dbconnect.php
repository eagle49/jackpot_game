<?php

    //database name = "db_jack"
    //table name = "winners"

    $name = $_POST["name"];
    $cellnumber = $_POST['cellnumber'];
    $date = date("Y-m-d");

    echo $date;
    $con = mysqli_connect("localhost","root","", 'db_jack');
    $sql = "INSERT INTO winners (name, cellnumber, date) VALUES ('".$name."',".$cellnumber.",'".$date."');";
    $result= mysqli_query($con, $sql);
    
    if ($result) 
        echo 'success';
    else 
        echo 'failure'. $sql;

    mysqli_close($con);
?>