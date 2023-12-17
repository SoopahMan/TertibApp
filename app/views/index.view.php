<!DOCTYPE html>
<html>
<head>
	<title>Learn | PHP</title>
	<style>
		html {
			font-family: Lato;
		}

		header {
			padding: 2em;
			background-color: #e3e3e3;
			text-align: center;
		}

		input[type="text"] {
			border: 1px solid #5AB0F3;
			border-radius: 5px;
			height: 30px;
		}

		input[type="text"]:focus {
			border-radius: 5px;
		}

		.btn {
			border: 1px solid #e65100;
			border-radius: 0px;
			font-size: 30px;
			background-color: #ffffff;
			cursor: pointer;
			color: #e65100;
			font-family: Lato, Helvetica;
		}

		.btn:hover {
			background-color: #e65100;
			color: white;
		}
	</style>
</head>

<body>
	<h1>Welcome to TAMPOL</h1>
	<a href="<?= App::get('root_uri') . "/auth/login" ?>" title="login">LOGIN</a>
</body>

</html>