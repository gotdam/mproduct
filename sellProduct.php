<form action="main.php?mm=3" method="POST" class="form-inline">
	<!-- form sellProduct -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-5">
				<div class="input-group mb-3">
		  		<input type="text" class="form-control" placeholder="Search">
		  		<div class="input-group-append">
						<button type="text" class="btn btn-info">Search</button>
					</div>
			</div>
			</div>
			<div class="col-md-4">
				<div id="amountProduct" class="form-check">
		    	<label class="form-check-label">
		    		<div class="custom-control custom-checkbox mb-3">
				      <input type="checkbox" class="custom-control-input" id="customCheck" >
				      <label class="custom-control-label" for="customCheck">เพิ่มจำนวนสินค้า</label>
				    </div>
		    	</label>
		  	</div>
			</div>
			<div class="col-md-3">
				<input type="number" class="form-control" style="width: 100%">
			</div>
		</div>
	</div>
</form>
<div id="sellProductContent" class="scrollable">
	<div class="container">
		<div class="table-responsive">
		  	<table class="table table-hover">
			  	<thead>
			      	<tr>
		    			<th ></th>
					    <th >รายการสินค้า</th>
					    <th >จำนวน</th>
					    <th ></th>
				  	</tr>
			    </thead>
			    <tbody>
			      	<tr>
			      		<td>1</td>
				        <td>มาลี</td>
				        <td><input type="number" class="form-control" value="15"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>2</td>
				        <td>สบู่ดอกบัวคู่</td>
				        <td><input type="number" class="form-control" value="5"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>3</td>
				        <td>เลย</td>
				        <td><input type="number" class="form-control" value="3"></td>
				        <td>
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>4</td>
				        <td>แป้งเด็ก</td>
				        <td><input type="number" class="form-control" value="3"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>5</td>
				        <td>โค้ก</td>
				        <td><input type="number" class="form-control" value="5"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>6</td>
				        <td>ฮานามิ</td>
				        <td><input type="number" class="form-control" value="24"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			      	<tr>
			      		<td>7</td>
				        <td>น้ำดื่มคริสตัล</td>
				        <td><input type="number" class="form-control" value="12"></td>
				        <td> 
						  <button type="button" class="btn btn-info">แก้ไข</button>
						  <button type="button" class="btn btn-info">ลบ</button>
						</td>
			      	</tr>
			    </tbody>
		  	</table>
  		</div>
	</div>
</div>

<script type="text/javascript"> 
	console.log('sellProduct javascript is runing');
</script>