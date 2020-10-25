<?php

 /**
  * Module: SS-yahoonews
  * Version: v2.0.5a
  * Release Date: 08.03.2005
  * (date/month/year)
  * Author: Geimas5
  * Licence: GNU
  */
 require __DIR__ . '/header.php';
require_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

global $xoopsModuleConfig, $xoopsModule, $xoopsUser;

require XOOPS_ROOT_PATH . '/header.php';

require_once('includes/rss_fetch.inc');

echo '<p><font class=title>News</font></p>
<ul>
<li><a href=topstories.php>Top Stories</a></li>
<li><a href=world.php>World</a></li>
<li><a href=business.php>Business</a></li>
<li><a href=technology.php>Technology</a></li>
<li><a href=politics.php>Politics</a></li>
<li><a href=sports.php>Sports</a></li>
<li><a href=entertainment.php>Entertainment</a></li>
<li><a href=health.php>Health</a></li>
<li><a href=oddly.php>Oddly Enough</a></li>
<li><a href=science.php>Science</a></li>
<li><a href=opinion.php>Opinion/Editorial</a></li>
<li><a href=mostemailed.php>Most Emailed</a></li>
<li><a href=highestrated.php>Highest Rated</a></li>
<li><a href=mostviewed.php>Most Viewed</a></li>';
// !!!DO NOT REMOVE THE COPYRIGHT LINE!!!
echo '<center>version 1.0 Copyright &copy; 2002-2005 Geimas5 <br><br><br>';
include 'footer.php';
