# WP_external_login_authorization
Wordpress external login authorization plugin

Based on http://ben.lobaugh.net/blog/7175/wordpress-replace-built-in-user-authentication
This plugin make possible login into Wordpress using users from external db.

The file ext_auth_demo_server.php get the exteral user login and data to post on wp, and then authorize the login and create user minimal data that wordpress need to work. Edit this file according to your needs.



How to:

1- Install this into your WordPress plugins/ directory

2- Activate it on the dashboard

3- Create a page with the shortcode [ext_auth] and navigate there
