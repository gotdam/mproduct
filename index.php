<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	    
	    <script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>

		<link href="css/style.css" rel="stylesheet" type="text/css" />

	</head>
	<body class='login'>
		<div class='container'>
			<div class='col-xs-12'>
				<div class='logo'>
			
				</div>
			<div class="content" id="login-box">
				<!-- BEGIN LOGIN FORM -->
	            <form id="frmLogin" class="login-form" action="main.php" method="POST" novalidate="novalidate">
	                <h3 class="form-title font-green"><i class='fas fa-dumpster' style='font-size:30px;color:#ff8095'></i> M-PRODUCT</h3>
	                <div class="form-group">
	                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
	                    <label class="control-label visible-ie8 visible-ie9">Username</label>
	                    <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" id="userName"> </div>
	                <div class="form-group">
	                    <label class="control-label visible-ie8 visible-ie9">Password</label>
	                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="userPass"> </div>
	                <div class="form-actions">
	                    <button type="submit" class="btn btn-info uppercase">Login</button>
	                    <input type="hidden" name="cmd" value="getLogin">
	                </div>
	            </form>
	            <!-- END LOGIN FORM -->
	            
	            <div class="copyright"> Dong Corporation </div>
	            
	        </div> 
	        </div>
       </div>
	</body>
</html>

<script type="text/javascript">
</script>

