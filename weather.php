<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--The CSS styling-->
	<style>
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body {
		height: 100vh;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		background: linear-gradient(rgb(123, 184, 104), rgb(13, 87, 10));
		font-size: 2rem;
		font-family: sans-serif;
		color: rgb(7, 9, 10);
	}
	.container {
		height: 20rem;
		width: 15rem;
		background-color: rgb(152, 228, 165);
		text-align: center;
		padding-top: 12px;
		border-radius: 16px;
		border: 2px solid rgb(14, 43, 1);
	}
	</style>
</head>
<body>
	<div class="container">
	<div class="icon">---</div>
	<div class="temp">-°C</div>
	<div class="summary">----</div>
	<div class="location"></div>
	</div>
	<!--Linking the javascript code-->
	<script src="script.js"></script>
</body>
</html>
