<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice Management</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
<body>

	<div class="container">
		<div></div>
	<h1>Add Client</h1>
		<div class="row"> 
			<div class="col-md-6 col-md-offset-3" style="margin: top 50px;">
			<form action="/add" method="POST">
			@csrf
			<div class="form-group">
			
			<label for="clname">First Name</label>
			
			<input type="text" name="clname" id="clname" class="form-control"  placeholder="Enter Client  Name" >
			<span class="error">* <?php echo $clnameErr;?></span>
			</div>
            <div class="form-group">
			<label for="">Gender</label>
			<input type="text" name="mother_name" id="gender" class="form-control"  placeholder="Enter Mother Name" >
		
			</div>
			<div class="form-group">
			<label for="email">Email Id</label>
			<input type="text" name="last_name" id="email" class="form-control"  placeholder="Enter Your Email Id" >
			</div>
			<div class="form-group">
			<label for="contactno">Contact Number</label>
			<input type="text" name="father_name" id="contact" class="form-control"  placeholder="Enter Contact Number">
			</div>
			<div class="form-group">
			<label for="">Permanent Address</label>
			<input type="text" name="address" id="address" class="form-control"  placeholder="Enter Permanent Address" >
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


