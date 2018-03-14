<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>To do</title>
</head>
<body>
	<div class="list">
		<h1 class="header">To do.</h1>
		<ul class="items">
			<li>
				<span class="item">Pick up shopping</span>
				<a href="#" class="done-button">Mark as done</a>
			</li>
			<li>
				<span class="item done">Learn php</span>
			</li>
		</ul>

		<form action="add.php" method="post">
			<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" required>
			<input type="submit" value="Add" class="submit">
		</form>
	</div>
</body>
</html>