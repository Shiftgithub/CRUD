
	<form action="<?php echo base_url("index.php/Stud_controller/update_student"); ?>" method="post" >

	<input type="hidden" name="old_roll_no" value="<?php echo $old_roll_no; ?> " />
	<label>Roll No.</label>
	<input type="text" name="roll_no" value="<?php echo $records[0]->roll_no; ?>" id="roll_no"  />
	<br />
	<label>Name</label>
	<input type="text" name="name" value="<?php echo $records[0]->name; ?>" id="name"  />
	<br>
	<label>Contact Number</label>
	<input type="text" name="c_num" value="<?php echo $records[0]->c_num; ?>" id="c_num"  />
	<br>
	<label>Email</label>
	<input type="text" name="email" value="<?php echo $records[0]->email; ?>" id="email"  />
	
	<br />
	<input type="submit" value="Edit" id="submit"  />
	</form>