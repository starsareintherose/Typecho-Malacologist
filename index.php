<?php

/**
 * Wonderful Academic Theme.
 *
 * @package Malacology
 * @author starsareintherose
 * @version 1.0
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php $this->need('component/header.php'); ?>

<div id="main" class="main" role="main">
	<div class="main-inner clearfix">
		<div class="content-wrap">
			<section id="posts">
				<?php while ($this->next()) : ?>
					<?php $this->need('component/post-card.php'); ?>
				<?php endwhile; ?>
			</section>
			<?php $this->pageNav('<i class="iconfont icon-prev-m" aria-label="prev"></i>', '<i class="iconfont icon-next-m" aria-label="next"></i>', '2', '...'); ?>
		</div>
		<?php if (isPc()) $this->need('component/sidebar.php'); ?>
	</div>
</div>

<?php $this->need('component/footer.php'); ?>