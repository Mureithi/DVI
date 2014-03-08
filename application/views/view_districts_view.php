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
<a class="quick_menu_link" href="<?php echo site_url("district_management/add");?>">New District</a>
</div>

<table id="example" class="display table table-striped" cellspacing="0" width="100%">
	
	<thead>
        <tr>
		<th>Name</th>
		<th>Province</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Disabled?</th>
		<th>Action</th>
	</tr>
    </thead>
 
    <tfoot>
        <tr>
		<th>Name</th>
		<th>Province</th>
		<th>Latitude</th>
		<th>Longitude</th>
		<th>Disabled?</th>
		<th>Action</th>
	</tr>
    </tfoot>
	<tbody>
	
	<?php
foreach($districts as $district){
	?>
	<tr>
		<td><?php echo $district -> name;?></td>
		<td><?php echo $district -> Province -> name;?></td>
		<td><?php echo $district -> latitude;?></td>
		<td><?php echo $district -> longitude;?></td>
		<td><?php
			if ($district -> disabled == 0) {echo "No";
			} else {echo "Yes";
			};
		?></td>
		<td><a href="<?php echo base_url()."district_management/edit_district/".$district->id?>" class="link">Edit </a>| <?php
if($district->disabled == 0){
		?>
		<a class="link" style="color:red" href="<?php echo base_url()."district_management/change_availability/".$district->id."/1"?>">Disable</a><?php }
			else{
		?>
		<a class="link" style="color:green" href="<?php echo base_url()."district_management/change_availability/".$district->id."/0"?>">Enable</a><?php }?></td>
	</tr>
	<?php }?>
	</tbody>
</table>
</div>