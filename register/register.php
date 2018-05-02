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
<h1> Registration Form </h1>
</div>
	<div class="admin-form">
    <form name="myForm">
        <div class="form-area">
            <fieldset>
                <div class="form-group">
                   <label for="name">Name</label>
     <input type="text" class="form-control name="name">
	         <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>
                </div>
                
                <div class="form-group">
                   <label for="email">Email Id</label>
      <input type="email" class="form-control" name="email">
	       <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>
                </div>
				
				 <div class="form-group">
                   <label for="designation">Designation</label>
      <input type="text" class="form-control" name="designation">
	  	  <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>

                </div>
				 <div class="form-group">
                   <label for="password">Password</label>
      <input type="password" class="form-control" name="password">
	   <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>
                </div>
				 <div class="form-group inline-field">
                   <label for="date">Date Of Joining</label>
      <input type="date" class="form-control" name="date">
	   <div class="errors-container">
                        <span class="error-msg">*Field Required</span>
                    </div>
                </div>				                           
                    <div class="mt20">
                        <button class="btn btn-primary" type="button" id="Button" onclick="clickmethod()"> Register</button>
                        <button class="btn" type="button" tabindex="0">Cancel </button>
                    </div>
               
            </fieldset>
        </div>
    </form>
</div>

</div>
</body>
</html>