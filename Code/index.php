<!DOCTYPE html>
<html>
    <head>
        
<meta name="viewport" content= "width=device-width, initial-scale=1.0">
        <style>
            body{
                margin: 0;
            }
            .nav{
                height: 70px;
                width: 100%;
                margin: 0;
                position: fixed;
                background-color:grey;
                border: 1px solid black;
                z-index: 1;
            }
            .opt{
                width: 50%;
                height: 60px;
                margin: 5px 5px 5px 950px;
                
            }
            .logo{
                width: 49%;
                height: 60px;
                float: left;
                margin: 5px 5px 5px 5px;
               
            }
            .opt ul{
                list-style-type: none;
                margin-top: 12px;
                margin-left:-20px;
            }
            .opt ul li{
                display: inline-block;
                padding: 5px;
                margin:2px 40px 2px 2px;
                font-size: 20px;
                font-weight: 1000;
                border-right: 2px solid black;
            }
            .opt ul li a{
                text-decoration: none;
                color: white;
                padding: 8px;
            }
            .log{
                background-color: yellowgreen;
                border: 3px solid green ;
            }
            .log:hover{
                background-color:greenyellow;
            }
            .opt ul li a:hover{
                color:black;
            }
            .logo p{  
                display: inline-block;
                
                margin:15px 10px 10px 10px;
                font-weight: 1000;
                padding: 5px;
                color: white;
                font-size: 20px;
            }
            .logo img{
                height: 50px;
                width: auto;
                margin: 5px 2px 2px 5px;
                float: left;
                
            }
            .wallp img{
                width: 100%;
                height: auto;
                
            }
            div.desc{
                position: absolute;
                top: 200px;
                left: 900px;
                color:white;
                font-weight: 1000;
                font-size: 50px;
                font-family:Georgia, 'Times New Roman', Times, serif;
                
                
            }
            .wallin{
                font-size: 30px;
            }
            .desc a{
                border:2px solid darkgreen;
                padding: 10px;
                font-size: 25px;
                text-decoration: none;
                color: white;
                background-color: greenyellow;
                border-radius: 20px;
                margin-top: 10px;
                margin-left: 200px;
            }
            .desc a:hover{
                background-color: green;
            }
            
            .fac h1,h2{
                text-align: center;
                font-family:Georgia, 'Times New Roman', Times, serif;
            }
            .fac h2{
                font-weight:1;
            }
            .fac .infac{
                display: inline-block;
                border: 1px solid grey;
                margin-left:150px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            }
            .fac .infac:hover{
                box-shadow: 0 10px 14px 0 rgba(0, 0, 0, 0.2), 0 12px 26px 0 rgba(0, 0, 0, 0.19);
            }
            .fac .infac img{
                width: 300px;
                height: 300px;
            }
            .fac .infac p{
                color:blue;
                font-weight: 1000;
                font-size: 30px;
                margin:auto;
                text-align: center;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div class="nav">
            <div class="logo"><img src="hspi.webp">
                <p>HOSPITAL MANAGEMENT SYSTEM</p>
            </div>
            <div class="opt">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li class="log"><a href="login.php">Sign in</a></li>
                </ul>
            </div>
        </div>
        <div class="wallp">
            <img src="doc2.jpg">
            <div class="desc">
            <p>We Care For You</p>
            <p class="wallin">A platform to get medical  treatement <br>according to your convenience.<br>To Enjoy all the features register now</p>
            <p><a href="register.php">Register Now</a></p>
        </div></div>
        <div class="fac">
            <h1>Medical Providers</h1>
            <h2>India is an international travel destination for quality treatement and we provide</h2>
            <div class="infac">
                <img src="h1.jpg">
                <p>Medical Treatement</p>
            </div>
            <div class="infac">
                <img src="h2.jpg">
                <p>Worldclass Doctors</p>
            </div>
            <div class="infac">
                <img src="h3.jpg">
                <p>Better Equipment</p>
            </div><br><br>
        </div>
    </body>
</html>