<?php require'index.action.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Querysort</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="master">
			<div class="content">
				<h1>Personen</h1>
				<?php foreach($persons as $person):?>
				<p><?= $person['id']?>  <?= $person['name'] ?>  <?= $person['date_of_birth']?> </p>
				<?php endforeach; ?>
			</div>

			<div class="footer">
				<p>This page is made by Jason (10/10 would recreate)</p>
			</div>
		</div>
	</body>
</html>