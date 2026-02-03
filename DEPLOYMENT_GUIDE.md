# Deployment Guide: Drupal 11 to cPanel

This guide outlines the steps to deploy your local DDEV Drupal 11 project to a cPanel shared hosting environment.

## Prerequisites
- Access to cPanel.
- FTP/SFTP access or cPanel File Manager.
- **PHP 8.3** enabled in cPanel (Required for Drupal 11).
- SSH Access (Optional but recommended).

---

## 1. Prepare Local Environment
Before uploading, ensure your codebase is ready.

### Clean and Build
1.  **Compile Assets**: Ensure your theme CSS/JS is compiled.
    ```bash
    cd web/themes/custom/ibew_theme
    npm run prod
    ```
2.  **Clean Dependencies** (If you cannot run Composer on the server):
    ```bash
    # Run this in your project root
    composer install --no-dev --optimize-autoloader
    ```
    *Note: If you have SSH access and Composer on cPanel, you can skip this and run it on the server.*

### Export Database
1.  Export your active database using Drush inside DDEV:
    ```bash
    ddev drush sql-dump --gzip > database_export.sql.gz
    ```

### Create Archive
1.  Zip your *entire* project folder, excluding development files:
    - **Include**: `web/`, `vendor/`, `config/`, `composer.json`, `composer.lock`.
    - **Exclude**: `.ddev/`, `.git/`, `node_modules/`.

---

## 2. Server Setup (cPanel)

### Database Setup
1.  Log in to cPanel.
2.  Go to **MySQL Database Wizard**.
3.  Create a **New Database** (e.g., `username_drupal`).
4.  Create a **New User** and **Password** (Note these down!).
5.  **Grant All Privileges** to the user for that database.
6.  Go to **phpMyAdmin**, select your new database, and **Import** the `database_export.sql.gz` file you created.

### File Upload
1.  Go to **File Manager** (or use FTP).
2.  Upload your project ZIP file to the desired folder (usually `public_html` for main domain).
3.  **Extract** the ZIP file.
4.  You should now have folders like `public_html/web`, `public_html/vendor`, etc.

### **CRITICAL: Document Root**
Drupal 11 serves files from the `web/` subdirectory.
1.  **Main Domain protection**: You cannot easily change the Document Root for the main domain on some shared hosts.
    - *Option A (Subdomain)*: Create a subdomain `www` or `app` and set its Document Root to `/public_html/web`.
    - *Option B (.htaccess Rewrite)*: If stuck with `public_html`, add an `.htaccess` in `public_html` to rewrite requests to `web/`. (Not recommended for best security).
    - *Option C (Best)*: If your host allows, changing the generic Document Root in "Domains" settings to `public_html/web`.

---

## 3. Configuration

### Edit settings.php
1.  Navigate to `web/sites/default/`.
2.  Rename `settings.php` to `settings.php.bak` (if overriding) OR just edit it.
3.  Ensure `settings.php` is writable (Permissions 644).
4.  Open `settings.php` and configure the database connection:

```php
$databases['default']['default'] = array (
  'database' => 'your_cpanel_db_name',
  'username' => 'your_cpanel_db_user',
  'password' => 'your_cpanel_db_password',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
```

5.  **Trusted Host Patterns**:
    Find `trusted_host_patterns` and add your domain:
```php
$settings['trusted_host_patterns'] = [
  '^www\.yourdomain\.com$',
  '^yourdomain\.com$',
];
```

6.  **Hash Salt**: Ensure `$settings['hash_salt']` has a random string (copy from your local if needed).

7.  **Private Files**: Set up a private files directory **outside** the web root (e.g., `../private`) and update the path in settings.php:
    `$settings['file_private_path'] = '../private';`

### Permissions
1.  Ensure `web/sites/default/files` is writable (755 or 775).

---

## 4. Final Steps

1.  Navigate to your site URL.
2.  If you see errors, check `web/sites/default/files/php_errors.log` (if enabled) or server error logs.
3.  **Clear Cache**:
    - If you have SSH: `cd web && ../vendor/bin/drush cr`
    - If providing UI access: Navigate to `/admin/config/development/performance` and click **Clear all caches**.
