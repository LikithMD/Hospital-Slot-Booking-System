<?php
    session_start();
    $id=$_SESSION['id'];
   
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
            .container form{
                display: inline-block;
                margin-left: 50px;
                margin-top: 100px;
            }
            .container input[type=date]{
                font-size: 20px;
                width:300px;

            }
            .container input[type=submit]{
                background-color: lawngreen;
                color:white;
                font-weight: 1000;
                margin-left: 10px;
                margin-top: 10px;
                margin-bottom: 0px;
                padding: 5px;
                width: 100px;
            }
            .container input[type=submit]:hover{
                background-color: red;
            }
            .container table{
                margin-left: 200px;
                margin-top: 20px;
            }
            .container th{
                background-color: lawngreen;
                color: white;
            }
            .container td{
                background-color: lightgrey;
                text-align: center;
            }
            .container table,td,th{
                border: 5px solid white;
                border-collapse: collapse;
                padding: 5px;

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
                <p>STATUS: PATIENT</p>
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
                <form action="billview.php" method="POST">
                    ENTER DATE TO VIEW BILLING:<br>
                    <input type="date" name="date">
                    <input type="submit" name="view" value="VIEW">
                </form>
                <?php
                    if(isset($_POST['view'])){
                        $servername = "localhost";
                        $username = "hms";
                        $password = "root";
                        $dbname="hms";
                        $dat=$_POST['date'];
    
                        $conn = mysqli_connect($servername, $username, $password,$dbname);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        } 
                        $sql = "SELECT pno,cf,mf,am,total FROM bill where Bdate='$dat' and Dno='$id'";
                        $result = mysqli_query($conn, $sql);
                        echo "<table>";
                        echo "<tr>";
                        echo "<th>PATIENT NUMBER</th>";
                        echo "<th>CONSULTATION FEES</th>";
                        echo "<th>MEDICAL FEES</th>";
                        echo "<th>AMENITIES FEES</th>";
                        echo "<th>TOTAL</th>";
                        echo "</tr>";
                        if (mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>".$row['pno']."</td>";
                                echo "<td>".$row['cf']." Rs</td>";
                                echo "<td>".$row['mf']." Rs</td>";
                                echo "<td>".$row['am']." Rs</td>";
                                echo "<td>".$row['total']." Rs</td>";
                                echo "</tr>";   
                            }
                        }
                        else{
                            echo "DATA NOT FOUND";
                        }
                        echo "</table>";
                }
                ?>
            </div>
        </div>
    </body>
</html>