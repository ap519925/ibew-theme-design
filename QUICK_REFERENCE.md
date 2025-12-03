# IBEW Drupal 11 - Quick Reference

## 🚀 Quick Start Commands

```bash
# Start the site
ddev start

# Stop the site  
ddev stop

# Open site in browser
ddev launch

# Get admin login link
ddev drush uli
```

## 🌐 URLs

- **Site**: https://ibew-drupal.ddev.site
- **Admin**: https://ibew-drupal.ddev.site/user/login
- **PHPMyAdmin**: `ddev launch -p`

## 🔑 Default Credentials

- **Username**: admin
- **Password**: admin

## 🎨 Theme Development

```bash
# Navigate to theme
cd web/themes/custom/ibew_theme

# Install dependencies (first time only)
npm install

# Development build
npm run dev

# Watch for changes
npm run watch

# Production build
npm run prod

# Clear Drupal cache after changes
ddev drush cr
```

## 🛠️ Common Drush Commands

```bash
# Clear cache
ddev drush cr

# One-time login link
ddev drush uli

# Check status
ddev drush status

# Enable module
ddev drush en module_name -y

# Disable module
ddev drush pmu module_name -y

# Export configuration
ddev drush cex -y

# Import configuration
ddev drush cim -y

# Update database
ddev drush updb -y

# Rebuild cache
ddev drush cr
```

## 📦 Composer Commands

```bash
# Install a module
ddev composer require drupal/module_name

# Update all packages
ddev composer update

# Update Drupal core
ddev composer update drupal/core-recommended --with-dependencies
```

## 🗄️ Database Operations

```bash
# Export database
ddev export-db --file=backup.sql.gz

# Import database
ddev import-db --file=backup.sql.gz

# Access database CLI
ddev mysql

# Launch PHPMyAdmin
ddev launch -p
```

## 🐛 Debugging

```bash
# Enable XDebug
ddev xdebug on

# Disable XDebug
ddev xdebug off

# View logs
ddev logs

# Follow logs
ddev logs -f

# SSH into container
ddev ssh
```

## 🔧 Troubleshooting

```bash
# Restart DDEV
ddev restart

# Rebuild containers
ddev delete -O
ddev start

# Fix permissions
ddev exec "chmod -R 755 web/sites/default"

# Clear all caches
ddev drush cr
```

## 📁 Important Paths

- **Theme**: `web/themes/custom/ibew_theme/`
- **Custom modules**: `web/modules/custom/`
- **Config**: `web/sites/default/`
- **Files**: `web/sites/default/files/`

## 🎯 IBEW Theme Colors

- **Primary (Dark Blue)**: `#003366`
- **Secondary (Gold)**: `#ffd700`

## 📝 File Locations

- **SCSS Variables**: `src/scss/_variables.scss`
- **Main Styles**: `src/scss/main.scss`
- **JavaScript**: `src/js/main.script.js`
- **Templates**: `templates/`
- **Components**: `components/`

## ⚡ Performance

```bash
# Enable CSS/JS aggregation
ddev drush config:set system.performance css.preprocess 1 -y
ddev drush config:set system.performance js.preprocess 1 -y

# Clear cache
ddev drush cr
```

## 🔄 Update Workflow

```bash
# Pull latest code
git pull

# Update dependencies
ddev composer install

# Update database
ddev drush updb -y

# Import config
ddev drush cim -y

# Clear cache
ddev drush cr

# Rebuild theme
cd web/themes/custom/ibew_theme && npm run prod
```

---

**Need help?** Check `DDEV_SETUP.md` for detailed instructions.
