<?php

/**
 * Module: SS-yahoonews
 * Version: v2.0.5a
 * Release Date: 08.03.2005
 * (date/month/year)
 * Author: Geimas5
 * Licence: GNU
 */
$modversion['name'] = 'SS-yahoonews';
$modversion['version'] = 1.0;
$modversion['releasedate'] = 'Mon: 26 July 2004';
$modversion['description'] = '';
$modversion['author'] = 'Geimas50';
$modversion['credits'] = 'Geimas5';
$modversion['help'] = '';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/wfdl_slogo.png';
$modversion['dirname'] = 'YahooNews';
$modversion['author_credits'] = 'Geimas5';

// Admin things
$modversion['hasAdmin'] = 0;
// Menu
$modversion['hasMain'] = 1;

global $xoopsModuleConfig, $xoopsUser, $xoopsDLModule;

$i++;
$modversion['sub'][$i]['name'] = 'Top Stories';
$modversion['sub'][$i]['url'] = 'topstories.php';
$i++;
$modversion['sub'][$i]['name'] = 'World';
$modversion['sub'][$i]['url'] = 'world.php';
$i++;
$modversion['sub'][$i]['name'] = 'Business';
$modversion['sub'][$i]['url'] = 'business.php';
$i++;
$modversion['sub'][$i]['name'] = 'Technology';
$modversion['sub'][$i]['url'] = 'technology.php';
$i++;
$modversion['sub'][$i]['name'] = 'Politics';
$modversion['sub'][$i]['url'] = 'politics.php';
$i++;
$modversion['sub'][$i]['name'] = 'Sports';
$modversion['sub'][$i]['url'] = 'sports.php';
$i++;
$modversion['sub'][$i]['name'] = 'Entertainment';
$modversion['sub'][$i]['url'] = 'entertainment.php';
$i++;
$modversion['sub'][$i]['name'] = 'Health';
$modversion['sub'][$i]['url'] = 'health.php';
$i++;
$modversion['sub'][$i]['name'] = 'Oddly Enough';
$modversion['sub'][$i]['url'] = 'oddly.php';
$i++;
$modversion['sub'][$i]['name'] = 'Science';
$modversion['sub'][$i]['url'] = 'science.php';
$i++;
$modversion['sub'][$i]['name'] = 'Opinion/Editorial';
$modversion['sub'][$i]['url'] = 'opinion.php';
$i++;
$modversion['sub'][$i]['name'] = 'Most Emailed';
$modversion['sub'][$i]['url'] = 'mostemailed.php';
$i++;
$modversion['sub'][$i]['name'] = 'Highest Rated';
$modversion['sub'][$i]['url'] = 'highestrated.php';
$i++;
$modversion['sub'][$i]['name'] = 'Most Viewed';
$modversion['sub'][$i]['url'] = 'mostviewed.php';
unset($i);
// Search
$modversion['hasSearch'] = 0;
// Comments
$modversion['hasComments'] = 0;
// Comment callback functions

// Notification
$modversion['hasNotification'] = 0;
