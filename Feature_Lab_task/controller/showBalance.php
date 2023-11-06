<?php
require_once('../model/userModel.php');
require_once('../controller/sessionCheck.php');
$status= checkBalance( $_SESSION['Phone']);
?>
<h1>Avalable Balance : <?php echo $status['Balance']?></h1>

<center>
<a href="../view/home.php"><h4>Go back</h4></a>
</center>