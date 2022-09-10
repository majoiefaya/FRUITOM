<?php


// Plugin Name:Mon Premier Plugin
// Plugin URI:
// Description:Mon Premier Plugin Wordpress
// Version:1.0
// Author:FAYA Lidao Majoie
// Author Uri:
function imc_erreur_login_wordpress(){
    return 'Queleque chose a mal tornée';
}
add_filter('login_errors','imc_erreur_login_wordpress');
?>