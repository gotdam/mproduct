<form action="main.php?mm=1" method="POST">	
	<!-- form register -->
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">รหัสพนักงาน :</label>
				<div class="input-group mb-3">
					<input type="text" class="form-control" id="employeeId">
				  	<div class="input-group-append">
				    	<button class="btn btn-info" type="button"><i class="fa fa-search" style="font-size:24px"></i></button> 
				  	</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 text-right">
			<div class="form-group" style='margin-top: 2em;'>
				<button type="button" class="btn btn-info manageBtnGroup" data-toggle="modal" data-target="#userListModal"><i class="fa fa-users" style="font-size:24px"></i></button>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md">
			<div class="form-group">
				<label class="control-label">ชื่อ-นามสกุล :</label>
				<input type="text" class="form-control" id="employeeName">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group" style='margin-top: 3em;'>
				<label class="control-label" style='margin-right: 1em;'>เพศ :</label>
				<div class="form-check-inline">
				  	<label class="form-check-label">
				    	<input type="radio" class="form-check-input">ชาย
				  	</label>
				</div>
				<div class="form-check-inline">
				  	<label class="form-check-label">
				    	<input type="radio" class="form-check-input">หญิง
				  	</label>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">ที่อยู่ :</label>
				<input type="text" class="form-control" id="employeeAddress">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">รหัสสาขา :</label>
				<input type="text" class="form-control" id="employeeBranch">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">User :</label>
				<input type="text" class="form-control" id="employeeUsername">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">Password :</label>
				<input type="text" class="form-control" id="employeePassword">
			</div>
		</div>
		<div class="col-md-6 text-left">
			<div class="form-group" style='margin: 2em 12px;'>
				<div class="row">
					<button type="submit" class="btn btn-info manageBtnGroup"><i class="fa fa-save"></i> บันทึก</button>
					<button type="button" class="btn btn-info manageBtnGroup"><i class="fa fa-edit"></i> แก้ไข</button>
					<button type="button" class="btn btn-info manageBtnGroup"><i class="fa fa-trash"></i> ลบ</button>
				</div>
			</div>
		</div>
		</div>
	</div>
</form>

<script type="text/javascript"> 
	console.log('register javascript is runing');
</script>