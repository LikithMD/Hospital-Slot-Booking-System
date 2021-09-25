<?php
    session_start();
    if($_REQUEST['key']==0){
        echo"<script>alert('SLOT BOOKED..!')</script>";
    }
    if($_REQUEST['key']==1){
        echo"<script>alert('ERROR in booking slot...!!!')</script>";
    }
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";                   
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                margin: 0;
            }
            .snav{
                border: 1px solid black;
                height: 100%;
                width: 20%;
                height: 1000px;
                float: left;
            }
            .main{
                border: 1px solid black;
                width: 80%;
                height: 1000px;
                margin-left: 300px;
            }
            .prof{
                border: 1px solid black;
                width: 98%;
                height: 30%;
            }
            .nav{
                border: 1px solid black;
                width: 99%;
                margin-left: 10px;
                height: 65px;  
                background-color: gray;
            }
            .col{
                height: 70%;
                background-color: grey;
            }
            
            .col ul{
                display: inline;
                list-style-type: none;
                margin-left: 0px;
            }
            .col ul li{
                display: block;
                padding: 10px;
                width:91%;
                border-radius: 5px;
                text-align: center;
                font-size: 20px;
                background-color: gray;
            }
            .col ul li a{
                display: block;
                padding: 10px;
                text-decoration: none;
                color: black; 
                border-radius: 5px;
                background-color:lawngreen;
                color: white;
                font-weight: 1000;
            }
            .col ul li a:hover{
                background-color: red;
                padding: 25px;
                font-size: 25px;
            }
            .logo img{
                height: 50px;
                width: auto;
                margin: 5px 2px 2px 5px;
                float: left;
            }
            .logo p{
                display: block;
                margin-left: 10px;
                font-size: 20px;
                font-weight: 1000;
                color: white;
                float: left;
            }
            .logo input[type=submit]{
                margin-left: 680px;
                margin-top: 15px;
                padding: 5px;
                font-weight: 500;
                font-size: 20px;
                background-color: lawngreen;
                color: white;
                border: 1px solid darkgreen;
            }
            .logo input[type=submit]:hover{
                background-color: red;
            }
            .prof{
                background-color: darkgrey;
                border:6px ridge grey;
            }
            .prof:hover{
                background-color: gray;
               
            }
            .prof img{
                margin-top: 10px;
                margin-left:85px;
                width: auto;
                height: 130px;
                border-radius: 50%;
            }
            .prof p{
                color: white;
                font-weight: 1000;
                text-align: center;
                font-size: 25px;
            }
            .slot{
                border:5px ridge darkgray;
                width:600px;
                height: auto;
                margin-top: 20px;
                margin-left: 300px;
                font-weight: 1000;
                background-color: gray;
                color: white;
                box-shadow: 3px 3px black;
            }
            .sdec{
                display: inline; 
            }
            #sdec{
                margin-left: 370px;
            }
            .slotdec{
                border-top:3px ridge darkgray;
                border-bottom:3px ridge darkgray;
                background-color: lightgray;
                color: black;

            }
        </style>
        <script>
            function check(){
                var x=document.getElementById("container");
                x.innerHTML="helo";
            }
        </script>
    </head>
    <body>
        <div class="snav">
            <div class="prof">
                <img src="mal.webp">
                <p>STATUS: patient</p>
                
            </div>
            <div class="col">
                <ul>
                    <li><a href="patient.php?key=3">Activity</a></li>
                    <li><a href="patientupdate.php?key=3">Update Account</a></li>
                    <li><a href="patient2.php">Slot booking</a></li>
                    <li><a href="patfeedback.php?key=3">Feedback</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="hspi.webp">
                    <p>Hospital Management Website </p>
                    <form action="logout.php">
                        <input type="submit" value="Log out">
                    </form>
            </div>
            <div class="container" id="container">
                <?php
                    $sql = "SELECT Dno,Ddate,Dtime from slotbook where pno='$id'";
                    $result = mysqli_query($conn, $sql);

                    
                    while($row = mysqli_fetch_assoc($result)) {
                        $cd=date("Y-m-d");
                        $a=$row['Dno'];
                        $b=strtotime($row['Ddate']);
                        $nn=date("Y-m-d",$b);
                        $c=$row['Dtime'];
                        if($cd<=$nn){
                            echo "<div class='slot'>";
                            echo "<p class='sdec'>DATE : $nn</p>";
                            echo "<p class='sdec' id='sdec'>TIME : ".substr($c,0,5)."</p>";
                            $sql2 = "SELECT Ddesc,Dname,Dcity from doctor where Dno='$a'";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            echo "<div class='slotdec'><p>DOCTOR NUMBER : $a</p>";
                            echo "<p>DOCTOR NAME :".$row2['Dname']."</p>";
                            echo "<p>DESCRIPTION : ".$row2['Ddesc']."</p>";
                            echo "<p>CITY : ".$row2['Dcity']."</p></div>";
                            echo "</div>";
                            
                        }
                    }
                    
                   
    ?>
            </div>
        </div>
    </body>
</html>