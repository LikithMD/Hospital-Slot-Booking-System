<?php
session_start();
    $s=$_POST['s'];
    $a=$_POST['t1'];
    $b=$_POST['t2'];
    $c=$_POST['t3'];
    $d=$_POST['t4'];
    $e=$_POST['t5'];
    $f=$_POST['t6'];
    $g=$_POST['t7'];
    $h=$_POST['t8'];

    $id=$_SESSION['id'];
    

    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      } 
      $sql = "UPDATE doctor SET Dslots='$s' WHERE Dno='$id'";
      $result = mysqli_query($conn, $sql);
      if(!$result){
          $k=1;
          header("location:docslot.php?key=$k");
      }
    
      $sql = "UPDATE docslots SET s1='$a',s2='$b',s3='$c',s4='$d',s5='$e',s6='$f',s7='$g',s8='$h' WHERE Dno='$id'";
      $result = mysqli_query($conn, $sql);
      if($result){
          $k=0;
          header("location:payment.php?key=$k");
      }
      else{
        $k=1;
        header("location:docslot.php?key=$k");
      }


?>