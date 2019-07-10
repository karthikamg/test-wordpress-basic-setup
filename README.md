Basic wordpress setup to learn the following:

1. Learn wordpress installation for version 5.2 and higher.
2. Learn new features in new version of WordPress.
3. Add a custom theme.
4. Enable a child theme inheriting from parent and with necessary custom files.

Wordpress installation

-Download wordpress
-Make a copy of extracted wordpress folder from its zip in the root directory
-Rename wp-config-sample.php to wp-config.php
-In sites-available and sites-enabled, create wordpress config file by taking sample from an existing conf file.
-Update apache server by the command: sudo service apache2 restart
-Create database via terminal by:
-Command: mysql -u root -p
-Command: CREATE DATABASE IF NOT EXISTS samplewp;
-It shows message as “Query OK, 1 row affected (0.00 sec)”
-Update wp-config.php with db name (created now), username (root), pwd (qburst).
-Run the url http://localhost/domain_name/
-Update wordpress with site title, username, pwd for this site and save changes.
-Make sure whether or not to check to enable the google search crawl.
-If checkbox is checked, then no google indexing will be happening and will show no indexing in google search console.
-Otherwise, we need to specify robots.txt file inside our wordpress folder with what to allow and what to disallow, like
    User-agent: *
    Disallow: /wp-admin/
    Allow: /wp-admin/admin-ajax.php
-Once changes are saved, login to new wordpress admin panel.

Custom theme generator: http://underscores.me/

Hooks
-----wp_head() — Added to the <head> element in header.php, and enables styles, scripts, and other information that runs as soon as the site loads. If not added, styles, scripts mentioned in functions.php won’t be added.
-----wp_footer() — Added to footer.php right before the </body> tag. This is often used to insert Google Analytics code.
-----wp_meta() — This usually appears in sidebar.php, to include additional scripts (such as a tag cloud).
-----comment_form() — Added to comments.php directly before the file's closing </div> tag to display comment data.

Updating failed issue: This is mainly caused when we try to change permalink.


