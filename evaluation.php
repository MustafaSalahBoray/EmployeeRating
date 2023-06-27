<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
			<div class="card-tools">
				<a class="btn btn-block btn-sm btn-default btn-flat border-primary" href="./index.php?page=new_evaluation"><i class="fa fa-plus"></i> Add New Evaluation</a>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Task</th>
						<th>Name</th>

						<th>Evaluator</th>
						<th width="15%">Performance Average</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<th class="text-center"></th>
						<td><b></b></td>
						<td><b></b></td>

						<td><b></b></td>

						<td><b></b></td>
						<td class="text-center">
							<button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								Action
							</button>
							<div class="dropdown-menu" style="">
								<a class="dropdown-item view_evaluation" href="javascript:void(0)" data-id="">View</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="./index.php?page=edit_evaluation&id=">Edit</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item delete_evaluation" href="javascript:void(0)" data-id="">Delete</a>
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('#list').dataTable()
		$('.view_evaluation').click(function() {
			uni_modal("Evaluation Details", "view_evaluation.php?id=" + $(this).attr('data-id'), 'mid-large')
		})
		$('.delete_evaluation').click(function() {
			_conf("Are you sure to delete this evaluation?", "delete_evaluation", [$(this).attr('data-id')])
		})
	})

	function delete_evaluation($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_evaluation',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>