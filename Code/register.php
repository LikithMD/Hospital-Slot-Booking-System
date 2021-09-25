
<html>
    <title>Registration form</title>
    <head>
    <style>
    body {
        width:30%; 
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        background-color:white;
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
    input[type=text], input[type=password] 
    {
      width: 100%;
      font-size: 20px;
      padding: 15px;
      margin: 5px 0 30px 0;
      display: inline-block;
      border: none;
      background:lightgrey;
      margin: 10px;
    }
    input[type=date]
    {
    width:100%;
    font-size: 20px;
    height:50;
    background:lightgrey;
    border: none;
    margin-top: 10px;
    }
    .registerbtn {
      background-color: #4CAF50;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      width: 100%;
      font-size: 20px;
    }
    t
    {
    color:red;
    font-size: 20px;
    }
    h1{
        margin-left: 500px;
        display: inline-block;
        width: 300px;
        color: red;
        margin-bottom: 0px;
    }
    #des{
        font-weight: bold;
        margin-left: 500px;
        display: inline-block;
        width: 500px;
        margin-bottom: 0px ;
    }
    h2{
        margin-left: 500px;
        color: red;
        width: 500px;
    }
    .registerbtn:hover{
        background-color: red;
    }
    </style>
    </head>
    <body>
    <script src="script.js" type="text/javascript"></script>
    <h2> Online auction Website </h2>
    <h1 style="text-align:center">Register Here</h1>
    <p id="des">Please fill in this form to create an account.</p> 
    <div class="container">
    <form name="myform" onsubmit="return validform()" method="POST" action="regdb.php"> 
        <t>* required</t><br><br>
        <label for="name"><b>Name<t>*</t></b></label>
        <input type="text" placeholder="Enter Name" name="name">
        <label for="mobno"><b>Mobile No.<t>*</t></b></label>
        <input type="text" placeholder="Enter Mobile No" name="mobno"><br>
        <label for="dob"><b>DOB<t>*</t></b></label>&nbsp<br>
        <input type="date" name="dob" required><br><br>
        <label for="aadhar"><b>Aadhar No.<t>*</t></b></label>
        <input type="text" placeholder="Enter Aadhar No" name="aadhar" required>
        <label for="email"><b>Email<t>*</t></b></label>
        <input type="text" placeholder="Enter Email" name="email">
        <label for="psw"><b>Password<t>*</t></b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button type="submit" class="registerbtn">REGISTER</button>
    </form>
    <p>Already Have Account?&nbsp;&nbsp;&nbsp;<a href="login.php" >Sign in</a></p>
</div>
    </body>
    </html>
    