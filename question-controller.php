<?php

$page = $_REQUEST['page'];


// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: ' . $connection->connect_error;
	exit;
}

// Otherwise, connected successfully!
// echo 'Connected successfully!';

// Connect to the "fitl" database
$connection->select_db('fitl');


// Determine what page to show
if ($page == 'show') {
	$id = $_REQUEST['id'];
  	show($id);
}
elseif ($page == 'create') {
	create();
}

// Load the show page
function show($id) {
	global $connection;

	$object = array(
		'title' => '',
		'description' => '',
		'code' => '',
		'submitted_at' => '',
	);

	// Query to select the object
	// SELECT * FROM questions WHERE id = 1
	$sql = 'SELECT * FROM questions WHERE id = ' . $id;

	// Execute the query
	$result = $connection->query($sql);

	// Check for and retrieve the object
	if ($result->num_rows > 0) {
		$object = $result->fetch_assoc();
		// echo '<pre>';
		// print_r($object);
		// echo '</pre>';
	}

	// Load the view file
	include 'question-show-view.php';
}

// Load the create page
function create() {
	include 'question-create-view.php';
}

?>