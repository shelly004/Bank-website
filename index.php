<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank | HOME</title>

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/footer.css">

</head>
<body>
     <?php
     include './footer.php';
     include './navbar.php';
     ?>
    <section id="home">
       <h1 class="h-primary">Welcome to Sparks Bank</h1>
       <h3>How May I help You?</h3>
    </section>

    <div class="col-sm-12 col-md img text-center">
       <div class="bimg">
            <img src="img/bank2.png" style="position:absolute;top:80px;left:1000px;height:180px;"class=img-fluid;>
        </div>
    </div>
        <br><br>
    <section id="services-container">
        <div id="services">
            <div class="box">
                <img src="img/person.jpg" alt="">
                <br>
                <a href="createuser.php"><button class="buttonic">Create Account </button></a>
            </div>
            <div class="box">
                <img src="img/transmoney.jpg" alt="">
                <br>
                <a href="transfermoney.php"><button class="buttonic">Transfer Money </button></a>
                </div>
            <div class="box">
                <img src="img/history.jpg" alt="">
                <br>
                <a href="transactions.php"><button class="buttonic">History</button></a>
             </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

  </body>
</html>