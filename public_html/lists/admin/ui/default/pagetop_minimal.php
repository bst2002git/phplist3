<?php
/*
  We request you retain the full headers below including the links.
  This not only gives respect to the large amount of time given freely
  by the developers  but also helps build interest, traffic and use of
  PHPlist, which is beneficial to it's future development.

  Michiel Dethmers, phpList Ltd 2003 - 2012
*/

/** Purpose of this file: header with minimal styles for pages in iframes and ajaxed
*/


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="SHORTCUT ICON" href="./images/favicon.ico" />

<!-- initial styles and JS from basic application -->
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.1.all.min.js"></script>
<script type="text/javascript" src="js/jquery.tools.scrollable.js"></script>
<script language="Javascript" type="text/javascript" src="js/phplistapp.js"></script>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/appminimal.css" />
<link rel="stylesheet" href="ui/dressprow/css/minimal.css" />


<?php
if (isset($GLOBALS['config']['head'])) {
  foreach ($GLOBALS['config']['head'] as $sHtml) {
    print $sHtml;
    print "\n";
    print "\n";
  }
}
