web: vendor/bin/heroku-php-apache2 public/
<IfModule mod_rewrite.c>
Options +FollowSymLinks
RewriteEngine On

RewriteCond %{REQUEST_URI} !^/public/

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f



RewriteRule ^(.*)$ /public/$1
#RewriteRule ^ index.php [L]
RewriteRule ^(/)?$ public/index.php [L]
</IfModule>
