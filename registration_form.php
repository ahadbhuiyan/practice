<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Form</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		</head>
<body style="padding:20px; margin:10px;">
	
	<div class="container">
	<form class="form-horizontal" role="form">	
			<div class="col-xs-12" style="font-size:20px;">
				<label for="dateofbirth">Registration Form</label><hr style="margin:0px; padding:0px;">
			</div>
			<div class="col-xs-12">
				<label for="dateofbirth"><Strong>Select Course:(One Person will be eligible for one course only)</Strong></label>
			</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="firstchoice">First Choice:</label>
			<div class="col-sm-4">
				<select class="form-control" id="anjum">
					<option>Web Design</option>
					<option>Web Development</option>
					<option>Mobile Anroid</option>
					<option>Project Management</option>
				</select>
			</div>
		</div>
	
		<div class="form-group">
			<label class="control-label col-sm-2" for="secondchoice">Second Choice:</label>
			<div class="col-sm-4">
					<select class="form-control" id="anjum">
						<option>Web Design</option>
						<option>Web Development</option>
						<option>Mobile Anroid</option>
						<option>Project Management</option>
					</select>
				
			</div>
		
		</div>
			<div class="form-group">
			<label class="control-label col-sm-2" for="thirdchoice">Third Choice:</label>
			<div class="col-sm-4">
				<select class="form-control" id="anjum">
					<option>Web Design</option>
					<option>Web Development</option>
					<option>Mobile Anroid</option>
					<option>Project Management</option>
				</select>
			</div>
		</div>
	</form>
	</div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
				<div class="col-xs-5">
					<label for="name">Name</label>
					<input class="form-control" id="name" type="text">
				</div>
	  
		</div>	

	</form>	
	</div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="fname">Fathers Name</label>
				<input class="form-control" id="fname" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="mname">Mothers Name</label>
				<input class="form-control" id="mname" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="gender">Gender</label>
				<input class="form-control" id="gender" type="text">
			</div>		
		</div>
	</form>
	</div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="nid">National ID</label>
				<input class="form-control" id="nid" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="birthcertificate">Birth Certificate No.</label>
				<input class="form-control" id="birthcertificate" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="otherid">Other Valid ID(Passport)</label>
				<input class="form-control" id="otherid" type="text">
			</div>
		</div>
	</form>
	</div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="dateofbirth">Date of Birth</label>
				<input class="form-control" id="dateofbirth" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="religion">Religion</label>
				<input class="form-control" id="religion" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="egroup">Ethnic Group</label>
				<input class="form-control" id="egroup" type="text">
			</div>
		</div>
	</form>
	</div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-6">
				<label for="mobile">Mobile No.</label>
				<input class="form-control" id="mobileno" type="text">
			</div>
	  
			<div class="col-xs-6">
				<label for="email">Email</label>
				<input class="form-control" id="email" type="text">
			</div>
		</div>
	</form>
	</div>  
    
	<div class="container">
	<form role="form">
		<div class="form-group">
			<div class="col-xs-6">
				<label class="control-label col-sm-3" for="isemployee">Is Employed?:</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="">Yes
				</label>
				<label class="checkbox-inline">
				<input type="checkbox" value="">No
				</label>
			</div>
			<div class="col-xs-6">
				<label for="monthlyincome">Monthly Income</label>
				<input class="form-control" id="monthlyincome" type="text">
			</div>
		</div>
	</form>
	</div>
	
	<div class="container">
	<form role="form">
	
			<div class="col-xs-12" style="height:40px; font-size:16px">
				<label for="dateofbirth">Parmanent / Present Address</label><hr style="margin:0px; padding:0px;">
			</div>
	
		<div class="form-group">
	
			<div class="col-xs-12">
				<label for="address">Address</label>
				<input class="form-control" id="address" type="text">
			</div>
		</div>
	</form>
	</div>

	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-6">
				<label for="city">City</label>
				<input class="form-control" id="city" type="text">
			</div>
	  
			<div class="col-xs-6">
				<label for="pcode">Post Code</label>
				<input class="form-control" id="pcode" type="text">
			</div>
		</div>
	</form>
	</div>

	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="year">Division</label>
				<select class="form-control" id="anjum">
					<option>Dhaka</option>
					<option>Chittagong</option>
					<option>Rajshahi</option>
					<option>Khulna</option>
				</select>
			</div>
		</div>
	  
		<div class="col-xs-4">
			<label for="roll">District</label>
			<select class="form-control" id="anjum">
					<option>Dhaka</option>
					<option>Chittagong</option>
					<option>Rajshahi</option>
					<option>Khulna</option>
				</select>
		</div>
	  
		<div class="col-xs-4">
			<label for="result">Sub District</label>
				<select class="form-control" id="anjum">
					<option>Dhaka</option>
					<option>Chittagong</option>
					<option>Rajshahi</option>
					<option>Khulna</option>
				</select>
		</div>
	</form>  
    </div>
	
	<div class="container">
	<form role="form">
		<div class="form-group">
			<div class="col-xs-12" style="height:40px; font-size:16px">
				<label for="dateofbirth">SSC or Equivalent</label><hr style="margin:0px; padding:0px;">
			</div>
	
			<div class="col-xs-4">
				<label for="board">Board</label>
				<input class="form-control" id="board" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="inst">Institute</label>
				<input class="form-control" id="inst" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="subject">Subject</label>
				<input class="form-control" id="subject" type="text">
			</div>
		</div>
	</form>
	</div>

	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="year">Year</label>
				<input class="form-control" id="year" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="roll">Roll No.</label>
				<input class="form-control" id="roll" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="result">Result</label>
				<input class="form-control" id="result" type="text">
			</div>
		</div>
	</form> 
    </div>
	
	
	<div class="container">
	<form role="form">
		<div class="form-group">
			<div class="col-xs-12" style="height:40px; font-size:16px">
				<label for="dateofbirth">HSC or Equivalent</label><hr style="margin:0px; padding:0px;">
			</div>
	
			<div class="col-xs-4">
				<label for="board">Board</label>
				<input class="form-control" id="board" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="inst">Institute</label>
				<input class="form-control" id="inst" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="subject">Subject</label>
				<input class="form-control" id="subject" type="text">
			</div>
		</div>
	</form>  
    </div>

	<div class="container">
	<form role="form">
		<div class="form-group">
	
			<div class="col-xs-4">
				<label for="year">Year</label>
				<input class="form-control" id="year" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="roll">Roll No.</label>
				<input class="form-control" id="roll" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="result">Result</label>
				<input class="form-control" id="result" type="text">
			</div>
		</div>	
	</form>
	</div>

	<div class="container">
	<form role="form">
		<div class="form-group">
			<div class="col-xs-12" style="height:40px; font-size:16px">
				<label for="dateofbirth">Highest Acacemic Acievement</label><hr style="margin:0px; padding:0px;">
			</div>
			<div class="col-xs-4">
				<label for="lbleducation">Level Of Education</label>
				<input class="form-control" id="lbleducation" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="inst">Institute</label>
				<input class="form-control" id="inst" type="text">
			</div>
	  
			<div class="col-xs-4">
				<label for="subject">Subject</label>
				<input class="form-control" id="subject" type="text">
			</div>
		</div>
	</form>
	</div>  
    
	
	<!-- button -->
	<div class="container">
	<form role="form">	
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-4">
				<button type="submit" class="btn btn-default">Reset</button>
			</div>

			<div class="col-sm-offset-2 col-sm-4">
				<button type="submit" class="btn btn-default">Save</button>
			</div>
		</div>
	</form>
	</div>


</body>
</html>
