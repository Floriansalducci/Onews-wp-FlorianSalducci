<?php

//cette fonction permet de faire pour nous l'include du fichier header.php
get_header();

?>



<?php
//The Loop
//https://developer.wordpress.org/themes/basics/the-loop/
//si on a quelque chose à afficher....
if ( have_posts() ) :
    //prépare l'affichage du post
    the_post();

    //$post est un nom de variable réservé par wordpress attention !
    ?>

    <h2 class="right__title"><?php the_title() ?></h2>
    <div class="posts">
    <article class="post post--solo">
        <?php
        //le tableau contenant toutes les catégorie de ce post
        $postCategories = get_the_category();
        //on récupère le nom de la première catégorie dans le tableau
        $category = $postCategories[0]->name;
        $categorySlug = $postCategories[0]->slug;
        ?>
        <a href="" class="post__category post__category--color-<?= $categorySlug ?>"><?= $category ?></a>
        <div class="post__meta">
            <img class="post__author-icon" src="<?= get_template_directory_uri() ?>/assets/images/icon-dar.png" alt="">
            <strong class="post__author"><?php the_author() ?></strong>
            <time datetime="<?= get_the_date("Y-m-d") ?>"><?= get_the_date() ?></time>
        </div>
        <div><?php the_content() ?></div>

        <!-- lien vers les articles précédents et suivants -->
        <div class="post__nav__links">
            <div><?php previous_post_link() ?></div>
            <div><?php next_post_link() ?></div>
        </div>

    </article>



<?php
endif;
?>

    </div>


    <div>
        <h3>More posts in this category</h3>
        <?php
        //nos clauses de requête SQL
        $args = [
            //on veut les posts de la catégorie actuelle
            'cat' => $postCategories[0]->term_id,
            //en excluant le post actuel
            'post__not_in' => [get_the_ID()]
        ];

        //on exécute la requête avec nos options définies ci-dessus
        $query = new WP_Query( $args );

        //on appelle les méthodes sur notre $query !
        if ( $query->have_posts() ) {
            echo '<ul>';
            while ( $query->have_posts() ) {
                $query->the_post();
                echo '<li>' . get_the_title() . '</li>';
            }
            echo '</ul>';
        } else {
            echo '<div>No more posts in this category!</div>';
        }
        /* Restore original Post Data */
        wp_reset_postdata();
        ?>

    </div>
<?= the_title(); ?>

<?php

//include notre fichier footer.php
get_footer();

?>