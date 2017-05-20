<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork About</title>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
<?php
/**
 * @param Home Work
 *
 *
 * @author Alexsander Tkachenko
 */
require_once 'data.php';
?>
<div class="container">
	<?php require_once 'header.php';?>
	<main class="main">
			<h1><?php echo $about['title'] ?></h1>
			<p><?php echo $about['description'] ?></p>
	</main>
</div>
</body>
</html>
