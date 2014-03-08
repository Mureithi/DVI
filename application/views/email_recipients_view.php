<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.js"></script>

		
		<style type="text/css" title="currentStyle">

			@import "<?php echo base_url(); ?>DataTables/media/css/jquery.dataTables.css";
			
		</style>
<script>
	
	$(document).ready(function() {
    $('#example').dataTable();
} );
</script>
<?php ob_start();?>
<!-- <div class"section_title">  </div> -->
<div class="container">
<div class="quick_menu">
	<a class="quick_menu_link" href="<?php echo base_url()."email_management/add_new"?>">Add Recepient</a>
</div>
<table id="example" class="display table table-striped" cellspacing="0" width="100%">
	
	<thead>
        <tr>
         <th>Recepient Name</th>
		<th>Email Address</th>
		<th>Mobile Number</th>
		<th>Stock Out</th>
		<th>Consumption</th>
		<th>Cold-Chain Capacity</th>
		<th>Action</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
         <th>Recepient Name</th>
		<th>Email Address</th>
		<th>Mobile Number</th>
		<th>Stock Out</th>
		<th>Consumption</th>
		<th>Cold-Chain Capacity</th>
		<th>Action</th>
        </tr>
    </tfoot>
	<tbody>
	<?php

foreach($emailsnsms as $data)
{
	?>
	<tr>
		<td><?php echo $data['recepient']
		?></td>
		<td><?php echo $data ['email']
		?></td>
		<td><?php echo $data ['number']
		?></td>
		<td align="center"><?php
		if ($data['stockout'] == '0') {
			echo "<span style='color:red'>No</span>";
		}
		if ($data['stockout'] == '1') {
			echo "<span style='color:green'>Yes</span>";
		}
		?>

		</td ><td align="center"><?php
		if ($data['consumption'] == '0') {
			echo "<span style='color:red'>No</span>";
		}
		if ($data['consumption'] == '1') {
			echo "<span style='color:green'>Yes</span>";
		}
		?></td>
		<td align="center"><?php
		if ($data['coldchain'] == '0') {
			echo "<span style='color:red'>No</span>";
		}
		if ($data['coldchain'] == '1') {
			echo "<span style='color:green'>Yes</span>";
		}
		?></td>
		<td><a  class="link" href="<?php echo base_url() . "email_management/edit_data/" . $data['id'];?>">Edit &nbsp;</a>| <?php

if($data['valid']== 1){
		?>
		<a class="link" style="color:red" href="<?php echo base_url() . "email_management/change_inavailability/" . $data['id'];?>">Disable</a><?php }
			else
			{
		?>
		<a class="link" style="color:green" href="<?php echo base_url() . "email_management/change_availability/" . $data['id'];?>">&nbsp;Enable</a><?php }?></td>
	</tr>
	<?php }?>
	</tbody>
</table>
</div> 