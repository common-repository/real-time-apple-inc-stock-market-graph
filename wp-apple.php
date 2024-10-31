<?php
/*
Plugin Name:  Real time Apple,Inc. Stock Market Graph Image Sidebar Widget

Version: 1.0.1

Description: Show the Apple, Inc. real time stock ticker display graph to visitors. Google data is displayed live with little delay. Advanced customization available.

Author: David Johnston - MoneyBlogNewz

Author URI: http://wordpress.org/support/profile/personalmoneystore/

Plugin URI: create a page in the PMS store to host this widget
*/
 /*
   Copyright 2010  Director of Personal Money Store: David Johnston  (email : webmaster@personalmoneystore.com)

   The image is compiled by Google and this gadget author has no control over what is displayed or the accuracy of it.

   This program is free software; you can redistribute it and/or modify

   it under the terms of the GNU General Public License as published by

   the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

   This program is distributed in the hope that it will be useful,

   but WITHOUT ANY WARRANTY; without even the implied warranty of

   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the

  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License

  along with this program; if not, write to the Free Software

  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

   */

 global $wp_version;

	$exit_msg = 'WP Real time Apple,Inc. Stock Market Graph Sidebar Widget requires WordPress 2.6 or newer. <a href="http://codex.wordpress.org/Upgrading_WordPress">Please update!</a>';



	if (version_compare($wp_version, "2.6", "<")) {

      exit($exit_msg);

	}
            $wp_apple_plugin_url =  trailingslashit( WP_PLUGIN_URL.'/'. dirname( plugin_basename(__FILE__) ));

function WPapple_WidgetControl()
{
	// get saved options
	$options = get_option('wp-apple');
	// handle user input

	if ($_POST["apple_submit"]) {

	// retireve ppw title from the request

		$options['apple_title'] = strip_tags(stripslashes($_POST["apple_title"]));
                $options['apple_first_name'] = strip_tags(stripslashes($_POST["apple_first_name"]));
		$options['apple_second_name'] = strip_tags(stripslashes($_POST["apple_second_name"]));
                $options['apple_third_name']  = strip_tags(stripslashes($_POST["apple_third_name"]));
		$options['apple_enable_checkbox'] = strip_tags(stripslashes($_POST["apple_enable_checkbox"]));

 		// update the options to database
               update_option('wp-apple', $options);
	}
	$apple_title = $options['apple_title'];
	$apple_first_name = $options['apple_first_name'];
	$apple_second_name = $options['apple_second_name'];
        $apple_third_name  = $options['apple_third_name'];
	$apple_enable_checkbox = $options['apple_enable_checkbox'];

	// print out the widget control, links to widget control    
	include('wp-apple-widgetControl.php');
}  

function WPapple_Widget($args = array())
{      
	// extract the parameters
	extract($args);
	// get our options
	$options = get_option('wp-apple');
	$apple_title = $options['apple_title'];
	$apple_first_name = $options['apple_first_name'];
	$apple_second_name = $options['apple_second_name'];
        $apple_third_name  = $options['apple_third_name'];
	$apple_enable_checkbox = $options['apple_enable_checkbox'];

	// print the theme compatibility code

	echo $before_widget;

	echo $before_title . $apple_title. $after_title;

	// include our widget

	include('wp-apple-widget.php');

	echo $after_widget;

}

//loads from the start

function WPapple_Init(){

	// register widget

	register_sidebar_widget('  Real time Apple,Inc. Stock Market Graph Sidebar Widget', 'WPapple_Widget');

	// register widget control

	register_widget_control('  Real time Apple,Inc. Stock Market Graph Sidebar Widget', 'WPapple_WidgetControl');



}

add_action('init', 'WPapple_Init');

//links to css

add_action('wp_head', 'WPapple_HeadAction');

function WPapple_HeadAction()

{

	global $wp_apple_plugin_url;

    echo '<link rel="stylesheet" href="' . $wp_apple_plugin_url . '/wp-apple.css" type="text/css" />';



}

//links to javascript



add_action('wp_print_scripts', 'WPapple_ScriptsAction');



function WPapple_ScriptsAction()

{

	if (!is_admin()) {



	global $wp_apple_plugin_url;

	wp_enqueue_script('jquery');

	wp_enqueue_script('jquery-form');

	wp_enqueue_script('wp_apple_script', $wp_apple_plugin_url . '/wp-apple.js', array('jquery', 'jquery-form'));

	}

function my_init_method() {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js');
}    
 
add_action('init', 'my_init_method');
}?>