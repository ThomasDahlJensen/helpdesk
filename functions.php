<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php
include( dirname( __FILE__ ) . "/../../../include/db_mysqli.php" );
$DbLink = db('helpdesk');

function group_list() {
	global $DbLink;

	$sql = mysqli_query( $DbLink, "SELECT * FROM  helpdesk.grupper " );
	while ( $items = mysqli_fetch_assoc( $sql ) ) {

		$group_array[] = $items;

	}
	return $group_array;

}

function cases($id = NULL) {
	global $DbLink;

	$sql = mysqli_query( $DbLink, "SELECT * FROM  helpdesk.cases WHERE helpdesk.cases.group_id=$id ");
	while ( $items = mysqli_fetch_assoc( $sql ) ) {

		$cases_array[] = $items;

	}
	if (isset($cases_array)){
	return $cases_array;
	}
	else {return "ingen support sager på id $id";}

}