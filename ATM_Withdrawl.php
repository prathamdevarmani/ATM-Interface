<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Withdraw</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-1">
    <?php
    include("config/database.php");
    if(isset($_POST['submit'])){
        $id=$_SESSION['id'];
        $withdraw=$_POST['withdraw'];
        $floatAmount = $_POST['withdraw'];
        $duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE id='$id'");
        $result = mysqli_fetch_assoc($duplicate);
        $balance=$result['balance'];
       
        if($withdraw==true){
            
          //  $duplicate= mysqli_query($conn,"SELECT * FROM transcation WHERE id='$id'");
          //  $result = mysqli_fetch_assoc($duplicate);
//$withdraw=$result['withdraw'];
            if(isset($_POST['withdraw'])){
                $withdraw=$_POST['withdraw'];
                //echo $withdraw;
                $sql="INSERT INTO transcation VALUES ('','','$withdraw')";
                mysqli_query($conn,$sql);
               //echo $sql;
            }
            if (!is_numeric($withdraw) || $withdraw <= 0) {
                echo "Please enter a valid withdrawal amount";
                header("refresh:0; url=ATM_WithdrawForm.php");
                exit;
            }

            $duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE id='$id'");
            $result = mysqli_fetch_assoc($duplicate);
            
    if ($floatAmount < $balance) {
        $balance -= (int)$floatAmount;
        $_SESSION['floatBalance'] = $balance;
        echo $floatAmount . " Rs has been withdrawn from your account.";
        $duplicate= mysqli_query($conn,"UPDATE `tb_user` SET `balance`='$balance' WHERE id='$id'");

    } else {
        echo "Insufficient Amount in your Account<br>";
    }
    
    header("refresh:1; url=ATM_Main.php"); 
        }
        else{
            echo "<script>alert('Please enter a Amount');</script>";
            echo "Please enter a Amount";
            header("refresh:0; url=ATM_WithdrawForm.php");
        }
    }
    
    ?>
    </div>
</body>
</html>
