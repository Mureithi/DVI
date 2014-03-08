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
<a class="quick_menu_link" href="<?php echo site_url("fridge_management/add");?>">New Fridge</a>
</div>

<table id="example" class="display table table-striped" cellspacing="0" width="100%">
	
	<thead>
        <tr>
		<th>Item Type</th> 
		<th>Library Code</th>		
		<th>PQS</th> 
		<th>Model Name</th>  
		<th>Manufacturer</th>
		<th>Power Source</th>
		<th>Refrigerant Gas Type</th>
		<th>Action</th>
	</tr>
    </thead>
 
    <tfoot>
        <tr>
		<th>Item Type</th> 
		<th>Library Code</th>		
		<th>PQS</th> 
		<th>Model Name</th>  
		<th>Manufacturer</th>
		<th>Power Source</th>
		<th>Refrigerant Gas Type</th>
		<th>Action</th>
	</tr>
    </tfoot>
	<tbody>
 <?php  
 foreach($fridges as $fridge){?>
 <tr>
 <td>
 <?php echo $fridge->Type->Name;?>
 </td> 
   <td>
 <?php echo $fridge->Library_Id;?>
 </td>
  <td>
 <?php echo $fridge->PQS;?>
 </td>
   <td>
 <?php echo $fridge->Model_Name;?>
 </td>
    <td>
 <?php echo $fridge->Manufacturer;?>
 </td>
    <td>
 <?php echo $fridge->Power->Name;?>
 </td>
    <td>
 <?php echo $fridge->Gas_Type->Name;?>
 </td>
 
 <td>
  <a href="<?php echo base_url()."fridge_management/edit_fridge/".$fridge->id?>" class="link">Edit</a>|
  <?php
if($fridge->Active == 1){
		?>
		<a class="link" style="color:red" href="<?php echo base_url()."fridge_management/change_availability/".$fridge->id."/0"?>">Disable</a><?php }
			else{
		?>
		<a class="link" style="color:green" href="<?php echo base_url()."fridge_management/change_availability/".$fridge->id."/1"?>">Enable</a><?php }?>
		
 </td>
 </tr>
 
 <?php }
 ?>
	 
 
</tbody>
</table> 
</div>