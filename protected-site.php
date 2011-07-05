<?php
/*
Plugin Name: Protected Site
Description: Block users from accessing your blog or a specific blog in your network by activating this plugin on the blog you wish to protect.
Author: Davo Hynds
Version: 1.0
Author URI: http://ashramcreative.com
*/

add_action( 'get_header', 'ac_protected_site' );
function ac_protected_site() {
	if ( !is_user_logged_in() ) { ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>Login Required</title>
    <style type="text/css">
		* {
			margin: 0;
			color: #777;
			font-family: Tahoma, Tahoma, Geneva, sans-serif;
		}
		div {
			margin: 10% auto;
			padding: 20px;
			border: 1px solid #ccc;
			background: #eee;
			width: 400px;
		}
		h1 {
			font-weight: normal;
			color: #444;
			margin-bottom: .5em;
		}
		p {
			font-size: 14px;
		}
		a,
		a:link,
		a:visited,
		a:hover,
		a:active {
			color: #444;
		}
	</style>
</head>
<body>
    <div>
        <h1>Login Required</h1>
        <p><strong>Sorry!</strong> You must <a href="<?php bloginfo('url'); ?>/wp-login.php?redirect_to=<?php
			$path = get_bloginfo('url').$_SERVER['PHP_SELF'];
			echo $path;
		?>&reauth=1">log in</a> to view this page.</p>
    </div>
</body>
</html><?php die;
	}
} ?>