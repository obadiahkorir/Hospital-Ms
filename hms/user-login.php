
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient-Login</title>
		
		<link rel="stylesheet" href="assets/css/styles.css">
		
	</head>
         
	<body class="login">
		<div class="row">
			<div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="logo margin-top-30">
					<h2> PU E-HEALTH | Patient Login</h2>
				</div>
                          
				<div class="box-login">
                                    <form action="admin/dashboard.php" method="post">
						<fieldset>
							<legend>
								Sign in to your account. Pwani University
							</legend>
							<p>
								Please enter your name and password to log in.<br />
                                                             
							</p>
							<div class="form-group">
								<span class="input-icon">
                                                                    <b>Enter UserName:</b>   <input type="text" class="form-control" name="username" placeholder="e.g Obadiah">
									<i class="fa fa-user"></i> </span>
							</div>
							<div class="form-group form-actions">
								<span class="input-icon">
									<b>Enter Your Password:</b><input type="password" class="form-control password" name="password" placeholder="e.g *******">
									<i class="fa fa-lock"></i>
									 </span>
							</div>
							<div class="form-actions">
								
								<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
                                                                        
								</button>
							</div>
							<div class="new-account">
								Don't have an account yet?
								<a href="registration.php">
									Create an account
								</a>
							</div>
						</fieldset>
					</form>

					<div class="copyright">
						&copy; <span class="current-year"></span><span class="text-bold text-uppercase">  PU E-HEALTH</span>. <span>All rights reserved</span>
					</div>
			
				</div>
                            
			</div>
		</div>
		<script src="vendor/jquery/jquery.min.js"></script>
		
		<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
	
		<script src="assets/js/main.js"></script>

		<script src="assets/js/login.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Login.init();
			});
		</script>
	
	</body>
	<!-- end: BODY -->
</html>