<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.js"></script>

		
		<style type="text/css" title="currentStyle">

			@import "<?php echo base_url(); ?>DataTables/media/css/jquery.dataTables.css";
			
		</style>
<script>
	
	$(document).ready(function() {
    $('#example').dataTable();
} );
</script>
<div class="quick_menu">
	<a class="quick_menu_link" href="<?php echo site_url("vaccine_management/new_vaccine");?>">New Vaccine</a>
</div>
<div id="BCG">
	<table  id="example" class="display table table-striped" cellspacing="0" width="100%">
	<!--	<th class="subsection-title" colspan="11">Vaccines List</th>-->
		
		<thead>
        <tr>
            <th>Name</th>
			<th>Doses Required</th>
			<th>Wastage Factor</th>
			<th>Tray Color</th>
			<th>Added By</th>
			<th>Date Added</th>
			<th>Action</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th>Name</th>
			<th>Doses Required</th>
			<th>Wastage Factor</th>
			<th>Tray Color</th>
			<th>Added By</th>
			<th>Date Added</th>
			<th>Action</th>
        </tr>
    </tfoot>
	<tbody>
		<?php
foreach($vaccines as $vaccine){
		?>
		<tr>
			<td><?php echo $vaccine->Name
			?></td>
			<td><?php echo $vaccine->Doses_Required
			?></td>
			<td><?php echo $vaccine->Wastage_Factor
			?></td>
			<td style="background-color:<?php echo '#' . $vaccine -> Tray_Color;?>"></td>
			<td><?php echo $vaccine->User->Full_Name
			?></td>
			<td><?php echo date("d/m/Y", $vaccine -> Timestamp);?></td>
			<td> <a href="<?php echo base_url()."vaccine_management/edit_vaccine/".$vaccine->id?>" class="link">Edit</a>|
				 <?php
if($vaccine->Active == 1){
			?>
			<a class="link" style="color:red" href="<?php echo base_url()."vaccine_management/change_availability/".$vaccine->id."/0"?>">Disable</a><?php }
				else{
			?>
			<a class="link" style="color:green" href="<?php echo base_url()."vaccine_management/change_availability/".$vaccine->id."/1"?>">Enable</a><?php }?></td>
		</tr>
		<?php }?>
		</tbody>
	</table>
</div>