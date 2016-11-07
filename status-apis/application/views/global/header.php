<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>API Status</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php if (isset($stylesheets) && !empty($stylesheets)) : foreach ($stylesheets as $_stylesheet) : ?>
		<link rel="stylesheet" href="<?php echo $_stylesheet; ?>">
	<?php endforeach; endif; ?>
	</head>

	<body>
		<div class="container">
			<header id="status-header" class="page-header row">
				<div class="col-md-12">
					<h1>API Status <small>they up?</small></h1>
				</div>
			</header>