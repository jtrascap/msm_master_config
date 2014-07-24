# Installation Instructions

 - update the site short names and host names in `config/config.hosts.php` and `config/config.hosts.local.php`
- update the database credentials in `config/db/db.*.php` with each environment’s database info
 - change the directory names of `config/site_1` and `config/site_2` to the short names of your sites. Duplicate the directories for additional sites.
 - update the `config/site_x/env/env.*.php` files with path and url settings for that site and environment. Repeat for other sites. *Note: the `site_` and `parent_` variables for your parent site will both have the same values.*
 - update the following lines in `config/config.master.php`:
   - update the path to the `config` folder on line 54
   - update the name of your `admin.php` file on line 101
   - update the path to your `third_party` folder on line 116
   - update file upload directory paths on line 135
   - update the path to your `templates` folder on line 184
   - update the path to the `config` folder on line 280

# Caveats

- Site paths, urls, and protocols must be hard-coded because the current host may not be the host of the site you’re editing (example: you're on site1.com uploading an image to a Site 2 upload directory). Luckily, these values rarely change so you can usually set it and forget it.

# Notes

 - `current_url` & `current_path` should only be used when targeting the currently loaded site (so not for upload directories, because not all upload directories point to the current site)
 - the folder structure for all environments must be the same. If PROD is
 
        /site1.com/public_html/
        /site2.com/public_html/
        
      then LOCAL, STAGE, and DEV must be that way too. [Symlinks](http://goo.gl/sco0LL) are a great way to deal with this issue.
 - only the `site_name` variable needs to be defined in each child site's `admin.php` and `index.php` files
 - The site the `system` folder lives on is referred to as the "parent site", and variables are named according to that convention.
 - The site you are currently on (specifically, the *domain* you are on), is referred to as the "current site". So if you're on site1.com editing content for Site 2, the "current site" is still Site 1 because that's the domain you're on.
 - Each site uses 3 files for config: `env`, `db`, and `config`.
   - `env` sets up the current site’s settings, like Environment, URL, Path, Parent URL, and Parent Path.
    - `db` is for the DB settings for that environment. Since all sites use the same DB, these files are separate from the site-specific files
    - `config` is for site-specific config overrides. They’re loaded at the end of `config.master.php`.

# Troubleshooting

- if you get stuck, enable debugging in `index.php` and `admin.php`. That'll usually tell you where the problem is.


