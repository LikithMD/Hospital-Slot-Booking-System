<?php
    
    session_start();
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    $key=$_REQUEST['key'];
    $id=$_REQUEST['id'];
    $id2=$_SESSION['id'];
    $dat=$_REQUEST['dat'];
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    
?>

<html>
    <head>
        <style>
           .info{
               margin: auto;
               margin-top: 100px;
               border:1px solid black;
               width: 300px;
               height:auto;
               background-color: gray;
               border:7px ridge lawngreen;
               font-weight: 1000;
               color: white;
           } 
           .info p{
                padding: 5px;
           }
           .info input[type=submit]{
               margin-left: 80px;
               padding: 10px;
               border-radius: 10px;
               background-color: lawngreen;
               color: white;
               font-weight: 1000;
           }
           .info input[type=submit]:hover{
               background-color: red;
           }
        </style>
    </head>
    <body>
        <div class="info">
           <?php
           if($_REQUEST['key']!=0){  
                $sql="SELECT Dhsp,Dname,Dspec,Dcity,Dduration FROM doctor WHERE Dno='$id'";
                $result = mysqli_query($conn, $sql);
                $tim=$_POST['sel'];

                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $e=$row['Dspec'];
                            $a=$row['Dname'];
                            $b=$row['Dhsp'];
                            $f=$row['Dcity'];
                            $h=$row['Dduration'];

                            echo "<p>DOCTOR NAME : $a</p>";
                            echo "<p>HOSPITAL NAME : $b</p>";
                            echo "<p>CITY : $f</p>";
                            echo "<p>DATE : $dat</p>";
                            echo "<P>DURATION : $h minutes</p>"; 
                            echo "<p>TIME : ".substr($tim,0,5)."</p>"; 
                            $nu=0;
                            echo "<form method='POST' action='sbookdb.php?id=$id&id2=$id2&dat=$dat&key=$nu&time=$tim'><input type='submit' value='Confirm Booking'></form>";

                        }
                    }
                    else{
                        echo "No Data Found";
                    }}
                    if($key==0){
                        $tim=$_REQUEST['time'];
                        $sql="INSERT INTO slotbook (Dno,pno,Ddate,Dtime) VALUES($id,$id2,'$dat','$tim');";
                                $result = mysqli_query($conn, $sql);
                        if($result){
                            echo "<script>alert('BOOKING SUCCESSFUL')</script>";
                            $k=0;
                            header("location: patient.php?key=$k");
                        }
                        else{
                            echo "<script>alert('ERROR....DBERROR')</script>";
                            $k=1;
                            header("location: patient.php?key=$k");
                        }
                        
                    }
           ?>
        </div>
    </body>
</html>