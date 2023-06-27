<?php require 'DB.php';?>

<div class="container-fluid">
	<form action="" id="manage-department" method="post">
		<input type="hidden" name="id" value="">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="department" class="control-label">Department</label>
			<input type="text" class="form-control form-control-sm" name="department" id="department" value="">
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
		</div>
	
	</form>
</div>
 
