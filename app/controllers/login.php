<?php
	require "controller/controller_login_admin.php";
	 require "includes/login_connect/header_login.php";
	 
?>
				<form method="POST">
					<!-- class="login100-form validate-form"  -->
					
					<span class="login100-form-title p-b-49">
						Login
						
					</span>
					<div style="display:flex;justify-content:center; align-items:center; margin-bottom:50px">
					
					</div>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="email" placeholder="Type your Email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
						<?php
                            if(isset($emailErrMsg)){
                                echo $emailErrMsg;
                            }
                    	?>
					</div>
					

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="passwordCheck" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
						<?php
                            if(isset($passwordErrMsg)){
                                echo $passwordErrMsg;
                            }
                    	?>  
					</div>

					
					
					<div class="text-right p-t-8 p-b-31">
						<!-- <a href="#">
							Forgot password?
						</a> -->
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="submit" class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					
				</form>
<?php
	require "includes/login_connect/footer_login.php"; 
?>
