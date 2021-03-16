@extends('backend.home')

@section('page')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #fff;
  min-height: 460px;
}
    </style>
</head>

<body>



<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<center><img src="https://lh3.googleusercontent.com/-7u2yxrFcnaM/X_Fxoc8k8fI/AAAAAAAAAo4/VqaPGSrUBKwHloLZ5yz__lbKEv5ztfGyQCEwYBhgLKtQDAL1Ocqz6kE0cr5B-7ob2aMlDIvj3HQkNYGTOk0F4uYppc-08y-K-zssBPSCyhRdPB3FdZteXlGobXgNRMtgTCqP9-RuF_F2_ll1gDOQRiTp9UXOkUJurjrcSMsC4AWgyLfJ4vXhCZ92KnzMpkSIfwnfw7gPAqkHUmwWzgoQ25eNr-DdnEqkPZNReIBFrKhZP9ls0IFa_uOh-xKfc3FziP5uj5ObqlrYUe8CNxe4ohEiCqdi8nr3fims2SFDbyS1emHGwWvLyItjrV-SFrAKNCYj5jJ5gFGg96arKAq2gnN7tDMhRrAZenfL4nat7iOvK8s76VOHi9avJYXWxsXBZdLs3vuIIxIMFTUXj7RCZsXW0cqmfv-d2NZT5RBlQnkzJx-wPvmU0hcqRq9xC9gjO0CCMJSUYi0mfuev84L7V7qLX1YLrmIPJJv1GW0-xyEr92WQdtoz1_iozAGlkDl4UAmGgjeGupHE4wUCE9edmZ2Ep0dOFOMF7m4qZNIL2QI_3MnEPkukR7aoq8qFSfuTpVOaTma0AcFceIbOy79Q3d7qQZbfd5u18yw4Lf-rzseh0RNzpsJf9erPhdz-TJ2TxykTG06mRa6JZxTmSjnm9L81wd_drMMK_w4IG/w140-h140-p/2021-01-02.jpg" class="img-responsive" alt=""> </center>
  
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Md. Zalish Mahmud
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Follow</button>
					<button type="button" class="btn btn-danger btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>

					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Some user related content goes here...
            </div>
		</div>
	</div>
</div>

<br>
<br>
    
</body>
</html>




@stop