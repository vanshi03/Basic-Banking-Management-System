<?php
        include('dbconnect.php');
        $Name=$_GET['Name'];
        $CurrentBalance=$_GET['CurrentBalance'];
        if (isset($_POST['amount'])) {
            $amt = $_POST['amount'];
            $sql="INSERT INTO transaction_history(SrNo,Sender_Name,Reciever_Name,Amount) VALUES ('NULL','".$Name."','SELF','".$amt."')";
            if ($conn->query($sql) === TRUE) {
             
            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $amt=$amt+$CurrentBalance;
            $sql="UPDATE customer_details SET Current_Balance='$amt' where Name='$Name'";
            $rs = mysqli_query($conn, $sql);
            echo "<script>
                alert('Transaction Successfull');
            </script>";
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>View Customer</title>
    <style>
    body{
        background-color:#BCC6CC;
    }
    table{
        margin:100px 300px;
        border:1px solid black;
        box-shadow: 0px 0px 20px #34282c; 
    }
    th{
      font-weight:bolder;
      font-size:20px;
      padding:10px 15px;
      text-align:center;

    }
    tr:hover{
        border:1px solid black;
        color:black;
        font-weight:bold;
    }
    td{
        padding:10px 10px;
        text-align:center;
    }
    a{
      text-decoration:none;
      color:black;
    }
    a:hover{
        color:black;
        font-weight:bold;
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
       include('dbconnect.php');
       $sql = "SELECT * FROM customer_details ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
                //output data of each row
                echo "<table>";
                echo "<tr>";
                    echo "<th>Sr No.</th>";
                    echo "<th>Name</th>";
                    echo "<th>Email</th>";
                    echo "<th>Current Balance</th>";
                echo "</tr>";
            while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['Sr No.'] . "</td>";
                    echo "<td><a href='customerdetails.php?srno=".$row['Sr No.']."&name=".$row['Name']."&email=".$row['Email']."&contactnumber=".$row['Contact Number']."&accountnumber=".$row['Account Number']."&currentbalance=".$row['Current_Balance']."'>" .$row['Name'] . "</a></td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "<td>" . $row['Current_Balance'] . "</td>";
                    echo "</tr>";
            }
            echo "</table>";
            } 
            else {
            echo "0 results";
            }
        
            $conn->close();
?>