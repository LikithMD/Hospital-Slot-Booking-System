<?php
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    session_start();
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
    $nam=$_POST['name'];
    $mob=$_POST['mobno'];
    $dat=$_POST['dob'];
    $an=$_POST['aadhar'];
    $em=$_POST['email'];
    $pas=$_POST['psw'];

    $sql = "INSERT INTO regtab(pname, mno, dob, Ano, email_id, pass, val) VALUES ('$nam',$mob,$dat,$an,'$em','$pas',2)";
    if(mysqli_query($conn, $sql)){
        $subject  = 'Testing sendmail.exe';
        $message  = "<h1>Welcome $nam</h1><p>You have succesfully registered an account in our Webite..</p>";
        $headers  = 'From:noreply@example.com' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=utf-8';
        mail($em, $subject, $message, $headers);
        header("location: login.php");
    }
    else
        echo "Your Account Exists..Registration failed!!..<a href='register.php'>Retry Register?</a>";

    
    mysqli_close($conn);
?>