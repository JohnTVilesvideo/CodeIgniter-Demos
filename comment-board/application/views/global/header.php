<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Comment Board</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if (isset($stylesheets) && !empty($stylesheets)) : foreach ($stylesheets as $_stylesheet) : ?>
		<link rel="stylesheet" href="<?php echo $_stylesheet; ?>">
	<?php endforeach; endif; ?>
	</head>

	<body>
		<div class="container">
			<header id="board-header" class="page-header row">
				<div class="col-md-12">
					<h1>Comment Board <small>write a comment below</small></h1>
				</div>
			</header>