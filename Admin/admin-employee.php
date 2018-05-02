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
<link href ="css/style1.css" rel ="stylesheet" type ="text/css" />
</head>
<body>
<!-- /* Administrator.html */ -->

<div class="admin-page">
    <nav class="navbar navbar-default admin-header">
        <div class="container-fluid">

            <div class="navbar-header">
               
				<div class="logobrand">
				<a href="#">
   <img src="logo.png" alt="logo" style="width: 110px; height: 50px; ">
   </a>
         </div>
            </div>

           
                <div class="nav navbar-nav navbar-right">
    <a href =""> firoja@promactinfo.com</a>
        </div>
		</div>
    </nav>

    <div class="admin-container container-fluid">
    <div class="row">
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 p0 admin-sidebar">
                <div class="admin-list">
                    <ul class="list-group">
                        <li class="list-group-item"><a class="active"><i class="fa fa-users"></i><span >Employees</span></a></li>
						<li class="list-group-item"><a><i class="fa fa-users"></i><span >Team Leaders</span></a></li>
						<li class="list-group-item"><a><i class="fa fa-envelope-open"></i><span >Leave Requests</span></a></li>
                        <li class="list-group-item" ><a> <i class="fa fa-calendar"></i><span>Holidays list</span></a></li> 
                   
				   </ul>
                </div>
            </div>
            <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 admin-content">
			<div class="admin-block-title clearfix">
    <h2 class="pull-left mt10">List Of Employees</h2>
	<button aria-haspopup="true" [routerLink]="['/user','add']" class="btn btn-primary pull-right" type="submit">
		<!-- <em class="material-icons">add</em>  -->
		<i class="fa fa-plus"></i>
		Add Employee
		</button>
</div>
<div class="admin-area" id="area">
           <div class="grid-container">
            <table class="data-grid">
                <thead>
                    <tr>
					<th class="h5">Employee Id&nbsp;</th>
					<th class="h5">Name&nbsp;</th>
                    <th class="h5">Email Id&nbsp;</th>
				    <th class="h5">Designation&nbsp;</th>
                    <th class="h5">Date Of Joining&nbsp;</th>
                    <th class="h5">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>e002</td>  
                        <td> firoja </td>						
                        <td>firoja@promactinfo.com</td>
						<td>Employee</td>
                        <td>25.12.2017</td>
                        <td class="actions text-right">
						<a><i class="fa fa-pencil"></i></a>
							<button class="button_trash" type="button" data-toggle="modal" data-target="#myModal">	<i class="fa fa-trash" ></i> </button>
                            
                        </td>
                    </tr>
					
                </tbody>
            </table>
        </div>
	

  
</div>
			   </div><!--col-lg-10-->
        </div> <!--row-->
    </div> <!--admin-container-->
    <footer class="admin-footer">2018 © Pattire </footer>
</div> <!--admin-page-->
			</body>
			</html>