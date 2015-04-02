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
				<a href="index.php?mode=list&sort=<?=$sort?>"> List view </a> <br>
				<a href="index.php?mode=table&sort=<?=$sort?>"> Table view </a>
				<?php if($mode == "table"): ?>
				<table>
					<thead>
					<th><a href="index.php?mode=table&sort=name&order=<?=$order?>">Name</a></th>
					<th><a href="index.php?mode=table&sort=date&order=<?=$order?>">Date of Birth</a></th>
					</thead>
					<tbody>
					<?php foreach($persons as $person): ?>
						<tr>
							<td><?= $person['name'] ?></td>
							<td><?= $person['date_of_birth']?></td>
						</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<?php else: ?>
				<ul>
					<?php foreach($persons as $person): ?>
					<li><?= $person['name'] ?>  <?= $person['date_of_birth']?></li>
					<?php endforeach; ?>
				</ul>
				<?php 
					endif; 
					if($mode!="table"):
				?>
					<a href="index.php?mode=<?=$mode?>&sort=name"> Sort by Name </a><br>
					<a href="index.php?mode=<?=$mode?>&sort=date"> Sort by Date of Birth </a>
				<?php endif; ?>
			</div>

			<div class="footer">
				<p>This page is made by Jason (10/10 would recreate)</p>
			</div>
		</div>
	</body>
</html>