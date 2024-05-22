<?php
// testing github clone
include "functions.php";

//print_r (group_list());

echo "<h3>HelpDesk support site</h3>";

foreach ( group_list() as $key => $value ) {

	echo '<a href="index.php?id=' . $value['id'] . '&group=' . $value['name'] . '" class="btn btn-success">' . $value['name'] . '</a> ';

}
echo "<hr>";
echo '<iframe src="eksempler.php?id=' . $_GET['id'] . '&group=' . $_GET['group'] . '" height="100%" width="100%" title="" frameBorder="0"></iframe>';
