<?php
/**
 * Utility - Routes
 *
 * @copyright	Copyright 2006-2012, Miles Johnson - http://milesj.me
 * @license		http://opensource.org/licenses/mit-license.php - Licensed under the MIT License
 * @link		http://milesj.me/code/cakephp/utility
 */

Router::connect('/sitemap.xml', array('plugin' => 'utility', 'controller' => 'sitemap', 'action' => 'index', 'ext' => 'xml'));
Router::connect('/sitemap.json', array('plugin' => 'utility', 'controller' => 'sitemap', 'action' => 'index', 'ext' => 'json'));