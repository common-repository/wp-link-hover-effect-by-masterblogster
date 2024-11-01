<?php

/*
Plugin Name: WP Link Hover Effect By MasterBlogster
Plugin URI: http://masterblogster.com/plugins/wordpress-link-hover-effect
Description: This plugin adds hover effect for links in the wordpress post page. Hover the link to see the effect. Check demo on http://masterblogster.com
Author: Shrinivas Naik
Version: 1.0
Author URI: http://www.masterblogster.com
*/

/* --------------------------------------------------------------------------------------------------------------------*/
/*  Main plugin code */
function mb_link_hover_effect_code()
{?>
    <style>
	article a::before,
	article a::after {
		display: inline-block;
		opacity: 0;
		-webkit-transition: -webkit-transform 0.3s, opacity .2s;
		-moz-transition: -moz-transform 0.3s, opacity .2s;
		transition: transform 0.3s, opacity .2s;
	}

	article a::before {
		content: '[';
		font-weight: bolder;
		-webkit-transform: translateX(20px);
		-moz-transform: translateX(20px);
		transform: translateX(20px);
	}

	article a::after {
		content: ']';
		font-weight: bolder;
		-webkit-transform: translateX(-20px);
		-moz-transform: translateX(-20px);
		transform: translateX(-20px);
	}

	article a:hover::before,
	article a:hover::after,
	article a:focus::before,
	article a:focus::after {
		opacity: 1;
		-webkit-transform: translateX(0px);
		-moz-transform: translateX(0px);
		transform: translateX(0px);
	}
    </style>

    <?php
} //function ended
add_action('wp_head','mb_link_hover_effect_code');

?>