# Jason Frohlochstein Drupal CMS

## Local Setup

1. Create a MySQL database called `jfro_drupal`
2. Create an empty directory and clone repo inside: `git@github.com:frohlichstein/portfolio_cms.git .`
3. Import the file `jfro_drupal_dump.sql` into the database
4. Duplicate the file: `/sites/default/default.settings.php` and rename it to `settings.php`. Add the following line to the file: `ini_set('memory_limit', '128M');`
5. Do a nice hard `drush cc all`
6. Do the Drupey jig

## User Logins

**Root**  
User: root  
Pass: Jfro!2012

**Editor**  
User: editor  
Pass: Jfro!2012