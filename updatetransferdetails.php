<?php 
    include('dbconnect.php');
    if (isset($_POST['amount'])) {
        $Amount =$_POST['amount'];
        $sendername=$_GET['Name'];
        $recvrname = $_POST['receivername'];
      
        $sql="INSERT INTO transaction_history(SrNo,Sender_Name,Reciever_Name,Amount) VALUES ('NULL','".$sendername."','".$recvrname."','".$Amount."')";
              if ($conn->query($sql) === TRUE) {
              
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
        $senderquery = "SELECT Current_Balance from customer_details where Name='$sendername'";
        $result = $conn->query($senderquery);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                 $SenderCurAmount=$row['Current_Balance'];
                 $SenderUpdatedAmount=$SenderCurAmount - $Amount;
                 $sql="UPDATE customer_details SET Current_Balance='$SenderUpdatedAmount' where Name='$sendername'";
                 $rs = mysqli_query($conn, $sql);
                }
        }
        else{
            echo "0 results";
        }
        // echo $recvrname;
        $recvrquery = "SELECT Current_Balance from customer_details where Name='".$recvrname."'";
        $result = $conn->query($recvrquery);
        if ($result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                   $ReceiverCurAmount=$row['Current_Balance'];
                   //echo $Amount;
                   //echo $ReceiverCurAmount;
                   $ReceiverUpdatedAmount=$ReceiverCurAmount + $Amount;
                   $sql="UPDATE customer_details SET Current_Balance='$ReceiverUpdatedAmount' where Name='".$recvrname."'";
                   $rs = mysqli_query($conn, $sql);
                }
         }
         else{
             echo "0 results";
         }
    }
    echo "<script>
            alert('Transaction Successfull');
            window.location = 'index.html';
    </script>"
?>