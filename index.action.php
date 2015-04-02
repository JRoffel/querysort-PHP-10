<?php
	//_GET query stuff
	$mode = "list";
	if(isset($_GET['mode'])):
		$mode = $_GET['mode'];
	endif;

	$sort = "name";
	if (isset($_GET['sort'])):
		$sort = $_GET['sort'];
	endif;

	if($sort == "date"):
		$sort = "date_of_birth";
	endif;

	$order = "asc";
	if(isset($_GET['order'])):
		$order = $_GET['order'];
	endif;

	$prevorder = "desc";
	if(isset($_GET['order'])):
		if($order == "asc"):
			$order = "desc";
			$prevorder = "desc";
		else:
			$order = "asc";
			$prevorder = "asc";
		endif;
	endif;


	//End of _GET settings

	//SQL connection and stuff
	$connection = new mysqli("localhost", "root", "", "people");
	$query = "select * from person order by $sort $order;";
	$result = $connection -> query($query);
	$persons = $result -> fetch_all(MYSQLI_ASSOC);