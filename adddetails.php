<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <style>
            body{
                background-color:#BCC6CC;
            }
            p{
                font-size:30px;
                text-align:center;
                font-weight:bold;
            }
            form{
                text-align:center;
                padding:10px 10px;
               
            }
            #amount{
                display:block;
                align:center;
                font-size:50px;
                height:70px;
                width:500px;
                margin:0 auto;
            }
            #Submit{
                align:center;
                /* padding:30px 10px; */
                background-color:blue;
                color:white;
                text-align:center;
                margin-top:20px;
                height:30px;
                width:150px;
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
        <?php
            $Name=$_GET['Name'];
            $CurrentBalance=$_GET['CurrentBalance'];
            echo " <p>Dear $Name Please enter the amount you want to add to your account</p>
                <form action='updateadddetails.php?Name=$Name&CurrentBalance=$CurrentBalance' method='post'>
                    <input type='number' id='amount' name='amount'>
                    <input type='submit' name='Submit' value='Submit' id='Submit'>
                </form>"
        ?>
    </body>
</html>