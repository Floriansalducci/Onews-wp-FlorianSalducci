<?php get_header(); ?>

<div id="content">
<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<p class="meta">Posted  by <?php the_author() ?> - <?php the_time('F jS, Y') ?></p>
			
			<div class="entry">
				<?php the_content('Read More &raquo;'); ?>
			</div>
	
			<p class="postmetadata">Posted in <?php the_category(', ') ?> - <?php edit_post_link('Edit','',' - '); ?><?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
<p><?php the_tags(); ?></p>
		</div>

	<?php endwhile; ?>

		<p align="center"><?php next_posts_link('&laquo; Previous Entries') ?> &nbsp; <?php previous_posts_link('Next Entries &raquo;') ?></p>

	<?php else : ?>
		<h2 align="center">Not Found</h2>
		<p align="center">Sorry, but you are looking for something that isn't here.</p>
<?php endif; ?>
</div>


<?php
get_sidebar();
get_footer();
?>