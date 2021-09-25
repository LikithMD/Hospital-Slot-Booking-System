<?php
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    $id=$_REQUEST['id'];
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $a=$_POST['old'];
    $b=$_POST['new'];


    $sql="UPDATE regtab SET pass='$b' WHERE pass='$a' and Ano='$id'";
    $result=mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==1){
        $key=0;
        header("location:patientupdate.php?key=$key&id=$id");
    }
    else{
        $key=1;
        header("location:patientupdate.php?key=$key&id=$id");
    }
?>