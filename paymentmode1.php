<?php
    include("conection.php");
    error_reporting(0);
    ?>
	<!doctype html>
	<html>
	<head> <title>www.paymentmode.in </title></head>
	<body>
	
<h2> Payment process  </h2>
<form method="POST" >  


  <link rel="stylesheet" href="style1.css">

  <div class="Payment ">
  <label>
      <span>Card Holder Name</span>
      <input type="text" size="20" name="name" data-stripe="name"required>
    </label>
  

    <label>
      <span>Card Number</span>
      <input type="text" size="20" name="number" data-stripe="number"required>
    </label>
  </div>
<br><br>
  <div class="form-row">
    <label>
      <span>Expiration (MM/YY)</span>
      <input type="text" size="2" name="exp_month" data-stripe="exp_month"required>
    </label>
	
    <span> / </span>
    <input type="text" size="2" name="exp_year" data-stripe="exp_year"required>
  </div>
<br><br>
  <div class="form-row">
    <label>
      <span>CVV</span>
      <input type="text" size="4" name="cvv" data-stripe="cvv"required>
    </label>
  </div>
<br><br>
           <input type="submit" value="Make a Payment">  
		   
		   
</form>
</body>
</html>

<?php

    $na=$_POST['name'];
	$nu=$_POST['number'];
	$mn=$_POST['exp_month'];
    $y=$_POST['exp_year'];
    $cv=$_POST['cvv'];
	

    $query="INSERT INTO payment VALUES ('$na','$nu','$mn','$y','$cv')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"Successfully paid";
    }
    else
    {
        echo "faild to data in databases";
    }

    ?>


