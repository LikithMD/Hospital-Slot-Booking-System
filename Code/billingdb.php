<?php
    session_start();
    $id=$_SESSION['id'];
 
    $id2=$_REQUEST['id2'];
    $date=$_REQUEST['date'];
?>
<html>
    <head>
        <style>
            .cont{
                margin: auto;
                border:5px double lawngreen;
                width: 250px;
                margin-top: 200px;
                background-color: gray;
                font-weight: 1000;
                color: white;
            }
            .cont p{
                margin-left: 10px;
            }
            .cont input[type=submit]{
                background-color: lawngreen;
                color:white;
                font-weight: 1000;
                margin-left: 80px;
                margin-top: 10px;
                margin-bottom: 0px;
                padding: 5px;
                width: 100px;
            }
            .cont input[type=submit]:hover{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <div class="cont">
        <?php
            $a=$_POST['cons'];
            $b=$_POST['med'];
            $c=$_POST['amen'];
            $d=$_POST['tot'];
            echo "<p>CONSULTATION FEES : $a</p>";
            echo "<p>MEDICAL FEES : $b</p>";
            echo "<p>AMENITIES CHARGE : $c</p><hr>";
            echo "<p>TOTAL : $d</p>";
            echo "<form action='billdb.php?a=$a&b=$b&c=$c&d=$d&id2=$id2&date=$date' method='post'><input type='submit' value='PROCESS'></form>"
        ?> 
        </div>
    </body>
</html>