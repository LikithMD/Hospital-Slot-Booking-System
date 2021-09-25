<?php
    session_start();
    $a=$_REQUEST['a'];
    $b=$_REQUEST['b'];
    $c=$_REQUEST['c'];
    $d=$_REQUEST['d'];

    $id=$_SESSION['id'];

    $id2=$_REQUEST['id2'];
    $date=$_REQUEST['date'];

    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } 
      $sql = "INSERT INTO bill (Dno,pno,cf,mf,am,total,Bdate) values ('$id',$id2,$a,$b,$c,$d,'$date')";
      $result = mysqli_query($conn, $sql);
      if($result){
          $k=0;
          header("location:doctor.php?key=$k");
      }
      else{
        $k=0;
        header("location:doctor.php?key=$k");
      }
?>