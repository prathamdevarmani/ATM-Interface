<?php
include("config/database.php");

$id=$_SESSION['id'];
$data= mysqli_query($conn,"SELECT * FROM tb_user WHERE id='$id'");
$results = mysqli_fetch_assoc($data);
$balance=$results['balance'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Balance</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-1">
   <?php echo " Your Balance is <br>" ;
    echo "Rs ".$balance."<br>";
    header("refresh:1; url=ATM_Main.php");

    ?>
    </div>
    
</body>
</html>