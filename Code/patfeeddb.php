<?php
    session_start();
    $id=$_SESSION['id'];
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    $a=(int)$_POST['no'];
    $b=$_POST['rating'];
    $c=$_POST['comments'];
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    $sql="INSERT INTO feedback(Dno,pno,rate,feed) VALUES ($a,$id,$b,'$c');";
    
    $result = mysqli_query($conn, $sql);
    if ($result==1){
        echo "her";
        $key=0;
        header("location:patfeedback.php?key=$key");
    }
    else{
        $key=1;
        header("location:patfeedback.php?key=$key");
    }
?>