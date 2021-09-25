<?php
    if($_REQUEST['key']==0)
    echo "<script>alert('UPDATE SUCESSFUL...');</script>";

    if($_REQUEST['key']==1)
    echo "<script>alert('UPDATE UNSUCCESSFUL...');</script>";
    session_start();
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
            color: lawngreen;
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
            border: 2px solid #4CAF50;
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
            top: 65%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        
        .head {
            font-size: 25px;
            font-weight: 1000;
        }
        
        .head1 {
            font-size: 30px;
            font-weight: 1000;
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
                <form method="POST" action="docslotdb.php">
                    <h1>UPDATE SLOTS</h1>
                    <label class="head">Total number of slots</label>
                    <input type="number" name="s" class="head"><br><br>
                    <label class="head">1st slot:</label>
                    <input type="time" name="t1" class="head1"><br><br>
                    <label class="head">2nd slot:</label>
                    <input type="time" name="t2" class="head1"><br><br>
                    <label class="head">3rd slot:</label>
                    <input type="time" name="t3" class="head1"><br><br>
                    <label class="head">4th slot:</label>
                    <input type="time" name="t4" class="head1"><br><br>
                    <label class="head">5th slot:</label>
                    <input type="time" name="t5" class="head1"><br><br>
                    <label class="head">6th slot:</label>
                    <input type="time" name="t6" class="head1"><br><br>
                    <label class="head">7th slot:</label>
                    <input type="time" name="t7"class="head1"><br><br>
                    <label class="head">8th slot:</label>
                    <input type="time" class="head1"><br><br>
                    <input type="submit" name="t8" value="UPDATE" class="btn btn1">

                </form>

            </div>
        </div>
</body>

</html>