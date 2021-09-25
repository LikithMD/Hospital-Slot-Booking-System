<?php
                    if(isset($_POST['add'])){
                        $a=$_POST['dno'];
                        $b=$_POST['name'];
                        $c=$_POST['hsp'];
                        $d=$_POST['spec'];
                        $e=$_POST['img'];
                        $f=$_POST['city'];
                        $g=$_POST['desc'];
                        $h=$_POST['slot'];
                        $i=$_POST['dur'];
                        $j=$_POST['pass'];
                        $servername = "localhost";
                        $username = "hms";
                        $password = "root";
                        $dbname="hms";

    
                        $conn = mysqli_connect($servername, $username, $password,$dbname);
                        if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                            } 
                        $sql = "INSERT INTO doctor(Dno,Dname,Dhsp,Dspec,Dimg, Dcity,Ddesc,Dslots,Dduration) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
                        $result = mysqli_query($conn, $sql);
                        $sql2="INSERT INTO regtab(Ano,pass,val) VALUES('$a','$j',1)";
                        $result2 = mysqli_query($conn, $sql2);
                        if($result && $result2){
                            $k=0;
                            header("location:admin.php?key=$k");
                        }
                        else{
                            $k=1;
                            header("location:admin.php?key=$k");
                        }
                    }
                ?>