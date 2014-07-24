# Installation Instructions

 - change the directory names of `config/site_1` and `config/site_2` to the short names of your sites. Duplicate the directories for additional sites.
 - update the `config/site_1/env/config.*.php` files with path and url settings for that site and environment. Repeat for other sites.
 - update the database credentials in `config/db/db.*.php` with each environment’s database info
 - update the path for the database file on line 54 of `config/config.master.php`
 - update the name of your `admin.php` file on line 101 of `config/config.master.php`
 - update the path to your `third_party` folder on line 116 of `config/config.master.php`
 - update file upload directory paths on line 135 of `config/config.master.php`
 - update the path to your `templates` folder on line 184 of `config/config.master.php`
 - update the path for the environment config override files on line 280 of `config/config.master.php`

# Caveats
- The site protocol must be hard-coded because the current host may not be the host of the site you’re working with (ex: you’re on the parent site which is “https”, but you’re editing content for the child site which is “http”).

# Notes

 - `site_url` & `site_path` should be used for general path/url info for each site
 - `current_url` & `current_path` should only be used when targeting the currently loaded site (so no for upload directories, b/c not all upload directories point to the current site)
 - the folder structure for all environments must be the same. If PROD is 
		- /parentsite.com/public_html/
		- /childsite.com/public_html/
  then LOCAL and DEV must be that way too. [Symlinks](http://goo.gl/sco0LL) are a great way to deal with this issue.
 - only the `site_name` variable needs to be defined in each child site's `admin.php` and `index.php` files
 - The site the system folder lives on is referred to as the "parent site", and variables are named according to that convention
 - Each site uses 3 files for config:
  - env
  - db
  - config
- ENV sets up the current site’s settings, like Environment, URL, Path, Parent URL, and Parent Path.
- DB is for the DB settings for that environment. Since all sites use the same DB, these files are separate from the site-specific files
- Config is for site-specific config overrides. They’re loaded at the end of config.master.php.



