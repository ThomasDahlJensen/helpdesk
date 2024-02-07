<?php
include "functions.php";

//print_r (group_list());

echo "<h3>HelpDesk support site</h3>";

foreach ( group_list() as $key => $value ) {

	//echo '<a href="eksempler.php?id=' . $value['id'] . '" >' . $value['name'] . '</a><br>';
	echo '<a href="index.php?id=' . $value['id'] . '" >' . $value['name'] . '</a><br>';

}
echo "<hr>";
echo '<iframe src="eksempler.php?id=' . $_GET['id'] . '" height="800" width="1600" title="Iframe Example"></iframe>';
