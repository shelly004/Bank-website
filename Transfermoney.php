<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System| Transfer</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/transfer.css">
</head>
<body>
    <?php
    include './navbar.php';
    include './footer.php';
    ?>
    <h1>Tranfer Money</h1>
    <?php
    include './connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
    <table class="center">
      <thead>
            <tr>
                <th scope="col" >ID</th>
                <th scope="col" >Name</th>
                <th scope="col" >Email</th>
                <th scope="col" >Balance (Rs.)</th>
                <th scope="col" >Transaction</th>
            </tr>
      </thead>
      <tbody>
      <?php
              if (isset($result)) {
                  while ($rows = mysqli_fetch_assoc($result)) {
       ?>       
            <tr>
                <td><?php echo (isset($rows['id']) ? $rows['id'] : ''); ?></td>
                <td ><?php echo (isset($rows['Name']) ? $rows['Name'] : ''); ?></td>
                <td ><?php echo (isset($rows['email_id']) ? $rows['email_id'] : ''); ?></td>
                <td style="text-align:right;font-weight:bold;"><?php echo (isset($rows['balance']) ? $rows['balance'] : ''); ?></td>
                <td ><a href="./transaction_page.php?id= <?php echo $rows['id']; ?>"> <button type="button">Transfer</button></a></td>
             </tr>
             <?php
                      }
                    }
                ?>    
          </tbody>
      </table>

</body>
</html>