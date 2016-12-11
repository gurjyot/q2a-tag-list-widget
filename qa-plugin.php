<?php
/*
	Plugin Name: Tag List widget
	Plugin URI: https://github.com/svivian/q2a-tag-list-widget
	Plugin Description: Lists top tags in sidebar
	Plugin Version: 1.1.1
	Plugin Date: 2015-07-29
	Plugin Author: Scott Vivian
	Plugin Author URI: http://codelair.com
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.4
	Plugin Update Check URI: https://raw.githubusercontent.com/svivian/q2a-tag-list-widget/master/qa-plugin.php

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.gnu.org/licenses/gpl.html
*/

if (!defined('QA_VERSION')) exit;


qa_register_plugin_module('widget', 'qa-tag-list.php', 'qa_tag_list', 'Tag List');

qa_register_plugin_layer(
  'qa-tag-list-layer.php', // PHP file containing layer
  'Tag List Layer' // human-readable name of layer
);
