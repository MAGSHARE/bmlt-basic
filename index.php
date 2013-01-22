<?php
/*******************************************************************************************/
/*******************************************************************************************/

/*******************************************************************************************/
/*******************************************************************************************/
$parse_string = '[[bmlt]]';

/*******************************************************************************************/
/*******************************************************************************************/
require_once ( 'bmlt_basic.class.php' );

/*******************************************************************************************/
/*******************************************************************************************/
if ( !isset ( $basic_bmlt_object ) && class_exists ( "bmlt_basic" ) )
    {
    $basic_bmlt_object = new bmlt_basic();
    }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Demonstration of Standalone BMLT Satellite</title>
<!-- *********************************************************************************** -->
    <?php echo $basic_bmlt_object->standard_head ( $parse_string ); ?>
<!-- *********************************************************************************** -->
    </head>
    <body>
<!-- *********************************************************************************** -->
    <?php echo $basic_bmlt_object->content_filter ( $parse_string ); ?>
<!-- *********************************************************************************** -->
    </body>
</html>
