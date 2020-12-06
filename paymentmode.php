<?php
    include("conection.php");
    error_reporting(0);
    ?>
	
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
      <span>CVC</span>
      <input type="text" size="4" name="cvv" data-stripe="cvv"required>
    </label>
  </div>
<br><br>
           <input type="submit" value="Make a Payment" name="submit">  
		   
		   
</form>

<?php
if(isset($_POST['submit']) AND !empty($_POST['submit'])){
    $na=$_POST['name'];
	$nu=$_POST['number'];
	$mn=$_POST['exp_month'];
    $y=$_POST['exp_year'];
    $cv=$_POST['cvv'];
	

    $query="INSERT INTO `payment`(`name`, `number`, `exp_month`, `exp_year`, `cvv`) VALUES ('$na','$nu','$mn','$y','$cv')";
    
    $data=mysqli_query($conn,$query);

    if($data)
    {
      // This is in the PHP file and sends a Javascript alert to the client
 header('location:thankyou.html');
    }
    else
    {
        echo "faild to data in databases";
    }
  }

    ?>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>