$(document).ready(function() { 
	$('#register').hide();
	$('#manageProduct').hide();
	$('#sellProduct').show();
	$('#sendJob').hide();
	$('#report').hide();
	$('#revenue').hide();

	$('#headerText').text('ขายสินค้า');

	loadForm();
	
});

function loadForm(){
	$("#register").load("register.php"); 
	$("#manageProduct").load("manageProduct.php"); 
	$("#sellProduct").load("sellProduct.php"); 
	$("#sendJob").load("sendJob.php"); 
	$("#report").load("report.php"); 
	$("#revenue").load("revenue.php"); 
	$("#navigator").load("navigator.php");
	$("#navigator_mobile").load("navigator_mobile.php");
	$("#productAmountModal").load("productAmountModal.php");
	$("#userListModal").load("userListModal.php");

	setTimeout(function(){ setupPage() }, 200);
}

function setupPage(){
	var currentUrl = window.location.href;
	var p = currentUrl.search("mm");
	currentUrl = currentUrl.substring(p+3, p+4);
	switch (currentUrl) {
	  	case '1':
	    	swapPage('registerBtn');
	    	swapPageM('registerBtnM');
	    	break;
	  	case '2':
	     	swapPage('manageProductBtn');
	     	swapPageM('manageProductBtnM');
	    	break;
	  	case '3':
	    	swapPage('sellProductBtn');
	    	swapPageM('sellProductBtnM');
	    	break;
	  	case '4':
	    	swapPage('sendJobBtn');
	    	swapPageM('sendJobBtnM');
	    	break;
	  	case '5':
	    	swapPage('reportBtn');
	    	swapPageM('reportBtnM');
	    	break;
	  	case '6':
	    	swapPage('revenueBtn');
	    	swapPageM('revenueBtnM');
	  	default: 
			swapPage('sellProductBtn');
			swapPageM('sellProductBtnM');
	}
}

$('#datepicker').datepicker({
    uiLibrary: 'bootstrap4'
});

$('#datepicker2').datepicker({
    uiLibrary: 'bootstrap4'
});

function saveAmount() {
	/*code here*/
	$('#productAmountModal').modal('hide');
}  

$('#searchReport').click(function() {
	$('#reportContent').show();
});     

var button = {"item":['registerBtn',
				'sellProductBtn',
				'manageProductBtn',
				'sendJobBtn',
				'reportBtn',
				'revenueBtn']}

var buttonM = {"item":['registerBtnM',
				'sellProductBtnM',
				'manageProductBtnM',
				'sendJobBtnM',
				'reportBtnM',
				'revenueBtnM']}

function swapPage(pageId){
	for (i = 0; i < button.item.length; i++) {
		if(pageId == button.item[i]){
			$('#'+button.item[i]+'').addClass('active');
			$('#'+button.item[i].replace('Btn','')+'').show();
		}else{
			$('#'+button.item[i]+'').removeClass('active');
			$('#'+button.item[i].replace('Btn','')+'').hide();
		}
	}
}

function swapPageM(pageId){
	var text = "";
	for (i = 0; i < buttonM.item.length; i++) {
		if(pageId == buttonM.item[i]){
			text = $('#'+buttonM.item[i]+'').text();
			$('#'+buttonM.item[i]+'').addClass('active');
			$('#'+buttonM.item[i].replace('BtnM','')+'').show();
			$('#headerText').text(text);
		}else{
			$('#'+buttonM.item[i]+'').removeClass('active'); 
			$('#'+buttonM.item[i].replace('BtnM','')+'').hide();
		}
	}
}