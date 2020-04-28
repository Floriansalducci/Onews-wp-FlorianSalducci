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
        <div><?php the_content() ?></div>
    </article>

<?php
endif;
?>

    </div>

<?php

//include notre fichier footer.php
get_footer();

?>