<div id="left">
	<ul>
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
    <!--  START SEARCH  -->
    <li id="search"><h2><?php _e('Search:'); ?></h2>
      <ul>
        <li>
          <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <div>
            <input type="text" name="s" id="s" size="15" alt="enter search text" /> 
            <input type="submit" value="Go" />
          </div>
          </form>
        </li>
      </ul>
    </li>
    <!--  END SEARCH  -->
	
    
	<!--  START PAGES LIST  -->
    <?php wp_list_pages('title_li=<h2>Pages</h2>'); ?>
    <!--  END PAGES LIST  -->
    
    <!--  START CATEGORIES  -->
    <li id="categories"><h2><?php _e(' Blog Categories:'); ?></h2>
      <ul>
        <?php wp_list_cats(); ?>
      </ul>
    </li>
    <!--  END CATEGORIES  -->
    
		
		
		<?php if (function_exists('get_recent_comments')) { ?>
		<!--  START RECENT COMMENTS  -->
		<li><h2>Recent Comments</h2>
			<ul>
				<?php get_recent_comments(); ?>
			</ul>
		</li>
		<!--  END RECENT COMMENTS  -->
		<?php } ?>
    
    
    
    <!--  START ARCHIVES  -->
    <li id="archives"><h2><?php _e('Blog Archives:'); ?></h2>
      <ul>
        <?php wp_get_archives('type=monthly'); ?>
      </ul>
    </li>
    <!--  END ARCHIVES  -->
    
    <!--  START META  -->
    <li id="meta"><h2><?php _e('Meta:'); ?></h2>
      <ul>
        <?php wp_register(); ?>
        <li><?php wp_loginout(); ?></li>
        <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('<abbr title="Really Simple Syndication">Entries RSS</abbr>'); ?></a></li>
        <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
        <?php wp_meta(); /* do not remove this line */ ?>
      </ul>
    </li>
<!--  START LINKS LIST  -->
    <?php get_links_list(); ?>
    <!--  END LINKS LIST  -->
	<?php endif; ?>
</ul>
</div>
