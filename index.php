<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Spalah HomeWork</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php
/**
 * @param call function call_to_dir
 *
 *
 * @author Alexsander Tkachenko
 */
include_once ('function.php');
?>
<div class="container">
	<table>
		<?php
		foreach (call_to_dir() as $key => $item):?>
			<tr>
				<td>
					<?php echo $key ?>
				</td>
				<td>
					<?php echo $item ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
</body>
</html>
