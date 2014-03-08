<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>DataTables/media/js/jquery.dataTables.js"></script>

		
		<style type="text/css" title="currentStyle">

			@import "<?php echo base_url(); ?>DataTables/media/css/jquery.dataTables.css";
			
		</style>
<script>
	
	$(document).ready(function() {
    $('#example').dataTable();
} );
</script>
<div class="section_title"><?php echo $title;?></div>
<div class="container">
<table id="example" class="display table table-striped" cellspacing="0" width="100%">
	 <thead>
        <tr>
            <th>Facility Code</th> 
		<th>Name</th>		
		<th>Type</th> 
		<th>District</th>  
		<th>Action</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th>Facility Code</th> 
		<th>Name</th>		
		<th>Type</th> 
		<th>District</th>  
		<th>Action</th>
        </tr>
    </tfoot>
	<tbody>
 <?php  
 foreach($facilities as $facility){?>
 	
    <tr>
 		<td> <?php echo $facility->facilitycode;?> </td> 
   		<td> <?php echo $facility->name;?> </td>
  		<td> <?php echo $facility->Type->Name;?> </td>
   		<td> <?php echo $facility->Parent_District->name;?> </td>
 		<td> <a href="<?php echo base_url()."facility_management/edit_facility/".$facility->id?>" class="link">Edit Details </a> </td>
 	</tr>

 <?php }
 ?>
	</tbody>
 
 
</table> 
</div>

		