<form action="main.php?mm=4" method="POST">
	<!-- form sendJob -->
	<div class="container">
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">รายการนำส่ง :</label>
				<input type="text" class="form-control" id="sendJobList">
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-md">
			<div class="form-group">
				<label class="control-label">รายละเอียด :</label>
				<textarea class="form-control" rows="5" id="sendJobDesc"></textarea>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">ราคาขาย :</label>
				<input type="number" class="form-control" id="sendJobPrice">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-12 text-center">
			<div class="form-group" style='margin-top: 2em;'>
				<button type="button" class="btn btn-info manageBtnGroup"><i class="fa fa-save"></i> พิมพ์ใบนำส่ง</button>
				<button type="button" class="btn btn-info manageBtnGroup"><i class="fa fa-edit"></i> แก้ไข</button>
			</div>
		</div>
		</div>
	</div>
</form>

<script type="text/javascript"> 
	console.log('sendJob javascript is runing');
</script>