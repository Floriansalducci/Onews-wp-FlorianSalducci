<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
		
	<?php while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
			
			<div class="entry">
				<?php the_content('Read More &raquo;'); ?>
			</div>
	
			<p class="postmetadata"><?php edit_post_link('Edit','',''); ?></p>
			<p><?php the_tags(); ?></p>
		</div>

	
	<?php endwhile; else : endif; ?>
	<a href="<?php bloginfo ('home') ?>" class="alignleft">Blog Home</a>
</div>


<?php
get_sidebar();
get_footer();
?>