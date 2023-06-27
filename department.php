		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" type="text/css" href="Library/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Style.css">
  <script type="text/javascript" src="Library/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Library/js/jquery-3.6.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />


















  
  <div class="modal fade" id="Department" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Adding Data </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <form method="POST" id="add" enctype="multipart/form-data">
        <div class="modal-body">
          <label>Name:</label>
          <input type="text" class="form-control" >
           <label>Email:</label>
          <input type="text" class="form-control" id="Email">
        </div>
         <label>Phone:</label>
          <input type="text" class="form-control" id="Phone">
           <label>Password:</label>
          <input type="text" class="form-control" id="Password">

          <input type="file" class="form-control" id="image">
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">submit</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
        <input type="hidden" name="action" value="adduser">
          <input type="hidden" name="userid" id="userid" value=" ">
      </div></form>
    </div>
  </div>
</div>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
				<button class="btn btn-block btn-sm btn-default btn-flat border-primary new_department" ><i class="fa fa-plus"  type="button"data-bs-toggle="modal" data-bs-target="#Department"></i> Add New</button>
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered" id="list">
				<colgroup>
					<col width="5%">
					<col width="30%">
					<col width="45%">
					<col width="20%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Department</th>
						<th>Description</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					
					<tr>
						<th class="text-center"></th>
						<td><b></b></td>
						<td><b></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='' class="btn btn-primary btn-flat manage_department">
		                          <i class="fas fa-edit"></i>
		                        </a>
		                        <button type="button" class="btn btn-danger btn-flat delete_department" data-id="">
		                          <i class="fas fa-trash"></i>
		                        </button>
	                      </div>
						</td>
					</tr>	
				
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- <script>
	$(document).ready(function(){
		$('#list').dataTable()
	
		$('.manage_department').click(function(){
			uni_modal("Manage Department","manage_department.php?id="+$(this).attr('data-id'))
		})
	$('.delete_department').click(function(){
	_conf("Are you sure to delete this Department?","delete_department",[$(this).attr('data-id')])
	})
	})
	function delete_department($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_department',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script> -->