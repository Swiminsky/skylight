<?php
 $this->need('header.php');
 ?>
<div id="main">
	<div class="wrap">
		<?php while($this->next()): ?>
			<article class="post">
				<header>
					<h2 class="post-title">
						<a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
					</h2>
				</header>
				<date class="post-meta">
					<span><?php _e('Date: '); ?><?php $this->date('F j, Y'); ?></span>
					<span><?php _e('Sort: '); ?><?php $this->category(','); ?></span>
				</date>
				<div class="post-content">
					<?php $this->content('Read More &raquo;'); ?>
				</div>
				<div class="post-tag">
					<?php $this->tags(''); ?>
				</div>
				<div class="post-sub"></div>
			</article>
		<?php endwhile; ?>
		<?php $this->pageNav('&laquo;','&raquo;',2,'...');?>
	</div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
