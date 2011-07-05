=== Plugin Name ===
Contributors: dbhynds
Tags: protected site, protect site, require password, validation, password protect site, block visitors, block traffic
Requires at least: 3.1.3
Tested up to: 3.1.4
Stable tag: 1.0

The Protected Site plugin blocks incoming traffic from accessing a blog or a specific blog in a network by requiring visitors to log in to WordPress.

== Description ==

The Protected Site plugin for WordPress allows you to block incoming traffic from accessing a blog or a specific blog in a network. It requires visitors to log in before viewing the content of the blog. Only users with valid usernames and passwords will be permitted to access the blog in question.

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload `protected-site.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Why use Protected Site? =

It provides an additional layer of privacy for WordPress blogs. Currently, the only available privacy setting in WordPress is: "I would like my site to be visible to everyone, including search engines (like Google, Bing, Technorati) and archivers." Protected Site allows you to prevent any incoming traffic to your blog unless the user logs in to WordPress as a valid user for that blog.

= How might Protected Site be used? =

The Protected Sites plugin has a variety of uses. For example, a web developer can use it to prevent traffic to blogs while their still in development. The site admin can provide a usernames and passwords to the client, designer and other developers working on the project. This allows them to browse the blog and keep track of progress as it is being developed. This allows them to provide feedback throughout the development process, minimizing the need for time-consuming tweaks down the road. Clients can even begin adding content to the site, so that it's ready to go the day the site launches. All the while, the site remains private to all outside traffic.

= How does it work? =

To protect a site from incoming traffic, simply install and activate the plugin on that site. Once activated, all traffic to the site receive a message alerting them that they must log in to view the page. Once logged in to WordPress, the user will be redirected to the page they were attempting to access and can navigate throughout the site at will. To un-protect a site, simply deactivate the plugin. This plugin is also compatible with a WordPress Network. Activating it on an individual site within a network only protects that site. To activate it on all sites and protect the entire network, choose "Network Activate" in the "Network Admin" section.

= But how exactly does it work? =

By adding an action that overrides the get_header(); function. When get_header(); is called in the template, it runs a function that generates the "Login Required" message, then kills the function. In order to work properly, get_header(); should be the very first code in your template. Otherwise, and code before the get_header(); function will make it into the source code for your page. This means that if you open the <html> and <head> tags, then link a CSS stylesheet, the "Login Required" message will inherit this style. To prevent this, ensure that your header.php file contains the <html> tag.

== Changelog ==

= 1.0 =
* Changed action to utilize get_header() function instead of wp_head().
* Changed doctype to HTML 4.01 Transitional instead of HTML5.
* Added CSS style to head.
