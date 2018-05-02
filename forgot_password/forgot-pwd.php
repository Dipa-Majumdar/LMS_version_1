<html>
<head>
 <title>LAMS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href ="style.css" rel ="stylesheet" type ="text/css" />


</head>
<body>
<div class ="register_container">
<div class="header">
<h1> Forgot Password </h1>
</div>
	<div class="admin-form">
    <form name="myForm">
        <div class="form-area">
            <fieldset>
                
                
                <div class="form-group">
                   <label for="email">Email Id</label>
      <input type="email" class="form-control" name="email" >
	       <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>
                </div>
				
				                     
                    <div class="mt20 password-button">
                        <button class="btn btn-primary" type="button" id="Button" onclick="clickmethod()"> Send Password Reset Link</button>                       
                    </div>
                     <div class="link mt20">
					 <a href="">Back to Login </a>
					 <div>
            </fieldset>
        </div>
    </form>
</div>

</div>
</body>
</html>