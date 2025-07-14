<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdraw Form</Form></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Withdraw Amount</h1>
    <div class="container">
    <form action="ATM_Withdrawl.php" id="form1" name="form1" method="post" autocomplete="off">
        <div class="form-group">
            <label for="withdraw">Amount to Withdraw : </label>
            <input type="text" name="withdraw" id="withdraw" class="form-control">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
        </div>
    </form>
    </div>
    <p>&nbsp;</p>
</body>
</html>