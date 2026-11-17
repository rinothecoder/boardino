<?php
/**
 * Plugin Name: Boardino
 * Description: A simple shared board. Move cards, assign people, and discuss the work with images.
 * Version: 0.1.28
 * Plugin URI: https://github.com/rinothecoder/boardino
 * Update URI: https://github.com/rinothecoder/boardino/
 * Author: Rino de Boer
 * Requires at least: 6.4
 * Requires PHP: 8.0
 * License: GPL-2.0-or-later
 * Text Domain: boardino
 */
defined( 'ABSPATH' ) || exit;
define( 'BOARDINO_VERSION', '0.1.28' );
define( 'BOARDINO_FILE', __FILE__ );
require_once __DIR__ . '/includes/class-boardino.php';
register_activation_hook( __FILE__, array( 'Boardino', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'Boardino', 'deactivate' ) );
Boardino::boot();
require_once __DIR__ . '/includes/class-boardino-abilities.php';
Boardino_Abilities::init();

require_once __DIR__ . '/includes/class-boardino-updates.php';
Boardino_Updates::boot();

