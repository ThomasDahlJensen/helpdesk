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

	$sql = mysqli_query( $DbLink, "SELECT * FROM  helpdesk.cases WHERE helpdesk.cases.group_id=$id " );
	while ( $items = mysqli_fetch_assoc( $sql ) ) {

		$cases_array[] = $items;

	}
	return $cases_array;

}