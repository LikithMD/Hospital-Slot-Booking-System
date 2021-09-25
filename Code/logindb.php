<?php
    session_start();
    
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    $no=$_POST['username'];
    $_SESSION['id']=$no;
    $p=$_POST['password'];

    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "SELECT val FROM regtab WHERE Ano='$no' and pass='$p'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)==1){
        while($row = mysqli_fetch_assoc($result)) {
            if($row["val"]==0){
                header("location: admin.php?key=3");
            }
            else if($row["val"]==1){
                header("location: doctor.php?key=3");
            }   
            else
                header("location: patient.php?key=3");
            

        }
    }
    else{
        echo "INVALID ADHAAR NUMBER OR PASSWORD..<a href='login.php'>Retry Log in?</a>";
        session_destroy();
    }
    
    mysqli_close($conn);

?>

