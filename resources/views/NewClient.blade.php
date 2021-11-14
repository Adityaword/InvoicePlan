<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice Management</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
<body>
<?php
// define variables and set to empty values
$clnameErr = $emailErr = $genderErr = $contactErr= $addressErr="";
$clname = $email = $gender = $contact= $address="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["clname"])) {
    $clnameErr = "Name is required";
  } else {
    $clname = test_input($_POST["clname"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  if (empty($_POST["contact"])) {
    $contactErr = "Contact Number is required";
  } else {
    $contact = test_input($_POST["contact"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  if (empty($_POST["address"])) {
    $addressErr = "Email is required";
  } else {
    $address = test_input($_POST["address"]);
  }
}
?>
	<div class="container">
	<h1>Add Client</h1>
		<div class="row"> 
			<div class="col-md-6 col-md-offset-3" style="margin: top 50px;">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
			@csrf
			<div class="form-group">
			
			<label for="clname">First Name</label>
			
			<input type="text" name="clname" id="clname" class="form-control"  placeholder="Enter Client  Name" >
			<span class="error">* <?php echo $clnameErr;?></span>
			</div>
            <div class="form-group">
			<label for="">Gender</label>
			<input type="text" name="mother_name" id="gender" class="form-control"  placeholder="Enter Mother Name" >
			<span class="error">* <?php echo $genderErr;?></span>
			</div>
			<div class="form-group">
			<label for="email">Email Id</label>
			<input type="text" name="last_name" id="email" class="form-control"  placeholder="Enter Your Email Id" >
			<span class="error">* <?php echo $emailErr;?></span>
			</div>
			<div class="form-group">
			<label for="contactno">Contact Number</label>
			<input type="text" name="father_name" id="contact" class="form-control"  placeholder="Enter Contact Number">
			<span class="error">* <?php echo $contactErr;?></span>
			</div>
			<div class="form-group">
			<label for="">Permanent Address</label>
			<input type="text" name="address" id="address" class="form-control"  placeholder="Enter Permanent Address" >
			<span class="error">* <?php echo $addressErr;?></span>
			</div>
			<div class="form-group">
			<button type="submit" class="btn btn-primary btn-block"> Save Data </button>
			</div>
		</form>		
			</div>
		</div>
	</div>
</body>
</html>


