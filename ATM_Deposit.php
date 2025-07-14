<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM Deposit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-1">
    <?php
    include("config/database.php");
    // session_start(); 
    if(isset($_POST['submit'])){
        $deposit=$_POST['deposit'];
        $id=$_SESSION['id'];
        if($deposit==true){
            
            if(isset($_POST['deposit'])){
                $deposit=$_POST['deposit'];
               // echo $deposit;
                $sql="INSERT INTO transcation VALUES ('','$deposit','')";
                mysqli_query($conn,$sql);
               //echo $sql;
            }
                
                if (!is_numeric($deposit) || $deposit <= 0) {
                echo "Please enter a valid deposit amount";
                header("refresh:0; url=ATM_DepositForm.php");
                exit;
            }
            
            
            $duplicate= mysqli_query($conn,"SELECT * FROM tb_user WHERE id='$id'");
            $result = mysqli_fetch_assoc($duplicate);
            $balance=$result['balance'];
            $floatDeposit = $_POST['deposit'];
           
            $floatBalance = $floatDeposit+$balance;
            $duplicate= mysqli_query($conn,"UPDATE `tb_user` SET `balance`='$floatBalance' WHERE id='$id'");
        
            echo "You have deposited Rs " . $floatDeposit;
            header("refresh:1; url=ATM_Main.php");

        }
        else{
            echo "<script>alert('Please enter a Amount');</script>";
            echo "Please enter a Amount";
           header("refresh:1; url=ATM_DepositForm.php");
        }
    }
   
    ?>
    </div>
</body>
</html>
