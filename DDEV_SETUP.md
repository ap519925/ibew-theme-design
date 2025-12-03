# DDEV Setup Guide for IBEW Drupal 11

This guide will help you set up and run the IBEW Drupal 11 site locally using DDEV.

## Prerequisites

- [DDEV](https://ddev.readthedocs.io/en/stable/) installed (v1.24.7 or higher)
- [Docker Desktop](https://www.docker.com/products/docker-desktop) running
- [Composer](https://getcomposer.org/) installed
- [Node.js](https://nodejs.org/) (v16 or higher)

## Initial Setup

### 1. Start DDEV

```bash
ddev start
```

This will:
- Create Docker containers for web, database, and other services
- Set up the local development environment
- Make your site available at https://ibew-drupal.ddev.site

### 2. Install Drupal Dependencies

```bash
ddev composer install
```

This installs:
- Drupal 11 core
- Radix base theme
- Drush CLI tool
- All required dependencies

### 3. Install Drupal

Option A: Using Drush (recommended):

```bash
ddev drush site:install standard \
  --site-name="IBEW Local" \
  --account-name=admin \
  --account-pass=admin \
  --yes
```

Option B: Using the web installer:
- Visit https://ibew-drupal.ddev.site
- Follow the installation wizard

### 4. Move IBEW Theme to Correct Location

```bash
# The theme should be in web/themes/custom/
# If it's not already there, move it:
ddev exec "mkdir -p web/themes/custom"
ddev exec "cp -r ibew_theme web/themes/custom/" 2>/dev/null || echo "Theme already in place"
```

### 5. Install Theme Dependencies

```bash
cd web/themes/custom/ibew_theme
npm install
npm run dev
cd ../../../..
```

### 6. Enable the IBEW Theme

```bash
# Enable Radix base theme first
ddev drush theme:enable radix -y

# Enable IBEW theme
ddev drush theme:enable ibew_theme -y

# Set as default theme
ddev drush config:set system.theme default ibew_theme -y

# Clear cache
ddev drush cr
```

## Daily Development Workflow

### Start Your Environment

```bash
ddev start
```

### Stop Your Environment

```bash
ddev stop
```

### Access Your Site

- **Website**: https://ibew-drupal.ddev.site
- **Admin**: https://ibew-drupal.ddev.site/user/login
  - Username: `admin`
  - Password: `admin` (or what you set during installation)

### Useful DDEV Commands

```bash
# SSH into the web container
ddev ssh

# Run Drush commands
ddev drush cr                    # Clear cache
ddev drush uli                   # Get one-time login link
ddev drush status                # Check Drupal status

# Run Composer commands
ddev composer require drupal/module_name
ddev composer update

# Database operations
ddev export-db --file=backup.sql.gz    # Export database
ddev import-db --file=backup.sql.gz    # Import database

# View logs
ddev logs                        # Web server logs
ddev logs -f                     # Follow logs in real-time

# Restart services
ddev restart
```

## Theme Development with DDEV

### Watch for Changes (Auto-compile)

```bash
# From your host machine
cd web/themes/custom/ibew_theme
npm run watch
```

### Build for Production

```bash
cd web/themes/custom/ibew_theme
npm run prod
```

### Clear Drupal Cache After Changes

```bash
ddev drush cr
```

## Troubleshooting

### DDEV Won't Start

```bash
# Check Docker is running
docker ps

# Restart DDEV
ddev restart

# If still having issues, rebuild
ddev delete -O
ddev start
```

### Site Not Loading

```bash
# Check DDEV status
ddev describe

# Restart web server
ddev restart
```

### Permission Issues

```bash
# Fix file permissions
ddev exec "chmod -R 755 web/sites/default"
ddev exec "chmod 644 web/sites/default/settings.php"
```

### Database Connection Errors

```bash
# Verify database is running
ddev describe

# Restart database
ddev restart
```

### Theme Not Showing Changes

```bash
# Clear all caches
ddev drush cr

# Rebuild theme
cd web/themes/custom/ibew_theme
npm run dev
cd ../../../..
ddev drush cr
```

## Advanced Configuration

### Enable Development Settings

Create `web/sites/default/settings.local.php`:

```php
<?php
// Disable CSS/JS aggregation
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

// Enable Twig debugging
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

// Disable render cache
$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['page'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';
```

### Enable XDebug

```bash
ddev xdebug on
```

### Access Database with PHPMyAdmin

```bash
ddev launch -p
```

## Project Structure

```
drupal 11 ibew theme/
├── .ddev/                      # DDEV configuration
├── web/                        # Drupal docroot
│   ├── core/                   # Drupal core
│   ├── modules/
│   ├── themes/
│   │   └── custom/
│   │       └── ibew_theme/     # Your custom theme
│   └── sites/
├── vendor/                     # Composer dependencies
├── composer.json               # PHP dependencies
└── composer.lock
```

## Next Steps

1. ✅ Start DDEV: `ddev start`
2. ✅ Install Drupal: `ddev drush site:install`
3. ✅ Enable theme: `ddev drush theme:enable ibew_theme -y`
4. ✅ Set as default: `ddev drush config:set system.theme default ibew_theme -y`
5. ✅ Build theme assets: `cd web/themes/custom/ibew_theme && npm run dev`
6. 🎨 Customize your theme!

## Resources

- [DDEV Documentation](https://ddev.readthedocs.io/)
- [Drupal 11 Documentation](https://www.drupal.org/docs/11)
- [Drush Commands](https://www.drush.org/latest/commands/)
