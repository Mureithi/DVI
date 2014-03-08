<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.js"></script>

		
		<style type="text/css" title="currentStyle">

			@import "<?php echo base_url(); ?>DataTables/media/css/jquery.dataTables.css";
			
		</style>
<script>
	
	$(document).ready(function() {
    $('#example').dataTable();
} );
</script>
<div class="container">
<div class="quick_menu">
<a class="quick_menu_link" href="<?php echo site_url("user_management/add");?>">New User</a>
</div>

<table id="example" class="display table table-striped" cellspacing="0" width="100%">
	<thead>
        <tr>
		<th>Full Name <span class="glyphicon glyphicon-sort" style="margin-left: 60%"></span></th> 
		<th>Username</th>		
		<th>User Group</th> 
		<th>Disabled?</th> 
		<th>Action</th>
	</tr>
    </thead>
 
    <tfoot>
        <tr>
		<th>Full Name</th> 
		<th>Username</th>		
		<th>User Group</th> 
		<th>Disabled?</th> 
		<th>Action</th>
	</tr>
    </tfoot>
	<tbody>
	
 <?php 
 foreach($users as $user){?>
 <tr>
 <td>
 <?php echo $user->Full_Name;?>
 </td> 
   <td>
 <?php echo $user->Username;?>
 </td>
  <td>
 <?php echo $user->Group->Name;?>
 </td>
 
  <td>
 <?php if($user->Disabled == 0){echo "No";}else{echo "Yes";};?>
 </td>
 <td>
  <a href="<?php echo base_url()."user_management/edit_user/".$user->id?>" class="link">Edit </a>|
  <?php
  if($user->Disabled == 0){?>
  	   <a class="link" style="color:red" href="<?php echo base_url()."user_management/change_availability/".$user->id."/1"?>">Disable</a> 
  <?php }
  else{?>
  	   <a class="link" style="color:green" href="<?php echo base_url()."user_management/change_availability/".$user->id."/0"?>">Enable</a> 
 <?php }
  ?>

 </td>
 </tr>
 
 <?php }
 ?>
	 
 
	<tbody>
</table> 
</div>
