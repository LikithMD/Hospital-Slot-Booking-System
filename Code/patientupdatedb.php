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
    $a=$_POST['name'];
    $b=$_POST['dob'];
    $c=$_POST['email'];
    $d=$_POST['mob'];

    $sql="UPDATE regtab SET pname='$a',mno='$d',dob='$b',email_id='$c' WHERE Ano='$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        $key=0;
        header('location:patientupdate.php?key=$key');
    }
    else{
        $key=1;
        header('location:patientupdate.php?key=$key');
    }
?>