
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
                
                width: 100%;
                margin-left: 0px;
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
                padding: 15px;
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
                width: 293px;
                background-color: darkgrey;
                border:6px ridge grey;
            }
            .prof:hover{
                background-color: gray;
                opacity: 0.8;
               
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
            .selec{
                margin-top: 30px;
                width: 100%;
                height: 60px;
            }
            .select p{
                display: inline-block;
                font-weight: 1000;
            }
            .select{
                margin-top: 5px; 
                float: left;
                margin-right: 10px;
                margin-left: 12px;
            }
            
            .select form{
                display: inline;
            }
            select{
                width: 300px;
                height: 30px;
                font-size: 15px;
            }
            .select input[type=date]{
                width: 200px;
                font-size: 15px;
            }
            .select input[type=submit]{
                width: 100px;
                height: 30px;
                margin-top: 10px;
                font-size: 15px;
            }
            .cont{
                margin-left: 20px;
            }
            .disp{
                border: 3px solid black;
                width: 250px;
                height: auto;
                text-align: center;
                font-weight:bolder;
                border-radius: 10px;
                background-color: lightseagreen;
                margin: 10px;
                float: left;
            }
            .disp img{
                border: 1px solid black;
                width:100px;
                height:100px;
                border-radius: 50%;
                margin-top: 10px;
                background-color: white;
            }
            .disp .tit{
                background-color: white  ;
                width: 100%;
                margin: 0px;
                color: seagreen;
            }
            .disp p{
                
                
                display: inline-block;
                margin-top: 5px;
                margin-bottom: 5px;
                font-weight: 1000;
            }
            .disp .na{
               height: auto;
               width: 100%; 
            }
            .disp input[type=submit]{
                margin: 10px 0px 0px 0px;
                width:80px;
                height:30px;
                background-color: lawngreen;
                color: white;
                font-weight: 1000;
            }
            .disp input[type=submit]:hover{
                background-color: red;
            }
        </style>
        
        
    </head>
    <body>
        <div class="snav">
            <div class="prof">
                <img src="mal.webp">
                <p>STATUS: PATIENT</p>
            </div>
            <div class="col">
                <ul>
                    <li><a href="patient.php?key=3">Activity</a></li>
                    <li><a href="patientupdate.php?key=3">Update Account</a></li>
                    <li><a href="patient2.php">Slot Booking</a></li>
                    <li><a href="patfeedback.php?key=3">Feedback</a></li>
                    <li><a href="#">News</a></li>
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
                <div class="selec">
                    <form name="filter" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <div class="select">
                        <p>CITY:</p>
                        <select name="city">
                            <option value="">Select City</option>
                            <option value="Bangalore">Banglore</option>
                            <option value="Chennai">Chennai</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Hyderabad">Hyderabad</option>
                            <option value="Cochin">Cochin</option>
                        </select></div>
                        <div class="select">
                        <p>SPECIALITY:</p>
                        <select name="speciality">
                            <option value="">Select Speciality</option>
                            <option value="Cardiologist">cardiology</option>
                            <option value="ENT">ENT</option>
                            <option value="Neurology">Neurology</option>
                            <option value="General Medicine">General Medicine</option>
                            <option value="Dental">Dental</option>
                        </select></div>
                        <div class="select">
                        <p>DATE:</p>
                        <input type="date" name="dat">
                        </div>
                        <div class="select">
                            <input type="submit" name="search" value="Search" onclick="search();">
                        </div>
                    </form>
                    
                    
                </div>
                <div class="cont" id="cont">
                    
                    
                    <?php
                    if(isset($_POST['search'])){
                        $a1=$_POST['city'];
                        $a2=$_POST['speciality'];
                        $a3=$_POST['dat'];

                        $servername = "localhost";
                        $username = "hms";
                        $password = "root";
                        $dbname="hms";

                        $conn = mysqli_connect($servername, $username, $password,$dbname);
                        if (!$conn) {
                            die("Connection failed: " . mysqli_connect_error());
                        }
                        $sql="SELECT Dno,Dname,Dhsp,Ddesc,Dimg FROM doctor WHERE Dcity='$a1' and Dspec='$a2'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $i=$row['Dno'];
                                $a=$row['Dname'];
                                $b=$row['Dhsp'];
                                $c=$row['Ddesc'];
                                $d=$row['Dimg'];
                                $res= "<div class='disp'><img src=$d><br><br><p class='tit'>DOCTOR NAME:</p><br><p class='nam'>$a</p><br><p class='tit'>HOSPITAL NAME:</p><br><p class='nam'>$b</p><br><p class='tit'>DESCRIPTION:<p><br><p class='na'>$c</p><form method='POST' action='sbook.php?key=$i&date=$a3'><input type='submit' value='GO'></form></div>";
                                echo "$res";
                            }
                        } else
                             {
                            echo "no records found!!!";
                        }
                        mysqli_close($conn);
                    }
                    
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </body>
</html>