<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title><?php echo $title;?></title>

		<link rel="icon" href="<?php echo base_url().'Images/coat_of_arms-resized.png'?>" type="image/x-icon" />
		<link href="<?php echo base_url().'CSS/style.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'CSS/pagination.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'CSS/validator.css'?>" type="text/css" rel="stylesheet"/>
		<script src="<?php echo base_url().'/boot-strap3/jquery-1.8.0.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'boot-strap3/js/bootstrap.min.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'Scripts/validationEngine-en.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'Scripts/validator.js'?>" type="text/javascript"></script>
		<style>
			html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
		</style>
		<script type="text/javascript">
$(document).ready(function() {
    $("#login_form").validationEngine({ 
        inlineValidation: false,
         success :  function() { alert("Validation Success"); },
         failure : function() { alert("Validation Failure"); }
       });
   })

</script>
</head>
<body>
	
	<div class="container" style="border-bottom: 2px solid #C0C0C0;width: 100%" >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img style="display:inline-block;" src="<?php echo base_url();?>Images/coat_of_arms-resized.png" class="img-responsive " alt="Responsive image">

				<div id="" style="display:inline-block;">
					<span style="font-size: 1.5em;font-weight: bold; ">Ministry of Health</span><br />
					<span style="font-size: 1.2em;">Division of Vaccines and Immunization (DVI)</span>	
				</div>
        </div>
        
               
<div class="container" >
	<div class="row" style="height: 40px;/*border: 1px solid #036;*/">
	<div class="col-md-12">
		<div class="col-md-4"></div>
		<div class="col-md-4">
		 <?php
$attributes = array('enctype' => 'multipart/form-data',"class"=>"login_form","id"=>"login_form");
echo form_open('User_Management/login_submit',$attributes);

if (isset($popup)) {

	echo	'<div class="alert alert-danger alert-dismissable" style="text-align: center" >A Credentials Error has occured, Please Try again.
<button type="button" class=" close" data-dismiss="alert" aria-hidden="true">×</button>
','</div>';
}
unset($popup);


?></div>
<div class="col-md-4"></div>
	</div>	
		
	</div>

			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<div class="">
						<div id="contain_login" class="">
							<h2><span style="margin-right: 0.5em;" class="glyphicon glyphicon-lock"></span>Login</h2>
							
							<div id="login" >

								<div class="form-group" style="margin-top: 2.3em;">
									<label for="exampleInputEmail1">Email address</label>
									<input type="text" class="form-control input-lg" name="username" id="username" placeholder="Enter email" required="required" style="border-radius:0">
								</div>
								<div class="form-group" style="margin-bottom: 2em;">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required="required" style="border-radius:0">
								</div>
								
								

								<input type="submit" class="btn " name="register" id="register" value="Log in" style="margin-bottom: 3%; border-radius:0;font-weight: bold;">
								<input name="reset" type="reset" class="btn " value="Reset Fields" style="margin-bottom: 3%; border-radius:0;font-weight: bold;">
								<!--<a class="" style="margin-left: 2%;" href="<?php echo base_url().'user_management/forget_pass'?>" id="modalbox">Can't access your account ?</a>-->

							</div>

							<?php echo form_close(); ?>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>

			</div><!-- .row -->
		</div><!-- .container -->

<?php echo form_close();?></div>
	<div id="footer">
      <div class="container">
        <p class="text-muted"> Government of Kenya &copy <?php echo date('Y');?>. All Rights Reserved</p>
      </div>
    </div>
	
</body>

</html>