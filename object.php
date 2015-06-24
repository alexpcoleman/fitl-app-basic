<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'question' => '',
	'description' => '',
	'code' => '',
	'date' => '',
);

// set the object variables
// based on the id value from the URL
if ($id == 1) {
	$object = array(
		'title' => 'Programming Question #1',
		'question' => 'I\'m having trouble displaying a JavaScript alert.',
		'description' => 'I think I\'m using the correct function, but I can\'t figure out what\'s wrong. Could you point me in the right direction?',
		'code' => 'alert(This is a message)',
		'date' => 'June 11, 2015',
	);
}
elseif ($id == 2) {
	$object = array(
		'title' => 'Programming Question #2',
		'question' => 'My HTML list isn\'t displaying properly.',
		'description' => 'I think I\'m using the write list element, but it\'s not showing up correctly. Any thoughts?',
		'code' => '&lt;ul&gt;
			item 1
			item 2
			item 3
		&lt;/ul&gt;',
		'date' => 'June 16, 2015',
	);
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['question']; ?></h1>
		<p><?php echo $object['description']; ?></p>
		<pre>
			<?php echo $object['code']; ?>
		</pre>
		<p>Question Date: <?php echo $object['date']; ?></p>
	</body>
</html>