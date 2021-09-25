<?php
    if($_REQUEST['key']==0)
        echo "<script>alert('BILL ADDED');</script>";

    if($_REQUEST['key']==1)
        echo "<script>alert('BILL NOT ADDED);</script>";
    session_start();
    $id=$_SESSION['id'];
    
    $servername = "localhost";
    $username = "hms";
    $password = "root";
    $dbname="hms";
    $conn = mysqli_connect($servername, $username, $password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    
?>
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
            .slot input[type=submit]{
                background-color: lawngreen;
                color:white;
                font-weight: 1000;
                margin-left: 250px;
                margin-top: 10px;
                margin-bottom: 0px;
                padding: 5px;
                width: 100px;
            }
            .slot input[type=submit]:hover{
                background-color: red;
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
                <p>STATUS: Doctor</p>
            </div>
            <div class="col">
                <ul>
                    <li><a href="doctor.php?key=3">Activity</a></li>
                    <li><a href="docslot.php?key=3">Update SLOTS</a></li>
                    <li><a href="fed.php">View Feedback</a></li>
                    <li><a href="billview.php">Billing View</a></li>
                    <li><a href="news.php">NEWS</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="hspi.webp">
                    <p>HOSPITAL MANAGEMENT SYSTEM</p>
                    <form action="logout.php">
                        <input type="submit" value="Log out">
                    </form>
            </div>
            <div class="container" id="container">
                <?php
                    $sql = "SELECT pno,Ddate,Dtime from slotbook where Dno='$id'";
                    $result = mysqli_query($conn, $sql);

                    
                    while($row = mysqli_fetch_assoc($result)) {
                        $cd=date("Y-m-d");
                        $a=$row['pno'];
                        $b=strtotime($row['Ddate']);
                        $nn=date("Y-m-d",$b);
                        $c=$row['Dtime'];
                        if($cd==$nn){
                            echo "<div class='slot'>";
                            echo "<p class='sdec'>DATE : $nn</p>";
                            echo "<p class='sdec' id='sdec'>TIME : ".substr($c,0,5)."</p>";
                            $sql2 = "SELECT pname,mno,dob,email_id from regtab where Ano='$a'";
                            $result2 = mysqli_query($conn, $sql2);
                            $row2 = mysqli_fetch_assoc($result2);
                            echo "<div class='slotdec'>";
                            echo "<p>PATIENT NAME :".$row2['pname']."</p>";
                            echo "<p>MOBILE NUMBER : ".$row2['mno']."</p>";
                            echo "<p>DATE OF BIRTH : ".$row2['dob']."</p>";
                            echo "<p>EMAIL_ID : ".$row2['email_id']."</p></div>";
                            echo "<form action='billing.php?id2=$a&date=$nn' method='POST'><input type='submit' value='BILL'></form>";
                            echo "</div>";
                        }
                    }
                ?>
            </div>
        </div>
    </body>
</html>
