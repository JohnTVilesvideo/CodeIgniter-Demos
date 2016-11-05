<main id="comment-board">
	<section class="comment-form row">
		<div class="col-md-8">
		<?php if ($comment_submitted) : ?>
			<div class="alert alert-success">Your comment has been submitted successfully</div>
		<?php
			else :
				echo validation_errors('<div class="alert alert-danger">', '</div>');
		?>

			<?php echo form_open('/', array('class' => 'form-horizontal')); ?>
				<div class="form-group">
					<label for="name" class="col-sm-2 control-label">Name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" placeholder="Your full name" name="name">
					</div>
				</div>

				<div class="form-group">
					<label for="comment" class="col-sm-2 control-label">Comment</label>
					<div class="col-sm-10">
						<textarea class="form-control" id="comment" name="comment"></textarea>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Add your comment</button>
					</div>
				</div>
			</form>
		<?php endif; ?>
		</div>
	</section>

	<section class="comments row">
	<?php if ($comments) : ?>
		<div class="comment-list">
			<div class="col-md-12">
				<h2>Comments</h2>
			</div>

		<?php
			foreach ($comments as $_comment) :
				$_date = date('j F, Y', strtotime($_comment->date));
				$_time = date('g:ia', strtotime($_comment->date));
		?>
			<div class="col-md-6">
				<div class="panel panel-default comment">
					<div class="panel-heading clearfix">
						<h3 class="panel-title comment-author pull-left">Posted by <strong><?php echo $_comment->name; ?></strong></h3>
						<h6 class="panel-title comment-date pull-right">Posted on <?php echo $_date; ?> at <?php echo $_time; ?></h3>
					</div>

					<div class="panel-body comment-text">
						<?php echo $_comment->text; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	<?php else : ?>
		<div class="no-comments col-md-12">
			<h2>No comments</h2>
			<p>No one's posted a comment yet</p>
		</div>
	<?php endif; ?>
	</section>
</main>