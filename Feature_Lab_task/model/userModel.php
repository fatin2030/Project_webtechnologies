<?php
require_once('db.php');
function login($userName,$password)
{
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}


function deposite($balance,$paymentMethod,$phone){
    $con= getConnection();
    $sql ="UPDATE transection_ SET Balance = '$balance', PaymentMethod = '$paymentMethod' WHERE Phone ='$phone'";    
    $result = mysqli_query($con, $sql);
    return $result;
}

function checkBalance($phone){
    $con= getConnection();
    $sql ="SELECT * FROM transection_ WHERE Phone='$phone'";    
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;

}

function showAllUsersBalance() {
    $con = getConnection();
    $sql = "select * from transection_ where userName!='admin'";
    $result = mysqli_query($con, $sql);
    return $result;
}

?>