<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
    body{
        background-color:#BCC6CC;
    }
    h1{
        text-align:center;
    }
    .details{
        text-align:center;
        font-size:20px;
        box-sizing:border-box;
        border:3px solid black;
        display:block;
        height:50%;
        width:80%;
        margin:0px auto;
        padding:100px 100px;
    }
    button{
        margin-left:10px;
    }
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.html">TSF Bank</a>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewcustomer.php">View Customers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.html">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
</body>
</html>

<?php
  $name=$_GET['name'];
  $email=$_GET['email'];
  $contactnumber=$_GET['contactnumber'];
  $accountnumber=$_GET['accountnumber'];
  $currentbalance=$_GET['currentbalance'];
  echo "<h1>".$name."'s Details</h1><br>";
  echo "<div class='details'><b>NAME:</b> ".$name .  "<br><b>EMAIL:</b> " .$email ."<br><b>CONTACT NUMBER: </b>".$contactnumber."<br><b>ACCOUNT NUMBER:</b> ".$accountnumber."<br><b>CURRENT BALANCE:</b> ".$currentbalance."<br><br>";
  echo "<a href='adddetails.php?Name=$name&CurrentBalance=$currentbalance'><button>"."Add amount"."</button></a>";
  echo "<a href='withdrawdetails.php?Name=$name&CurrentBalance=$currentbalance'><button>"."Withdraw amount"."</button></a>";
  echo "<a href='transferdetails.php?Name=$name'><button>"."Transfer Amount"."</button></a>";
?>
