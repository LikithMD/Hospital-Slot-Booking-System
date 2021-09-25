<?php
    session_start();
    if($_REQUEST['key']==0){
        echo "<script>alert('UPDATE SUCCESSFULL..')</script>";
    } 
    if($_REQUEST['key']==1){
        echo "<script>alert('UPDATE UNSUCCESSFULL..')</script>";
    } 
    $id=$_SESSION['id'];
?>

<html>

<head>
    <style>
        body {
            margin: 0;
        }
        
        .snav {
            border: 1px solid black;
            height: 100%;
            width: 20%;
            height: 1000px;
            float: left;
        }
        
        .main {
            border: 1px solid black;
            width: 80%;
            height: 1000px;
            margin-left: 300px;
        }
        
        .prof {
            border: 1px solid black;
            width: 98%;
            height: 30%;
        }
        
        .nav {
            border: 1px solid black;
            width: 99%;
            margin-left: 10px;
            height: 65px;
            background-color: gray;
        }
        
        .col {
            height: 70%;
            background-color: grey;
        }
        
        .col ul {
            display: inline;
            list-style-type: none;
            margin-left: 0px;
        }
        
        .col ul li {
            display: block;
            padding: 10px;
            width: 91%;
            border-radius: 5px;
            text-align: center;
            font-size: 20px;
            background-color: gray;
        }
        
        .col ul li a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: black;
            border-radius: 5px;
            background-color: lawngreen;
            color: white;
            font-weight: 1000;
        }
        
        .col ul li a:hover {
            background-color: red;
            padding: 25px;
            font-size: 25px;
        }
        
        .logo img {
            height: 50px;
            width: auto;
            margin: 5px 2px 2px 5px;
            float: left;
        }
        
        .logo p {
            display: block;
            margin-left: 10px;
            font-size: 20px;
            font-weight: 1000;
            color: white;
            float: left;
        }
        
        .logo input[type=submit] {
            margin-left: 680px;
            margin-top: 15px;
            padding: 5px;
            font-weight: 500;
            font-size: 20px;
            background-color: lawngreen;
            color: white;
            border: 1px solid darkgreen;
        }
        
        .logo input[type=submit]:hover {
            background-color: red;
        }
        
        .prof {
            background-color: darkgrey;
            border: 6px ridge grey;
        }
        
        .prof:hover {
            background-color: gray;
        }
        
        .prof img {
            margin-top: 10px;
            margin-left: 85px;
            width: auto;
            height: 130px;
            border-radius: 50%;
        }
        
        .prof p {
            color: white;
            font-weight: 1000;
            text-align: center;
            font-size: 25px;
        }
        
        .btn {
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        
        .btn1 {
            background-color: lawngreen;
            color: white;
            border: 2px solid black;
        }
        
        .btn1:hover {
            background-color: red;
            color: white;
        }
        
        .container {
            padding: 25px;
            background-color: white;
            width: 300px;
            position: absolute;
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .head {
            font-size: 20px;
            font-weight: 1000;
        }

        .container input[type=date]{
            width: 300px;
        }
    </style>
    <script>
        function check() {
            var x = document.getElementById("container");
            x.innerHTML = "helo";
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
                <h1> Update account</h1>

                <form  method="POST" action="patientupdatedb.php?id=<?php echo "$id";?>">
                    <label for="name" class="head">Name:</label>
                    <input type="text" id="name" name="name" class="head"><br><br>
                    <label for="dob" class="head">DOB:</label>
                    <input type="date" class="head" name="dob" id="dob"><br><br>
                    <label for="email" class="head">Email:</label>
                    <input type="email" class="head" name="email" id="email"><br><br>
                    <label for="mob" class="head">Mobile No:</label>
                    <input type="number" id="mob" name="mob" class="head"><br><br>
                    <a><input type="submit" class="btn btn1" value="Update"></a>
                </form>
                <hr>
                <h1>Update pasword</h1>
                <form method="POST" action="patientupdatedb2.php?id=<?php echo "$id";?>">
                    <label for="old" class="head">Old password:</label>
                    <input type="password" class="head" name="old" id="old"><br><br>
                    <label for="new" class="head">New password</label>
                    <input type="password" class="head" name="new" id="new"><br><br>
                    <input type="submit" value="reset"  class="btn btn1">
                </form>


            </div>

        </div>
</body>

</html>