<?php
/*
* Blog
*/

$args = [
	'post_type' => 'post',
	'posts_per_page' => 5,
	'order' => 'DESC',
	'orderby' => 'date',
];

$postQuery = new WP_Query($args); 

?>

<section class="posts">
	<div class="container">
    <div class="posts__title">
      <h2>Amamantas Blog</h2>
    </div>
		<ul class="posts__wrapper">
			<?php if ($postQuery->have_posts()) {
				while ($postQuery->have_posts()) { $postQuery->the_post(); ?>
					<li class="post">
						<div class="post__wrapper">
							<?php if (has_post_thumbnail()) { ?>
								<figure class="post__thumbnail">
									<?= the_post_thumbnail('medium'); ?>
								</figure>
							<?php } ?>
							<div class="post__content">
								<h2 class="post__title"><?= wp_trim_words( get_the_title(), 8, '...' ); ?></h2>
								<div class="post__excerpt">
									<?= the_excerpt(); ?>
								</div>
								<p class="post__author">Por <?= get_the_author_meta('first_name').' '.get_the_author_meta('last_name'); ?></p>
								<a class="button button--tertiary" href="<?php the_permalink(); ?>">Ver más</a>
							</div>
						</div>
					</li>
				<?php }
				} else { ?>
					<h2>No se encontraron posts.</h2>
				<?php }
				wp_reset_postdata();
			?>
		</ul>
	</div>
</section>