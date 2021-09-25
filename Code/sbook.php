<?php
                    session_start();
                    $servername = "localhost";
                    $username = "hms";
                    $password = "root";
                    $dbname="hms";
                    $id=$_REQUEST['key'];
                    $id2=$_SESSION['id'];
                    $dat=$_REQUEST['date'];
                    $conn = mysqli_connect($servername, $username, $password,$dbname);
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }   
                    $sql="SELECT Dhsp,Dname,Dspec,Dimg,Dcity,Ddesc,Dslots,Dduration FROM doctor WHERE Dno='$id'";
                    $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                $e=$row['Dspec'];
                                $a=$row['Dname'];
                                $b=$row['Dhsp'];
                                $c=$row['Ddesc'];
                                $d=$row['Dimg'];
                                $f=$row['Dcity'];
                                $g=$row['Dslots'];
                                $h=$row['Dduration'];
                            }
                        }
                        else{
                            echo "No Data Found";
                        }
                    
                    
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
                height: auto;
                margin-left: 300px;
            }
            .prof{
                border: 1px solid black;
                width: 98%;
                height: 30%;
            }
            .nav{
                border: 1px solid black;
                width: 100%;
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
            table{
                margin: auto;
                border: 2px solid black;
                
                height: 200px;
            }
            table,td,th{
                border:2px solid black;
                border-collapse: collapse;
                width: 600px;
                text-align: left;
                padding: 10px;
                font-weight: 1000;
            }
            .container h1{
                background-color: bisque;
                font-weight: 1000;
            }
            .container img{
                text-align: center;
                margin-left:500px;
                width: 200px;
                height: auto;
            }
            .ftab table,td{
                border: 2px solid black;
                padding: 5px;
                width: 700px;
                height: auto;
            }
            .ftab select{
                width:200px;
                padding: 2px;
                font-size: 20px;
                margin-left: 260px;
                margin-right: 10px;
            }
            .ftab input[type=submit]{
                padding:5px;
                font-size: 20px;
                margin-left: 260px;
                width: 100px;
                background-color: lawngreen;
                color: white;
                font-weight: 1000;
            }
            .ftab h4{
                margin-left: 260px;
            }
            .ftab input[type=submit]:hover{
                background-color: red;
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
                    <li><a href="patient.php?key=3&id=<?php echo "$id"?>">Activity</a></li>
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
                    <form>
                        <input type="submit" value="Log out">
                    </form>
            </div>
            <div class="container" id="container">
                <script>
                    var h=document.getElementById('container');
                    var head=document.createElement('h1');
                    head.style.textAlign="center";
                    head.innerHTML="<?php echo "$b"; ?>";
                    h.appendChild(head);

                    var i=document.createElement('img');
                    i.setAttribute('src','<?php echo "$d";?>');
                    h.appendChild(i);

                    var head2=document.createElement('h2');
                    head2.innerHTML="DESCRIPTION:";
                    h.appendChild(head2);

                    var p1=document.createElement('p');
                    p1.innerHTML="<?php echo "$c"."<br><br>"; ?>";
                    h.appendChild(p1);

                    var tab=document.createElement('table');
                    var r1=document.createElement('tr');
                    var d11=document.createElement('td');
                    d11.innerHTML="DOCTOR NAME";
                    var d12=document.createElement('td');
                    d12.innerHTML="<?php echo "$a"; ?>";
                    r1.appendChild(d11);
                    r1.appendChild(d12);
                    tab.appendChild(r1);
                    h.appendChild(tab);

                    
                    var r1=document.createElement('tr');
                    var d11=document.createElement('td');
                    d11.innerHTML="SPECIALITY";
                    var d12=document.createElement('td');
                    d12.innerHTML="<?php echo "$e"; ?>";
                    r1.appendChild(d11);
                    r1.appendChild(d12);
                    tab.appendChild(r1);
                    h.appendChild(tab);

                    
                    var r1=document.createElement('tr');
                    var d11=document.createElement('td');
                    d11.innerHTML="CITY";
                    var d12=document.createElement('td');
                    d12.innerHTML="<?php echo "$f"; ?>";
                    r1.appendChild(d11);
                    r1.appendChild(d12);
                    tab.appendChild(r1);
                    h.appendChild(tab);

                    
                    var r1=document.createElement('tr');
                    var d11=document.createElement('td');
                    d11.innerHTML="SLOTS";
                    var d12=document.createElement('td');
                    d12.innerHTML="<?php echo "$g"; ?>";
                    r1.appendChild(d11);
                    r1.appendChild(d12);
                    tab.appendChild(r1);
                    h.appendChild(tab);

                    
                    var r1=document.createElement('tr');
                    var d11=document.createElement('td');
                    d11.innerHTML="SESSION DURATION";
                    var d12=document.createElement('td');
                    d12.innerHTML="<?php echo "$h"; ?>"+" minutes";
                    r1.appendChild(d11);
                    r1.appendChild(d12);
                    tab.appendChild(r1);
                    h.appendChild(tab);


                </script>
                <div class="ftab"><?php
                    $a=array();
                    $sql="SELECT s1,s2,s3,s4,s5,s6,s7,s8 FROM docslots WHERE Dno='$id'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $a[0]=$row['s1'];
                            $a[1]=$row['s2'];
                            $a[2]=$row['s3'];
                            $a[3]=$row['s4'];
                            $a[4]=$row['s5'];
                            $a[5]=$row['s6'];
                            $a[6]=$row['s7'];
                            $a[7]=$row['s8'];
                        }
                    }
                    $os=array();
                    $i=0;$count=0;
                    $sql="SELECT Dtime FROM slotbook WHERE Dno='$id' and pno='$id2' and Ddate='$dat'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {
                            $os[$i]=$row['Dtime'];
                            $i=$i+1;
                            $count=$count+1;
                        }
                    }
                    $tim="00:00:00.000000";
                    $col=array("green","green","green","green","green","green","green","green");
                    for($i=0;$i<8;$i++){
                        if($a[$i]==$tim){
                            $col[$i]="gray";
                        }
                    }
                    for($i=0;$i<$count;$i++){
                        for($j=0;$j<8;$j++){
                            if($os[$i]==$a[$j]){
                                $col[$j]="red";
                            }
                        }
                    }
                    echo "<br><br>";
                    echo "<center><h2>SLOT AVALABILITY:<br><br><h2></center>";
                    echo "<table>";
                    echo "<tr>";
                    for($i=0;$i<8;$i++){
                        echo "<td style='background-color:$col[$i];'>".substr($a[$i],0,5)."</td>";
                    }
                    echo "</tr>";
                    echo "</table><br><br>";
                    echo "<h4>Select Time:</h4>";
                    $nu=1;
                    echo "<form method='post' action='sbookdb.php?id=$id&dat=$dat&key=$nu'>";
                    echo "<select name='sel'>";
                    for($i=0;$i<8;$i++){
                        if($col[$i]=="green"){
                            echo "<option value='$a[$i]'>".substr($a[$i],0,5)."</option>";
                        }
                    }
                    echo "</select><br><br>";
                    echo "<input type='submit' value='Book'>";
                    echo "</form>";
                    ?>
                    
                </div>
                

            </div>
        </div>
    </body>
</html>