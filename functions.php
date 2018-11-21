<?php
/*
//register_nav_menu( $location, $description );
*/
register_nav_menus( array(
	'top_menu' => '顶部导航栏',
	'footer_menu' => '底部导航栏',
) );

function MBT_menu_classes($classes, $item, $args) {
	if($args->theme_location == 'top_menu') { //这里的mobile是菜单的id
	   $classes[] = 'nav-item';
	}
	return $classes;
   }
   add_filter('nav_menu_css_class','MBT_menu_classes',1,3);


 ?>
