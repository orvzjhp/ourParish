<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<table>
	<tr>
		<td>
			<h4 style="margin-bottom:10px;" data-sched_id="<?php echo $sched_id; ?>" id="update_ID">Select Day:</h4>
		</td>	
		<td>
			<select class="form-control" name="day">
				<option value='01'>Sunday</option>
				<option value='02'>Monday</option>
				<option value='03'>Tuesday</option>
				<option value='04'>Wednesday</option>
				<option value='05'>Thursday</option>
				<option value='06'>Friday</option>
				<option value='07'>Saturday</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>
			<h4 style="margin-bottom:10px;" name="time_start">Start Time:</h4>
		</td>
		<td>
		<div>
			<input type="time" name="time_start" class="form-control" style="width:150px;">
		</div>
		</td>

		<td>
			<h4 style="margin-bottom:10px; margin-left:10px;">End Time:</h4>
		</td>
		<td>
		<div>
			 <input type="time" name="time_end" class="form-control" style="width:150px;">
		</div>
		</td>
	</tr>
</table>