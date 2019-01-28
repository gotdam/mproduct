<form action="main.php?mm=2" method="POST">
	<!-- form manageProduct -->
	<div class="container">
		<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">รหัสสินค้า :</label>
				<input type="text" class="form-control" id="productId">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">ชื่อสินค้า :</label>
				<input type="text" class="form-control" id="productName">
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">ราคาทุน :</label>
				<input type="text" class="form-control" id="productCost">
			</div>
		</div>
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">จำนวน :</label>
				<div class="input-group mb-3">
				  	<input type="number" class="form-control" id="productAmount" disabled="true">
				  	<div class="input-group-append">
				    	<button class="btn btn-info" type="button" data-toggle="modal" data-target="#ProductAmountModal"><i class="fa fa-plus" style="font-size:24px"></i></button> 
				  	</div>
				</div>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md">
			<div class="form-group">
				<label class="control-label">รายละเอียด :</label>
				<textarea class="form-control" rows="4" id="productDesc"></textarea>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">ราคาขาย :</label>
				<input type="text" class="form-control" id="productPrice">
			</div>
		</div>
		<div class="col-md-6">
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
	$(document).ready(function() { 
		console.log('manageProduct javascript is runing');
	});
</script>