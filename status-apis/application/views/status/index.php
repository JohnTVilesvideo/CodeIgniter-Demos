<main id="status">
	<section class="status-blocks row">
	<?php
		if ($statuses) :
			foreach ($statuses as $_status) :
				if ($_status['code'] >= 400) {
					$card_status = 'warning';
					$icon_status = 'question';
				} elseif ($_status['code'] >= 200) {
					$card_status = 'success';
					$icon_status = 'check';
				} else {
					$card_status = 'danger';
					$icon_status = 'times';
				}
	?>
		<div class="col-md-4">
			<div class="status-block card card-<?php echo $card_status; ?> text-xs-center card-inverse">
				<div class="card-block">
					<h5 class="card-title">
						<?php echo $_status['name']; ?>
						<small>(<?php echo $_status['code']; ?>)</small>
					</h5>

					<span class="status-icon fa fa-<?php echo $icon_status; ?>-circle-o"></span>
				</div>
			</div>
		</div>
	<?php endforeach; endif; ?>
	</section>
</main>