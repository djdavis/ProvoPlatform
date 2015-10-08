<div id="wrapper" class="margin-top-15">
	<!-- Page Content -->
	<div id="page-wrapper" class="background-page">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="login-panel panel panel-default">
						<div class="panel-heading frame logo-center-form" id="container">
							<h2 class="login-logo">Provocativ Media</h2>
						</div>
						<div class="panel-body">
							<h3 class="text-center">Login</h3>
							<br />						
							<?php 
							if (isset($errors)) {
								echo "<div class='errors'><ul style='width:300px; margin:0 auto;'>";
								foreach ($errors as $error) {
									echo "<li style='list-style-type:none;'>".$error."</li>";
								}
								echo "</ul></div>";
							}
							echo form_open('login/verify'); 
							?>
									<div class="form-group">
										<input name="username" type="text" class="form-control input-lg" placeholder="Enter a Username or Email...">
									</div>
									<div class="form-group">
										<input name="password" type="password" class="form-control input-lg" placeholder="Your Password...">
									</div>
									<input type="submit" class="current-parent btn btn-block btn-lg btn-success" value="Login" />
								</form>
							</div>
						</div>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->
	</div>