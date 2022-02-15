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
    form{
        margin-top:100px;
        margin-left:50px;
        margin-right:50px;
        display:flex;
        align-items:center;
        justify-content:center;
        flex-direction:column;
        border:1px solid black;
        box-shadow:0 0 10px #34282c;
    }
    p{
        font-size:30px;
        font-weight:bold;
    }
    select{
        padding:10px 10px
    }
    option{
        padding:10px 10px;
        color:purple;
        font-weight:bolder;
        font-size:15px;
    }
    input{
        margin-bottom:20px;
        padding:10px 10px;
        font-size:30px;
        color:purple;
        font-weight:bolder;
    }
    #Submit{
        padding:10px 10px;
        background-color:purple;
        color:white;
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
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
        <?php
            $Names=$_GET['Name'];
            echo "<form action='updatetransferdetails.php?Name=$Names' method='post'>";
            echo "<p>Enter the Receivers Name</p>";
            // echo "<input type ='text' id ='receivername' name='receivername'>";
            echo "<select id='receivername' name='receivername'>";
            include('dbconnect.php');
            $sql = "SELECT Name FROM customer_details WHERE Name <> '".$Names."'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<option>" . $row['Name'] . "</option>";
                }
            }
            else {
                echo "0 results";
                }
            echo"</select><br>";
            echo "<p>Enter the amount you want to transfer</p><br>";
            echo "<input type ='number' id ='amount' name='amount'>";
            echo "<input type='submit' id='Submit' name='Submit' value='Submit'>";
            echo "</form>";
            // $conn->close();
        ?>
</body>
</html>