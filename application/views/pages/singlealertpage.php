<!DOCTYPE html>
<html>
<head>
	<title>Please wait...</title>
	<meta http-equiv="refresh" content="5;url=<?php echo $redirect_page; ?>" />
	<style type="text/css">
		body, h3, div, p {
			padding: 0;
			margin: 0;
			font-family: monospace;
			color: #444;
		}
		div	{
			width: 400px;
			margin: 0 auto;
			background: #fff;
			border: 1px #999 solid;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			-o-border-radius: 5px;
			-ms-border-radius: 5px;
			margin-top: 50px;
		}

		h3 {
			background: #e2e2e2;
			border-bottom: 1px #999 solid;
			padding: 10px 10px;
		}

		p {
			padding: 10px 10px;
		}

		a {
			text-decoration: none;
			color: #999;
		}

		a:hover {
			color: #444;
		}
	</style>
</head>
<body>
	<div>
		<h3>Thank you..</h3>
		<p><?php echo $message ?></p>
		<p>We are now redirecting you.<br>or click the link for <a href="<?php echo $redirect_page; ?>">home page</a></p>
	</div>
</body>
</html>