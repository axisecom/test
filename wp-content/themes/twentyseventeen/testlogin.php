<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="wrap">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
				<?php
				/*
				Template Name: Logged-In Users Page
				*/
				?>
				<?php if ( is_user_logged_in() && wp_get_current_user()->user_login=="partneruser1" ): ?>
					<?php
					$current_user = wp_get_current_user();

					/**
					 * @example Safe usage: $current_user = wp_get_current_user();
					 * if ( !($current_user instanceof WP_User) )
					 *     return;
					 */
					echo 'Username: ' . $current_user->user_login . '<br />';
					echo 'User email: ' . $current_user->user_email . '<br />';
					echo 'User first name: ' . $current_user->user_firstname . '<br />';
					echo 'User last name: ' . $current_user->user_lastname . '<br />';
					echo 'User display name: ' . $current_user->display_name . '<br />';
					echo 'User ID: ' . $current_user->ID . '<br />';
					?>
					<?php
				else:
					wp_die( "<h2 align='center'>
		    To view this page you must first 
		    <a href='" . wp_login_url( get_permalink() ) . "' title='Login'>log in</a>
		</h2>" );
				endif;
				?>

            </main><!-- #main -->
        </div><!-- #primary -->
    </div><!-- .wrap -->

<?php get_footer();
