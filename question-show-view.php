<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>
	<body>
		<h1><?php echo $object['title']; ?></h1>
		<p><?php echo $object['description']; ?></p>
		<pre>
			<?php echo $object['code']; ?>
		</pre>
		<p>Question submitted_at: <?php echo $object['submitted_at']; ?></p>
	</body>
</html>