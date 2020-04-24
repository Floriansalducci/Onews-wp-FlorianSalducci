<?php 

//cette fonction permet de faire pour nous l'include du fichier header.php 
get_header(); 

?>


        <!-- emmet: h2+article*6>a+h3+div(img+strong+time)+p+a -->
        <h2 class="right__title">Latest News</h2>
        <div class="posts">

        <?php 
        //The Loop
        //https://developer.wordpress.org/themes/basics/the-loop/
        //si on a quelque chose à afficher.... 
        if ( have_posts() ) : 
            //parcourt ce qu'on a afficher 
            //tant qu'il en reste, on continue ! 
            while ( have_posts() ) : 
              //prépare l'affichage du post
              the_post(); 
              
              //$post est un nom de variable réservé par wordpress attention !
        ?>
          <article class="post">
            <?php 
              //le tableau contenant toutes les catégorie de ce post
              $postCategories = get_the_category();
              //on récupère le nom de la première catégorie dans le tableau 
              $category = $postCategories[0]->name;
              $categorySlug = $postCategories[0]->slug;
            ?>
            <a href="" class="post__category post__category--color-<?= $categorySlug ?>"><?= $category ?></a>
            <h3><?php the_title() ?></h3>
            <div class="post__meta">
              <img class="post__author-icon" src="<?= get_template_directory_uri() ?>/assets/images/icon-dar.png" alt="">
              <strong class="post__author"><?php the_author() ?></strong>
              <time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time>
            </div>
            <p><?php the_excerpt() ?></p>
            <a href="<?= the_permalink() ?>" class="post__link">Continue reading</a>
          </article>
          
        <?php
            //ferme The Loop
            endwhile; 
        endif; 
        ?>

        </div>

<?php 

    //include notre fichier footer.php
    get_footer();

?>