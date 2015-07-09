<?php

/**
 * Copyright (C) 2015 FeatherBB
 * based on code by (C) 2008-2012 FluxBB
 * and Rickard Andersson (C) 2002-2008 PunBB
 * License: http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 */
 

// Load Slim Framework
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

// Instantiate Slim
$feather = new \Slim\Slim();

// Load FeatherBB
define('FEATHER_ROOT', dirname(__FILE__).'/');
require FEATHER_ROOT.'include/common.php';

// Load the routes
require FEATHER_ROOT.'include/routes.php';

// Specify where to load the views
$feather->config('templates.path', get_path_view());

$feather->config('debug', true); // As long as we're developing FeatherBB

// Run it, baby!
$feather->run();
