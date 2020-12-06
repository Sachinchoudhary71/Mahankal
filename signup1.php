<?php
    include("conection.php");
    //error_reporting(0);
    ?>


<!DOCTYPE html>  
 <html>  
 <head>  
  <title>Form in HTML</title>  
  
  <link rel="stylesheet" href="style.css">
</head>  
 <body>  
      <h1><marquee bgcolor="#077b8a">Registration Form For Mahakaleshwar Darhan Ujjain</marquee> </h1>
	  
    <form method="POST">  
	<fieldset>
	<legend>Basic Details of person </legend>
	<fieldset>
	 <legend>Personal information</legend> 
	 
        <label>First Name</label> 
        <input type="text" name="name" required>
         <label>Last Name</label>  
         <input type="Last" name="last"required>  <br> <br>
         <label>Father Name</label>  
         <input type="Father" name="father"required> 
         <label>Email id</label>  
         <input type="email" name="email"required> <br> <br>
		 <label for="Proof">ID Proof Details:</label>
         <select name="proof" id="proof" >
         <option value="Adhar" name="Adhar">Adhar Card</option>
         <option value="Voter" name="voter">Voter ID</option>
         <option value="Bank" name="bank">Bank Pass Book</option>
         <option value="Pan Card" name="pan card">Pan Card</option>
  </select>
		  <label>Id Proof No</label> 
        <input type="text" name="proof" required> <br>
		 
         <br><label>Enter your gender</label> 
         <input type="radio" id="gender" name="gender" value="male"required/>Male   
         <input type="radio" id="gender" name="gender" value="female"required/>Female    
         <input type="radio" id="gender" name="gender" value="others"required/>others <br/>   
          
         
     </fieldset>
	 <legend>Contact Details</legend> 
     <fieldset>	 
         <br>Address 1:  
			<input type="text" name="address"><br> <br> <br>
		 
		<label>City</label> 
        <input type="text" name="city" required>
		
		<label>State</label> 
        <input type="text" name="state" required>
		
        <label>Country</label> 
        <input type="text" name="country" required> <br> <br>

		<label>Zip/Pin Code</label> 
        <input type="text" name="code" required>
		
		<label>Mobile No</label> 
        <input type="text" name="mobile" required>
	 </fieldset>
	 
        
	 
	   <label>Darhan Date</label> 
        <input type="date" name="darshan" required>
		
		 <label for="ticket">No Of Tickets:</label>
         
		  <input type ="text" name="tsize" required onkeyup="return changeprice(this.value)">  
		 </select>
		 <br> <br>
		  
		  <label>(INR 250 Per Ticket) AMOUNT:- INR Total  Payment: Rs- <span id="pricetotal"></span>  &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</label> 
       
        
		 </Select>
		 <br> <br>
	 
	
	     </fieldset>
		  <br> <br>
		  <input type="submit" value="Submit" name="submit" >  
		   <input type="reset" value="Cancel">  
	 
  </form>  
 </body>  
</html>  



<?php
 if(isset($_POST['submit'])){
    $n=$_POST['name'];
	$l=$_POST['last'];
	$f=$_POST['father'];
    $email=$_POST['email'];
    $pr=$_POST['proof'];
	$gender=$_POST['gender'];
    $address=$_POST['address'];
	$c=$_POST['city'];
	$s=$_POST['state'];
	$cn=$_POST['country'];
	$cd=$_POST['code'];
    $mno=$_POST['mobile'];
    
    $dr=$_POST['darshan'];
    $ts=$_POST['tsize'];
    $db=$_POST['debit'];

    $query="INSERT INTO `entry`(`firstname`, `lastname`, `fathername`, `email`, `idproof`, `gender`, `address`, `city`, `state`, `country`, `zip`, `mobile`, `date`, `tsize`,`payment`) VALUES ('$n','$l','$f','$email','$pr','$gender','$address','$c','$s','$cn','$cd','$mno','$dr','$ts','$db')";
    
    $data=mysqli_query($conn,$query);

    if($data)
    {
       header('location:paymentmode.php');
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
    <script>
        function changeprice(price){
         // alert(price);
          var oneticket = 250;
          var ticket = price;
          var totalprice =oneticket * ticket;
          $('#pricetotal').html('<input type="text" name="debit" value='+totalprice+'>');
        //   $.ajax({
        //       url:'signup.php';
        //       method:'POST',
        //       data : [totalprice : totalprice ]
        //   });
        }
    </script>