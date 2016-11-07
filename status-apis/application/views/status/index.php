<main id="status">
	<section class="status-blocks row">
	<?php if ($statuses) : foreach ($statuses as $_status) : ?>
		<div class="col-md-4">
			<div class="status-block card card-<?php echo $_status['code'] ? 'success' : 'danger'; ?> text-xs-center card-inverse">
				<div class="card-block">
					<h5 class="card-title">
						<?php echo $_status['name']; ?>
						<small>(<?php echo $_status['code']; ?>)</small>
					</h5>

					<span class="status-icon fa fa-<?php echo $_status['code'] ? 'check' : 'times'; ?>-circle-o"></span>
				</div>
			</div>
		</div>
	<?php endforeach; endif; ?>
	</section>
</main>