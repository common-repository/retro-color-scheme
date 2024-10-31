<?php

/**
*@package retro
*/

/*
Copyright (C) 2021  Aadil

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software

*Plugin Name: Retro Color Scheme
Author: Aadil Umar
Description: A simple plugin which gives you access to the Retro admin color scheme.
Version: 1.0.0
Requires at least: 3.0
Requires PHP: 7.0
Stable tag: 5.6
Tested up to: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/
defined('ABSPATH') or die('Can\t access');

if(!function_exists('add_action'))
{
	die;
}

function retro_plugin_color_activate() {
	// generated a CPT
	$this->ChangeColors();
	// flush rewrite rules
	flush_rewrite_rules();
}

function retro_plugin_color_deactivate() {
	// flush rewrite rules
	flush_rewrite_rules();
}

function retro_plugin_color_uninstall() {
	// delete CPT
	// delete all the plugin data from the DB
}

function retro_plugin_changecolors() {
	wp_admin_css_color('newcolor', __('Retro'),
	plugins_url('/output1.css', __FILE__),
	array('#f14668', '#ffd880', '#6b011f', '#290149'),
	array(
		'base'    => '#03ecfc',
		'focus'   => '#fff',
		'current' => '#fff',
	));

}

add_action('init', 'retro_plugin_changecolors');

//register_activation_hook(__File__, array($test1, 'activate'));

//register_deactivation_hook(__File__, array($test1, 'deactivate'));