<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System| Create Account</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/createuser.css">
    <?php
    include './navbar.php';
     include './footer.php';
     
    ?>
</head>
<body>
    <?php
    include './connection.php';
    
    if(isset($_POST['save']))
{
    $Name=$_POST['Name'];
    $email_id=$_POST['email_id'];
    $Balance=$_POST['balance'];

    $sql_query = "INSERT INTO users (Name, email_id, balance) VALUES ('$Name', '$email_id','$Balance')";
    
    if(mysqli_query($conn,$sql_query))
    {
        echo "<script> alert('Hurray! User created');
        window.location='Transfermoney.php';
        </script>";
    }
    else
    {
        echo"Error:" .$sql ."". mysqli_error($conn);
    }
    mysqli_close($conn);
}
    ?>
    <form action="createuser.php" method="post">
    
    <h1> Create an Account</h1>

    <img src="img/user1.png" alt="user" style="position:absolute; display:flex;text-align:center;top:150px ;left:60px;width:200px;height:160px;">
    <div class="cr">
    <p>
        <div class="res">
            <label for="Name">Name</label>
            <input type="text" name="Name" required>
           
        </div>
    
        <div class="res">
            <label for="email">Email Id</label>
            <input type="email" name="email_id" id="email" required>
        </div>     
    
        <div  class="res">
            <label for="balance">Balance</label> 
            <input type="number" name="balance"required>
        </div>

        <div class="res">
            <label for="Register"></label>
            <input type="Submit" name="save" value="Register">
        </div>
    </p>
 </div>
</form>

<?php

?>
</body>
</html>