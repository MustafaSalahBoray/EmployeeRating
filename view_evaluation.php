
<div class="container-fluid">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-md-6">
				<dl>
					<dt><b class="border-bottom border-primary">Task</b></dt>
					<dd><?php echo ucwords($task) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Assign To</b></dt>
					<dd><?php echo ucwords($name) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Evaluator</b></dt>
					<dd><?php echo ucwords($ename) ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Date Evaluated</b></dt>
					<dd><?php echo date("m d,Y",strtotime($date_created)) ?></dd>
				</dl>
				<dl>
				<dt><b class="border-bottom border-primary">Remarks</b></dt>
				<dd><?php echo $remarks ?></dd>
				</dl>
			</div>
			<div class="col-md-6">
				<b>Ratings:</b>
				<dl>
					<dt><b class="border-bottom border-primary">Efficiency</b></dt>
					<dd><?php echo $efficiency ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Timeliness</b></dt>
					<dd><?php echo $timeliness ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Quality</b></dt>
					<dd><?php echo $quality ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Accuracy</b></dt>
					<dd><?php echo $accuracy ?></dd>
				</dl>
				<dl>
					<dt><b class="border-bottom border-primary">Performance Average</b></dt>
					<dd><?php echo number_format($pa,2).'%' ?></dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
	#post-field{
		max-height: 70vh;
		overflow: auto;
	}
</style>
<div class="modal-footer display p-0 m-0">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>