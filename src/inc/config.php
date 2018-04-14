<?php
/**
 * config.php
 *
 * Author: pixelcave
 *
 * Global configuration file
 *
 */

// Include Template class
require 'classes/Template.php';
require 'router/string.php';

if(basename($_SERVER['PHP_SELF']) != 'locked.php'){
    $_SESSION['page']   = basename($_SERVER['PHP_SELF']);
}
if(basename($_SERVER['PHP_SELF']) != 'login.php'){
    if(!isset($_SESSION['connect']) && $_SESSION['connect'] != '1'){
        header('Location: login.php');
    }
    $data__info = $site->bdd->query('SELECT * FROM utilisateurs WHERE email = "'.$site->security($_SESSION['email']).'"');
    $data__info = $data__info->fetch();
}
if(basename($_SERVER['PHP_SELF']) == 'login.php'){
    if(array_key_exists('email', $_SESSION)){
        if(isset($_SESSION['connect']) || $_SESSION['connect'] == '1'){
            header('Location: index.php');
        }
    }
}

// Create a new Template Object
$one                               = new Template('ES-PC', '1.0', 'assets'); // Name, version and assets folder's name

// Global Meta Data
$one->author                       = 'ES-PC Informatique';
$one->robots                       = 'noindex, nofollow';
$one->title                        = 'ES-PC Gestion';
$one->description                  = 'ES-PC Gestion | Devenez maitre du votre site internet, facilement !';

// Global Included Files (eg useful for adding different sidebars or headers per page)
$one->inc_side_overlay             = 'base_side_overlay.php';
$one->inc_sidebar                  = 'base_sidebar.php';
$one->inc_header                   = 'base_header.php';

// Global Color Theme
$one->theme                        = 'modern';       // '' for default theme or 'amethyst', 'city', 'flat', 'modern', 'smooth'

// Global Cookies
$one->cookies                      = false;    // True: Remembers active color theme between pages (when set through color theme list), False: Disables cookies

// Global Body Background Image
$one->body_bg                      = '';       // eg 'assets/img/photos/photo10@2x.jpg' Useful for login/lockscreen pages

// Global Header Options
$one->l_header_fixed               = true;     // True: Fixed Header, False: Static Header

// Global Sidebar Options
$one->l_sidebar_position           = 'left';   // 'left': Left Sidebar and right Side Overlay, 'right': Flipped position
$one->l_sidebar_mini               = false;    // True: Mini Sidebar Mode (> 991px), False: Disable mini mode
$one->l_sidebar_visible_desktop    = true;     // True: Visible Sidebar (> 991px), False: Hidden Sidebar (> 991px)
$one->l_sidebar_visible_mobile     = false;    // True: Visible Sidebar (< 992px), False: Hidden Sidebar (< 992px)

// Global Side Overlay Options
$one->l_side_overlay_hoverable     = false;    // True: Side Overlay hover mode (> 991px), False: Disable hover mode
$one->l_side_overlay_visible       = false;    // True: Visible Side Overlay, False: Hidden Side Overlay

// Global Sidebar and Side Overlay Custom Scrolling
$one->l_side_scroll                = true;     // True: Enable custom scrolling (> 991px), False: Disable it (native scrolling)

// Global Active Page (it will get compared with the url of each menu link to make the link active and set up main menu accordingly)
$one->main_nav_active              = basename($_SERVER['PHP_SELF']);

// Google Maps API Key (you will have to obtain a Google Maps API key to use Google Maps, for more info please have a look at https://developers.google.com/maps/documentation/javascript/get-api-key#key)
$one->google_maps_api_key          = '';

// Global Main Menu
$one->main_nav                     = array(
    array(
        'name'  => '<span class="sidebar-mini-hide">Dashboard</span>',
        'icon'  => 'si si-home',
        'url'   => 'index.php'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Les Projets</span>',
        'type'  => 'heading'
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Gestion de Projet</span>',
        'icon'  => 'si si-list',
        'sub'   => array(
            array(
                'name'  => 'Crée un Projet',
                'url'   => 'create_project.php'
            ),
            array(
                'name'  => 'Gerer les projets',
                'url'   => 'project.php'
            ),
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Clients</span>',
        'icon'  => 'si si-users',
        'sub'   => array(
            array(
                'name'  => 'Crée un client',
                'url'   => 'base_tables_styles.php'
            ),
            array(
                'name'  => 'Gerer les clients',
                'url'   => 'base_tables_responsive.php'
            ),
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Facture</span>',
        'icon'  => 'si si-note',
        'sub'   => array(
            array(
                'name'  => 'Crée une facture',
                'url'   => 'base_forms_premade.php'
            ),
            array(
                'name'  => 'Gerer vos factures',
                'url'   => 'base_forms_elements.php'
            ),
        )
    ),
    array(
        'name'  => '<span class="sidebar-mini-hide">Utilisateur(s)</span>',
        'icon'  => 'si si-plus',
        'sub'   => array(
            array(
                'name'  => 'Gerer les utilisateurs',
                'url'   => 'users.php'
            ),
        )
    ),
);
