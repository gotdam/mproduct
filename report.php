<form action="main.php?mm=5" method="POST">	
	<!-- form report -->
	<div class="row">
		<div class="col-md-4">
				<div class="form-group">
			  <label for="sel1">ประเภทรายงาน :</label>
			  <select class="form-control" id="sel1">
			    <option>รายงานผลกำไร</option>
			    <option>รายงานสต็อกสินค้า</option>
			    <option>รายงานผลงานช่าง</option>
			  </select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="sel1">วันที่เริ่มต้น :</label>
				<input id="datepicker" width="100%" />
				</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="sel1">วันที่สิ้นสุด :</label>
				<input id="datepicker2" width="100%" />
				</div>
		</div>
		<div class="col-md-2 text-center">
			<div class="form-group" style='margin-top: 2em;'>
				<button id="searchReport" type="button" class="btn btn-info manageBtnGroup"><i class="fa fa-search"></i> Search</button>
			</div>
		</div>
	</div>
	<div id="reportContent" class="scrollable">
		<div class="container">
			<div class="table-responsive-sm">
			  <table class="table table-hover">
			  	<thead>
			      	<tr>
		    			<th style="width:5%;">ลำดับ</th>
					    <th style="width:35%;">เลขบิล</th>
					    <th style="width:20%;">รายการ</th>
					    <th style="width:20%;">จำนวน</th>
					    <th style="width:20%;">ราคา</th>
				  	</tr>
			    </thead>
			    <tbody>
			      	<tr>
			      		<td>1</td>
				        <td>11041xxx</td>
				        <td>22</td>
				        <td>14</td>
				        <td>20,000</td>
			      	</tr>
			      	<tr>
			      		<td>2</td>
				        <td>41441xxx</td>
				        <td>35</td>
				        <td>12</td>
				        <td>15,000</td>
			      	</tr>
			      	<tr>
			      		<td>3</td>
				        <td>34342xxx</td>
				        <td>53</td>
				        <td>19</td>
				        <td>34,000</td>
			      	</tr>
			      	<tr>
			      		<td>4</td>
				        <td>22161xxx</td>
				        <td>21</td>
				        <td>10</td>
				        <td>9,000</td>
			      	</tr>
			    </tbody>
			  </table>
		  	</div>
		</div>
	</div>
</form>

<script type="text/javascript"> 
	console.log('report javascript is runing');
</script>