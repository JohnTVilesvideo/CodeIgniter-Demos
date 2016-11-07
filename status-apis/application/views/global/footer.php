		<footer id="status-footer">
			<div class="row">
				<div class="col-md-6">
					<p class="creator pull-right">
						<small>made by <a href="http://vyygir.me">vyygir</a>.</small>
					</p>
				</div>

				<div class="col-md-6">
					<p class="thanks pull-left">
						<small>thanks to codeigniter.</small>
					</p>
				</div>
			</div>
		</footer>
	</div>

	<?php if (isset($scripts) && !empty($scripts)) : foreach ($scripts as $_script) : ?>
		<script src="<?php echo $_script; ?>"></script>
	<?php endforeach; endif; ?>
	</body>
</html>