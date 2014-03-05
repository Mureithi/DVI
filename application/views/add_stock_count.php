<div class="section_title">
	<?php echo $title;?>
</div>
<div id="notification_panel">
	<div id="notification_panel_image"></div>
	<div id="notification_panel_text">
		Fill in the following form to record your physical stock count
	</div>
</div>
<?php
if (isset($disbursement)) { 
	$Vaccine_Id = $disbursement['Vaccine_Id'];
	$Date_Done = $disbursement['Date_Issued'];
	$Quantity = $disbursement['Total_Stock_Balance'];
	

} else {
	$Vaccine_Id = "";
	$Date_Done = Date('m/d/Y');
	$Quantity = "";
}
?>

<script type="text/javascript">
		$(document).ready(function() {
	$("#add_receivables_form").validationEngine();
		//Create all the datepickers
		var default_datepicker_options = {"changeMonth": true, "changeYear": true};
		$( "#date_counted" ).datepicker(default_datepicker_options);
		$( "#date_counted" ).datepicker('setDate', new Date());

		});
		function cleanup(){
		$("#reset_vaccine_form").click();
		$( "#date_counted" ).datepicker('setDate', new Date());
		}
</script>
<div id="form_area" style="width: 100%">
	<?php
	$attributes = array('enctype' => 'multipart/form-data','id'=>'add_receivables_form'); 
	if(isset($edit)){
	echo form_open('disbursement_management/save_stock_count/'.$id,$attributes);
	}
	else{
	echo form_open('disbursement_management/save_stock_count',$attributes);
	}

	echo validation_errors('
<p class="error">', '</p>
');
	?>

	<table border="0" class="data-table">
		<tbody>
			<input type="hidden" id="current_tab" /> 
			<input type="hidden" id="vaccine_id" name="vaccine_id" />
			<tr>
				<td colspan="4"><em>Enter required details below:-</em></td>
			</tr>

					<tr>
				<td><span class="mandatory">*</span>Vaccine </td>
				<td>			<select name="vaccine_id"> 
						<?php foreach($vaccines as $vaccine){?>
							<option value="<?php echo $vaccine->id?>" <?php if ($vaccine->id == $Vaccine_Id){echo 'selected';}?>><?php echo $vaccine->Name;?></option>
						<?php }?>
					</select></td>
			</tr>
			<tr>
				<td><span class="mandatory">*</span> Date Done </td>
				<td><?php

				$data_date_issued = array('name' => 'date_received', 'id' => 'date_counted','value' =>$Date_Done,'class'=>'validate[required]');
				echo form_input($data_date_issued);
				?></td>
			</tr>
			<tr>
				<td><span class="mandatory">*</span>No. of Doses Physically at Store</td>
				<td><?php

				$data_doses = array('name' => 'doses', 'id' => 'doses','value' =>$Quantity,'class'=>'validate[required,custom[integer]]');
				echo form_input($data_doses);
				?></td>
			</tr>
			<tr>
				<td align="center" colspan=2>
				<input name="submit" type="submit"
				class="button" value="Save Stock Count">
				<input name="reset"
				type="reset" class="button" value="Reset Fields" id="reset_vaccine_form">
				</td>
			</tr>
		</tbody>
	</table>
	<?php echo form_close();?>
</div>
<style type="text/css">
	#batch_information {
		float: left;
		min-width: 100px;
	}
	#form_area {
		float: left;
	}
</style>
