<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Invoice Management</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<script type=”text/javascript”>
$(document).ready(function() {
 $(“form”).submit(function() {
 alert(“You submitted the form”);
 return false;
 });
});
</script>
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
			</div>
            <div class="form-group">
			<label for="">Gender</label><br>
			<input type="radio" name="gender" value="Male"><label>Male</label>
			<input type="radio" name="gender" value="Female"><label>Female</label>
			</div>
			<div class="form-group">
			<label for="email">Email Id</label>
			<input type="text" name="email" id="email" class="form-control"  placeholder="Enter Your Email Id" >
			</div>
			<div class="form-group">
			<label for="contactno">Contact Number</label>
			<input type="text" name="contact" id="contact" class="form-control"  placeholder="Enter Contact Number">
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


