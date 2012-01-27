<?php
/*
Plugin Name: Multinet 4SQ
Plugin URI: http://multinet.cl
Description: Permite obtener datos desde una venue en Foursquare.
Author: Álex Acuña Viera (@kyuumeitai)
Version: 0.1
Author URI: http://blog.alex.acunaviera.com

**************************************************************************

Copyright (C) 2011 Álex Acuña Viera

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/

function m4sq_install(){
	# setup
	add_option('m4sq-api-key', '');
	add_option('m4sq-api-secret', '');	
	add_option('m4sq-venue', '');	
	}

function m4sq_uninstall() {
	delete_option('m4sq-api-key', '');
	delete_option('m4sq-api-secret', '');	
	delete_option('m4sq-venue', '');	
	}

# hooks
register_activation_hook( __FILE__, 'm4sq_install');
register_deactivation_hook( __FILE__, 'm4sq_uninstall');

add_action('admin_menu', 'm4sq_menu');

function m4sq_menu() {
# http://codex.wordpress.org/Function_Reference/add_management_page
	add_management_page('Multinet 4SQ', 'Multinet 4SQ', '10', __FILE__, 'm4sq_options');
	}

function m4sq_options() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	include "includes/options.php";
}

include "includes/functions.php";

?>