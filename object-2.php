<?php
$title = 'Programming Question #2';
$question = 'My HTML list isn\'t displaying properly.';
$description = 'I think I\'m using the write list element, but it\'s not showing up correctly. Any thoughts?';
$code = '&lt;ul&gt;
	item 1
	item 2
	item 3
&lt;/ul&gt;';
$date = 'June 16, 2015';
?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1><?php echo $question; ?></h1>
		<p><?php echo $description; ?></p>
		<pre>
			<?php echo $code; ?>
		</pre>
		<p>Question Date: <?php echo $date; ?></p>
	</body>
</html>