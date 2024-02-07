<?php
include "functions.php";
$cases = cases($_GET['id']);
//print_r ($_GET);
echo '<div class="container">';
echo '<h2>' . $_GET['group'] . '</h2>';
if (is_array($cases)) {
	foreach ($cases as $key => $value) {
		$collapseId = 'collapseExample_' . $key; // Unique identifier for each iteration

		echo '<strong>' . $value['topic'] . '</strong><br>';
		echo '<a href="' . $value['url'] . '"  target="_blank">' . $value['url'] . '</a><br><br>';
		echo '
      <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#' . $collapseId . '" aria-expanded="false" aria-controls="' . $collapseId . '">
          Show case text
        </button>
      </p>
      <div class="collapse" id="' . $collapseId . '">
        <div class="card card-body">
          ' . $value['text'] . '
        </div>
      </div>
      <hr>';
	}
}
echo '</div>';
?>

