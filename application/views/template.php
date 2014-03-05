<?php
if (!$this -> session -> userdata('user_id')) {
	redirect("User_Management");
}
if (!isset($link)) {
	$link = null;
}
if (!isset($quick_link)) {
	$quick_link = null;
}
$admin_national_only = false;
$district_only = false;
$region_only = false;
$identifier = $this -> session -> userdata('user_identifier');
if ($this -> session -> userdata('user_identifier') == 'national_officer') {
	$admin_national_only = true;
}
if ($this -> session -> userdata('user_identifier') == 'district_officer') {
	$district_only = true;
}
if ($this -> session -> userdata('user_identifier') == 'provincial_officer') {
	 
	$region_only = true;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $title;?></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content=""><!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   		<link rel="icon" href="<?php echo base_url().'Images/coat_of_arms.png'?>" type="image/x-icon" />
		<link href="<?php echo base_url().'CSS/style.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'boot-strap3/css/bootstrap.min.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'boot-strap3/css/bootstrap-responsive.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'CSS/pagination.css'?>" type="text/css" rel="stylesheet"/>
		<link href="<?php echo base_url().'CSS/validator.css'?>" type="text/css" rel="stylesheet"/>
		<script src="<?php echo base_url().'/boot-strap3/jquery-1.8.0.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'boot-strap3/js/bootstrap.min.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'Scripts/validationEngine-en.js'?>" type="text/javascript"></script>
		<script src="<?php echo base_url().'Scripts/validator.js'?>" type="text/javascript"></script>

<?php
if (isset($script_urls)) {
	foreach ($script_urls as $script_url) {
		echo "<script src=\"" . $script_url . "\" type=\"text/javascript\"></script>";
	}
}
?>

<?php
if (isset($scripts)) {
	foreach ($scripts as $script) {
		echo "<script src=\"" . base_url() . "Scripts/" . $script . "\" type=\"text/javascript\"></script>";
	}
}
?>


 
<?php
if (isset($styles)) {
	foreach ($styles as $style) {
		echo "<link href=\"" . base_url() . "CSS/" . $style . "\" type=\"text/css\" rel=\"stylesheet\"></link>";
	}
}
?>
<style>
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
	.navbar-default .navbar-nav>li>a {
		padding-bottom:3%; 

		}
</style>
</head>
<body screen_capture_injected="true" style="margin: 0px;">
<div class="navbar navbar-default navbar-fixed-top" id="top_panel">
   <div class="container" style="border-bottom: 2px solid #C0C0C0;width: 100%" >
        <div class="navbar-header " >
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img style="display:inline-block;" src="<?php echo base_url();?>Images/coat_of_arms-resized1-template.png" class="img-responsive " alt="Responsive image">

				<div id="" style="display:inline-block;">
					<span style="font-size: 0.95em;font-weight: bold; ">Ministry of Health</span><br />
					<span style="font-size: 0.85em;">Division of Vaccines and Immunization (DVI)</span>	
				</div>
        </div>
        <div class="navbar-collapse collapse" style="font-weight: bold">
          <ul class="nav navbar-nav navbar-right">
       <li><a href="<?php echo site_url();?>" class=" <?php
if ($link == "home") {echo "top_menu_active";
}
?>">Home</a> </li>   
<?php
//This counter keeps track of how many top menus are being displayed and them change the width of the container accordingly. The default is 1 because of the default home menu
$menu_counter = 1;
//Retrieve all accessible menus from the session
$menus= $this -> session -> userdata('menus');
//Loop through all menus to display them in the top panel menu section
foreach($menus as $menu){?>
	<li class="" >
            	
            	<a href="<?php echo site_url($menu['menu_url']);?>" class="<?php
	if ($link == $menu['menu_url']) {echo "top_menu_active";
	}
?>"><?php echo $menu['menu_text']?></a>
	</li>
<?php
		//increment the menu counter
		$menu_counter++;
		}
	?>

            
           
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" ></span><?php echo $this -> session -> userdata('full_name');?> <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                
                <li><a href="<?php echo site_url("user_management/change_password");?>"><span class="glyphicon glyphicon-pencil" style="margin-right: 2%"></span>Change password</a></li>
                <li class="divider"></li>
                <li class="dropdown-header"><?php echo $this -> session -> userdata('full_name');?></li>
                <li><a href="<?php echo site_url("user_management/logout");?>"><span class="glyphicon glyphicon-off" style="margin-right: 2%"></span>Log out</a></li>
                
              </ul>
            </li>
          </ul>
         </div><!--/.nav-collapse -->
      </div>
      </div>
      <?php
if($identifier != "general_user")
{
?>
      <div class="container-fluid" style="margin-top:5%;font-weight: bold;font-size: 0.95em;">
      	
      	<ul class="nav nav-justified">
          
         <li> <a  class=" <?php
if ($quick_link == "new_disbursement") {echo "quick_menu_active";
}
?>" href="<?php echo site_url("disbursement_management/new_batch_disbursement");?>">Issue Vaccines</a></li>

<li><a  class=" <?php
if ($quick_link == "stock_count") {echo "quick_menu_active";
}
?>" href="<?php echo site_url("disbursement_management/stock_count");?>">Stock Count</a></li>

  <?php
  if($admin_national_only){?>
<li><a class=" <?php
if ($quick_link == "new_batch") {echo "quick_menu_active";
}
?>" href="<?php echo site_url("batch_management/new_batch");?>">Stock Delivery</a></li> 
 <?php }?>
 

 <?php if($district_only){?>
<li><a href="<?php echo site_url("facility_management/new_facility");?>" class=" <?php
if ($quick_link == "new_facility") {echo "quick_menu_active";
}
?>">Add New Facility</a></li>
<li><a href="<?php echo site_url("facility_management/add");?>" class=" <?php
if ($quick_link == "new_extra_facility") {echo "quick_menu_active";
}
?>">Add Extra Facility</a></li>

 <?php }?>
  <?php 

  if($district_only || $region_only){?>
<li><a href="<?php echo site_url("disbursement_management/add_receipt");?>" class=" <?php
if ($quick_link == "new_receipt") {echo "quick_menu_active";
}
?>">Stock Delivery</a></li>

 <?php }?>
        </ul>
      </div>
      <?php }?>
   

    
  
<div class="container-fluid" style=" overflow;auto;height: 100%;margin-bottom: 60px;">
	<?php $this -> load -> view($content_view);?>
</div>



<div id="footer">
      <div class="container">
        <p class="text-muted"> Government of Kenya &copy <?php echo date('Y');?>. All Rights Reserved</p>
      </div>
    </div>


	
	</body>