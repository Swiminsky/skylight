<?php $this->need('header.php'); ?>
<div class="col-8" id="main">
    <div class="res-cons">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?>
        </h3>
        <?php if ($this->have()): ?>
        <?php while($this->next()): ?>
            <article class="post">
                <header>
                  <h2 class="post-title">
                     <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                  </h2>
                </header>
            <date class="post-meta">
                <span><?php _e('Date: '); ?><?php $this->date('F j, Y'); ?></span>
                <span><?php _e('Sort: '); ?><?php $this->category(', '); ?></span>
            </date>
                <div class="post-content">
                <?php $this->content('Read More'); ?>
                </div>
            </article>
        <?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>
        <?php $this->pageNav('&laquo; Prev','Next &raquo;',4,'...'); ?>
    </div>
</div>
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
