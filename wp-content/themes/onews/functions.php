<?php 


//appelée pour mettre en place des setups de notre thème
function onews_setup(){
    //on demande à wp de gérer l'affichage de la balise title à notre place ! 
    add_theme_support('title-tag');

    //active les menus
    add_theme_support('menus');

    //définit quels sont nos emplacements de menus
    register_nav_menus([
        'footer' => 'Menu de liens dans le footer'
    ]);
}
//demande d'appeler ma fonction à ce moment précis
add_action('after_setup_theme', 'onews_setup');


//cette fonction sera appelée lors du hook enqueue_scripts, tel que demandée plus bas
//ceci nous sert à dyniquement ajouter des css à notre head, à la sauce
function onews_scripts(){
    //chacun des appels à enqueue_style ajoute un css au head
    //le 3e argument indique quels css doivent D'ABORD être chargés
    wp_enqueue_style('main-css', get_theme_file_uri('assets/css/style.css'), ['reset-css']);
    wp_enqueue_style('reset-css', get_theme_file_uri('assets/css/reset.css'));
}

//demande d'appeler notre fonction onews_scripts() lorsque Wordpress passe par cet événement dans son code
add_action('wp_enqueue_scripts', 'onews_scripts');




//fait le ménage du head
//enlève la meta generator du head
remove_action('wp_head', 'wp_generator');