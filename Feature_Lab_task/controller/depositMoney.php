<?php

  require_once('../model/userModel.php');
  require_once('../controller/sessionCheck.php');
  ?>
  <html lang="en">
  <head>
    <title>Deposite  Money</title>
  </head>
  <body>
    <center>
      <form action="" method="post">
      <H2>Add Money to your account</H2>
      <h3>Enter Payment method</h3>
     
      <h2> select Payment Method</h2><hr/>
					<input type="radio" name="paymentMethod" value="Bkash"/>BKASH <br>
					<input type="radio" name="paymentMethod" value="NAGAD"/>NAGAD <br>
					<input type="radio" name="paymentMethod" value="ROCKET"/>ROCKET <br>
					<hr/>
          <input type="number" name="acNo" value=""> <br>
          <br>
          <input type="submit" name="submit" value ="Confirm">
    </center>

  </body>

  
<?php
require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_REQUEST['paymentMethod']) && isset($_REQUEST['acNo'])) {
        $acNo = $_REQUEST['acNo'];
        $paymentMethod=$_REQUEST['paymentMethod'];
        $_SESSION['paymentMethod']= $paymentMethod;
        if ($acNo !== $_SESSION['Phone']) {
            echo "NOT A VALID ACCOUNT";
        }
        else{
          header('location:depositMoneyValidation.php');
        }
    } 
    else {
        echo "Please select a payment method.";
        }
}

    ?>
  </html>