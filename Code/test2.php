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
                        $sql="SELECT Dname,Dhsp,Ddesc FROM doctor WHERE Dcity='$a1' and Dspec='$a2'";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "city: " . $row["Dcity"]. "spec " . $row["Dspec"]. " " ."<br>";
                            }
                        } else
                             {
                            echo "NO RECORDS";
                        }
                        mysqli_close($conn);
                    }
                ?>