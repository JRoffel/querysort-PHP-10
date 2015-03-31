<?php
	$connection = new mysqli("localhost", "root", "", "people");
	$query = 'select * from person';
	$result = $connection -> query($query);
	$persons = $result -> fetch_all(MYSQLI_ASSOC);