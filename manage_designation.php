<?php require 'DB.php';?>
<div class="container-fluid">
	<form action="" id="manage-designation" method="">
		<input type="hidden" name="id" value="">
		<div id="msg" class="form-group"></div>
		<div class="form-group">
			<label for="designation" class="control-label">Designation</label>
			<input type="text" class="form-control form-control-sm" name="designation" id="designation" value="">
		</div>
		<div class="form-group">
			<label for="description" class="control-label">Description</label>
			<textarea name="description" id="description" cols="30" rows="4" class="form-control"></textarea>
		</div>
	</form>
</div>
<script>
	$(document).ready(function(){
		$('#manage-designation').submit(function(e){
			e.preventDefault();
			start_load()
			$('#msg').html('')
			$.ajax({
				url:'ajax.php?action=save_designation',
				method:'POST',
				data:$(this).serialize(),
				success:function(resp){
					if(resp == 1){
						alert_toast("Data successfully saved.","success");
						setTimeout(function(){
							location.reload()	
						},1750)
					}else if(resp == 2){
						$('#msg').html('<div class="alert alert-danger"><i class="fa fa-exclamation-triangle"></i> designation already exist.</div>')
						end_load()
					}
				}
			})
		})
	})

</script>