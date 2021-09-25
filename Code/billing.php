<?php
    session_start();
    $id=$_SESSION['id'];
  
    $id2=$_REQUEST['id2'];
    $date=$_REQUEST['date'];
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
            .bill
            {
                text-align:center;
                background-color:white;
                font-size:15pt;
                font-weight:1000;
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
            color: black;
            border: 2px solid #4CAF50;
        }
        
        .btn1:hover {
            background-color: red;
            color: black;
        }
input[type=number]
{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background:lightgrey;
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
                    <<li><a href="doctor.php?key=3">Activity</a></li>
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
                <div class="bill">
                <form name="billing" method="POST" action="billingdb.php?id2=<?php echo "$id2"; ?>&date=<?php echo "$date"; ?>">
                    <h1>BILLING</h1>
                    Consulting Fee:<br><input type="number" name="cons"><br><br>
                    Scanning charges (if any):<br>
                    <input name="chk" type="checkbox" id="mri" value="2000">
                    <label for="mri">MRI Scan</label>&nbsp&nbsp
                    <input name="chk" type="checkbox" id="xray" value="1500">
                    <label for="xray">X-Ray Scan</label>&nbsp&nbsp
                    <input name="chk" type="checkbox" id="ct" value="3500">
                    <label for="ct">CT Scan</label>&nbsp&nbsp
                    <input name="chk" type="checkbox" id="us" value="2700">
                    <label for="us">Ultrasound Scan</label><br><br>
                    Medicinal Fee:<br><input type="number" name="med"><br><br>
                    Amenities charges:<br><input type="number" name="amen"><br><br>
                    Total:<br><input type="number" name="tot" onmouseover="total()"><br><br>
                    <button type="submit" class="btn btn1"  value="submit">BILL</button>
                </form>
                </div> 
            </div>
        </div>
<script>
    function total()
    {
        var a=document.forms["billing"]["cons"].value;
		var b = 0;
		for (var i=0;i<document.billing.chk.length;i++) {
		  if (document.billing.chk[i].checked) {
		  	b = b+ parseInt(document.billing.chk[i].value);
		  }
		}
        var c=document.forms["billing"]["med"].value;
        var d=document.forms["billing"]["amen"].value;
        var sum=Number(a)+Number(b)+Number(c)+Number(d);
        document.billing.tot.value=sum;
    }
</script>
    </body>
</html>