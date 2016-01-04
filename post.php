<?php $this->need('header.php'); ?>
<div id="main">
	<div class="wrap">
		<article class="post">
			<header>
				<h1 class="post-title"><?php $this->title() ?></h1>
			</header>
			<date class="post-meta">
				<span><?php _e('Date: '); ?><?php $this->date('F j, Y'); ?></span>
				<span><?php _e('Sort: '); ?><?php $this->category(','); ?></span>
			</date>
			<div class="post-content">
				<?php $this->content(); ?>
			</div>
		</article>
		<?php $this->need('comments.php'); ?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
<?php $this->footer(); ?>
