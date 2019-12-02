<head>
	<style type="text/css">
		.container{
			padding-top: 30px;

		}
		.tab{
			text-align: center;
		}

		.form{
			width: 30%;
			margin: 80px auto;
			padding: 45px 0 20px;
			display: flex;
			justify-content: center;
			background-color: #249bf0;
			border-radius: 10px;
		}
		label{
			color: #000;

		}
		td{
			padding-top: 10px;
		}
		input[type="submit"]{
			height: 40px;
			width: 80px;
			border: none;
			border-radius: 45px;
		}
		.submit{
			text-align: center;
			padding-top: 30px;
		}
		.submit input[type='submit']:hover	 {
			background: #28f;
		}

	</style>

</head>

<body>
	<div class="container">
		<div class="tab">
			<h1>LOGIN</h1>
		</div>
		<div class="form">
			<form method="POST" action="proses_login.php">
				<table>
					<tr><td>
						<label>
							Email : <br>
							<input type="email" name="email" />
						</label>
					</td></tr>
					<tr><td>
						<label>
						Password : <br>
						<input type="password" name="pass" />
						</label>
					</td></tr>
					<tr><td class="submit">
						<input type="submit" value="Login" />
					</td></tr>
				</table>
			</form>
		</div>
	</div>
</body>