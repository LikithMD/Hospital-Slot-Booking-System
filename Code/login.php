
<!DOCTYPE html> 
<html> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Login Page </title>
<style> 
Body {
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    background-size: cover;
    font-size: 20px;
}
input[type=submit],button { 
        background-color: #4CAF50; 
        width: 100%;
        color: white; 
        padding: 15px; 
        margin: 10px 0px; 
        border: none; 
        cursor: pointer;       
         } 
.container {
      padding: 30px;
      background-color:white;
      border: 5px solid green;
      border-radius: 10px;
      margin:0px 500px 20px 500px;
      width: 500px;
      height: auto;
    } 
 input[type=text], input[type=password] { 
      width: 480px;
      font-size: 20px;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background:lightgrey;
      margin-top: 10px; 
    }
 .btn,input[type=submit]:hover { 
        background-color: red; 
    } 
 .btn,input[type=submit] { 
        width: 100px; 
        padding: 10px 18px;
        margin: 10px 5px;
        font-size: 20px;
    } 
      
   
  

h1{
    text-align: center;
    font-weight: bold;
    font-size: 25px;
    color: red;
}
.er{
    background-color: lightcoral;
    color: white;
}
</style>
<script>
    function check12(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("er").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "logindb.php", true);
    xmlhttp.send();
    }
</script> 
</head>  
<body>  
    <h1> Hospital Management System</h1> 
    <h1>Login</h1>
    <form method="POST" action="logindb.php">
        <div class="container" > 
            <div class="er" id="er"></div>
            <label>Adhaar Number: </label> 
            <input type="text" placeholder="Enter Adhaar number" name="username" required>
            <label>Password : </label> 
            <input type="password" placeholder="Enter Password" name="password" required>
            <input type="submit" onsubmit="check12();" value="sign in"><br>
            Are you new here
            <a href="register.php">Register now</a>
        </div> 
    </form>   
</body>   
</html>

 

 
