
<?php
    session_start();
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
                border: 1px solid black;
                height: 200px;
                margin-left: 20px;
            }
        </style>
        
        
    </head>
    <body>
        <div class="snav">
            <div class="prof">
                <img src="mal.webp">
                <p>STATUS: PATIENT</p>
                <P>SRIKAR M</P>
            </div>
            <div class="col">
                <ul>
                    <li><a href="#">Activity</a></li>
                    <li><a href="#">Update Account</a></li>
                    <li><a href="#">Slot Booking</a></li>
                    <li><a href="#">Feedback</a></li>
                    <li><a href="#">News</a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="nav">
                <div class="logo"><img src="hspi.webp">
                    <p>HOSPITAL MANAGEMENT SYSTEM</p>
                    <form>
                        <input type="submit" value="Log out">
                    </form>
            </div>
            <div class="container" id="container">
                <div class="selec">
                    <form name="filter" method="POST" onsubmit="men();" >
                        <div class="select">
                        <p>CITY:</p>
                        <select name="city">
                            <option value="">Select City</option>
                            <option value="banglore">Banglore</option>
                            <option value="chennai">Chennai</option>
                            <option value="mumbai">Mumbai</option>
                        </select></div>
                        <div class="select">
                        <p>SPECIALITY:</p>
                        <select name="speciality">
                            <option value="">Select Speciality</option>
                            <option value="cardiology">cardiology</option>
                            <option value="neurology">neurology</option>
                            <option value="allergy">allergy</option>
                        </select></div>
                        <div class="select">
                        <p>DATE:</p>
                        <input type="date" name="dat">
                        </div>
                        <div class="select">
                            <input type="submit" name="search" value="Search">
                        </div>
                    </form>
                    <script>
                        function man(){
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("txtHint").innerHTML = this.responseText;
                        }
                    };
                        xmlhttp.open("POST", "test2.php" + str, true);
                        xmlhttp.send();}
                    </script>

                    
                </div>
                <div class="cont" id="cont">
                    <p id="set"></p>
                    
                </div>
            </div>
        </div>
    </body>
</html>