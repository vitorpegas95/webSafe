<!DOCTYPE html>
<html lang="en">
	<head>
		<title>webSAFE</title>
		<meta name="description" content="webSAFE is a Secure and Free Encryption/Decryption online service"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/webSafe.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		<script src="js/webSAFE.min.js"></script>
		
	</head>
	<body>
		<?php include "nav.php"; ?>
		
		
		<div class="container panel panel-default">
		<h1>Welcome to webSAFE!</h1>
			<div class="row panel-body">
				<div class="col-xs-3">
					<h3 class="desc">Text</h3>
				</div>
				
				<div class="col-xs-9">
					<textarea class="text" placeholder="Text to Encrypt/Decrypt" id="text"></textarea>
				</div>
			</div>
			
			<hr>
			
			<div class="row panel-body">
				<div class="col-xs-3">
					<h3 class="desc">SAFE Key</h3>
				</div>
				
				<div class="col-xs-9">
					<div class="form-group">
						<input type="text" id="safekey" class="form-control" placeholder="Key">
					</div>
				</div>
			</div>
			
			<hr>
			
			<div class="row panel-body">
				<div class="col-xs-3">
					
				</div>
				
				<div class="col-xs-9">
					<div class="form-group">
						<a href="#" class="btn btn-default" id="enc">Encrypt</a>
						<a href="#" class="btn btn-default" id="dec">Decrypt</a>
						<a href="#" class="btn btn-default" id="download">Download</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>