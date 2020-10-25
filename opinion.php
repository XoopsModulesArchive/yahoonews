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
$url = 'http://rss.news.yahoo.com/rss/oped';
$rss = fetch_rss($url);

echo '<font class=title>', $rss->channel['title'], "</font><br><br><b><a href=index.php>Back to news index</a></b><br><br>\n";
foreach ($rss->items as $item) {
    $title = $item[title];

    $url = $item[link];

    $desc = $item[description];

    echo "<font class=content><p><a href=$url>$title</a><br>$desc</font>\n";
}
// !!!DO NOT REMOVE THE COPYRIGHT LINE!!!
echo '<center>version 1.0 Copyright &copy; 2002-2005 Geimas5 <br><br><br>';
    include 'footer.php';
