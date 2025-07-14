<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM</title>
</head>
<body>
    <?php 
   session_start();
    $txtAction = $_POST['Action']; 
    
    if($txtAction == "Check Balance"){
        header("refresh:0; url=ATM_Check-balance.php");
    }
    if($txtAction == "Withdrawl Money"){
        header("refresh:0; url=ATM_WithdrawForm.php");
    }
    if($txtAction == "Deposit Money"){
        header("refresh:0; url=ATM_DepositForm.php");
    }
    if($txtAction == "Logout"){
        echo "Logging Off";
        header("refresh:0; url=login.php"); 
    }
    ?>
</body>
</html>