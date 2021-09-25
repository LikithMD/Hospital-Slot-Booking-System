<?php 
   
   if(isset($_POST['Debit'])){
       $cardnumber=$_POST['cardnumber'];
       $expiry=$_POST['expiry'];
       $username=$_POST['username'];
       $cvv=$_POST['cvv'];
       header("location:docslot.php?key=0");

}

?>

<html>
<style>
    input[type=submit],
    button {
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
        background-color: white;
        border: 5px solid green;
        border-radius: 10px;
        margin: 0px 500px 20px 500px;
        width: 500px;
        height: auto;
    }
    
    input[type=text] {
        width: 480px;
        font-size: 20px;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: lightgrey;
        margin-top: 10px;
    }
    
    .btn,
    input[type=submit]:hover {
        background-color: red;
    }
    
    .btn 1,
    input[type=submit] {
        width: 100px;
        padding: 10px 18px;
        margin: 10px 5px;
        font-size: 20px;
    }
    
    h1 {
        text-align: center;
        font-weight: bold;
        font-size: 25px;
        color: red;
    }
    
    .er {
        color: white;
    }
    
    .head {
        font-size: 20px;
        font-weight: 1000;
    }
</style>

<body>

    <form method="POST" action="payment.php">

        <div class="container">
            <div>
                <label for="card" class="head">Card Numberr:</label>
                <input type="number" id="card" class="head" name="cardumber"><br><br>
                <label for="exp" class="head">Expiry Date:</label>
                <input type="date" id="exp" class="head" name="expiry"><br><br>
                <label for="Name" class="head">Name on Card:</label>
                <input type="text" class="head" id="Name" name="Username"><br><br>
                <label for="cvv" class="head">CVV:</label>
                <input type="password" class="head" id="cvv" name="cvv">
                <input type="submit" name="Debit">
            </div>

        </div>


</body>

</html>
