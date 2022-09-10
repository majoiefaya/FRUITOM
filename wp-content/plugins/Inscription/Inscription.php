<?php
// Plugin Name:Inscription
// Plugin URI:
// Description:Plugin pour L inscription
// Version:1.0
// Author:FAYA Lidao Majoie
// Author URI:

class StudentManager extends WP_Widget
{
    public function __construct(){
        add_action('widgets_init','declarerWidget');
        add_action( 'admin_menu', array($this,'addMenuToAdmin') );
    }

    public static function install(){
        StudentManager::install_db();
    }

    public static function uninstall(){
        StudentManager::uninstall_db();
    }

    public function install_db(){
        global $wpdb;
        $requete="CREATE TABLE IF NOT EXISTS" .$wpdb->prefix."inscription
        (
            id int not null auto_increment primary key,
            nom varchar(30) not null,
            prenom varchar(30),
            dateNaiss date,
            telephone varchar(30),
            filiere varchar(30)
        )";
        $wpdb->query($requete);
    }

    public function uninstall_db(){
        global $wpdb;
        $requete="DROP TABLE IF EXISTS".$wpdb->prefix."inscription;";
        $wpdb->query($requete);
    }

    public static function  addMenuToAdmin(){}
    add_menu_page("INSCRIPTION A IPNET","INSCRIPTION","manage_options","inscription_ipnet",$function);
    add_submenu_page("inscription_ipnet","LISTE DES DEMANDES","Liste","manage_options","liste_inscrits",$function);
}


?>
