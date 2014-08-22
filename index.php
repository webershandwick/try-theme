<div class="row">
	<?php get_template_part('partials/carousel'); ?>
</div>
<div class="row">
	<section id="primary" class="primary col-sm-8" >
		<ol class="post-list">
			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

				<li class="post formatted" id="post-<?php the_ID(); ?>">
					<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="byline">Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php the_category(', '); ?> | <?php comments_number(); ?></p>
					<?php the_excerpt(); ?>
				</li>

			<?php endwhile; else : ?>

				<li class="post">
					<h2>Posts Not Found</h2>
					<p>No posts were found that match your criteria.</p>
				</li>

			<?php endif; ?>
		</ol>

		<div class="post-nav">
			<div class="prev"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="next"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
	</section>

	<?php try_get_sidebar(); ?>
</div>