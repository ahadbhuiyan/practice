<html>
	<head>
		<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
		<script type="text/javascript" src="http://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script>
		<script>

			function validatePassword(){ 
			 var validator = $("#loginForm").validate({
			  rules: {                   
			   name:"required",
			   email:"required",
			   password :"required",
			   confirmpassword:{
				equalTo: "#password"
				  }  
				 },                             
				 messages: {
				  name:"Enter your full name",
				  email:"Enter your email address",
				  password :" Enter Password",
				  confirmpassword :" Enter Confirm Password Same as Password"
				 }
			 });
			 if(validator.form()){
			  alert('Sucess');
			 }
			}

		</script>
		
		<style>		
			fieldset{
				width:400px; 
				background-color:#33cccc; 
				font-size:25px; 
				font-weight:bold;
				margin-left:100px;
				margin-top:20px;
				}
			.text{
				height:50px; 
				margin:0px; 
				font-size:12px; 
				color:red;
				}
			.btn{
				width:100px;
				height:40px;
				background-color:black;
				color:white;
				margin:10px;
			}
			.textbox{
				height:30px;
				}
		</style>
 
	</head>

	<body>
		<form method="post" id="loginForm" name="loginForm">
		  
		   <fieldset>
			<legend>Login Form</legend>
			  <table style="border:0px; width:400px; border-collaspe:collaspe; font-size:15px; font-family:verdana; padding:10px;">
			   <tr>
				<td>Full Name</td>
				</tr>
				<tr>
				<td class="text"><input class="textbox" tabindex="1" size="45" type="text" name="name" id="name"/></td>
			   </tr>
			   <tr>
				<td>Email Address</td>
				</tr>
				<tr>
				<td class="text"><input class="textbox" tabindex="1" size="45" type="text" name="email" id="email"/></td>
			   </tr>
			   <tr>
				<td>Password</td>
				</tr>
				<tr>
				<td class="text"><input class="textbox" tabindex="1" size="45" type="password" name="password" id="password"/></td>
			   </tr>
			   <tr>
				<td>Confirm Password</td>
				</tr>
				<tr>
				<td class="text"><input class="textbox" tabindex="1" size="45" type="password" name="confirmpassword" id="confirmpassword"/></td>
			   </tr>
			   <tr>
				<td><input tabindex="3" type="button" value="Login" class="btn" onClick="validatePassword();"/></td>     
			   </tr>
			  </table>
			</fieldset>  
		 </form> 
	</body>
</html>