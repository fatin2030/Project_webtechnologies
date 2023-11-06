<?php
require_once('../model/userModel.php');

session_start();
    $userName = $_REQUEST['userName'];
    $password = $_REQUEST['password'];
    $_SESSION['userName'] = $userName;
    $_SESSION['password'] = $password;

    if($userName == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($userName, $password);
       
        
            if ($status) {
                $_SESSION['flag'] = 'true';
                
                if ($userName == 'admin') {
                    header('location: ../view/adminHome.php');
                    $_SESSION['Phone']=$status['Phone'];
                }
                else if($userName !='admin') {
                    header('location: ../view/home.php');
                    $_SESSION['Phone']=$status['Phone'];
                }
               
        }
        else{
            echo "invalid user!";
           
        }
       
    }
?>