# IBEW Theme Quick Start Guide

## Prerequisites

Before you begin, ensure you have:
- Drupal 11 installed
- Node.js (v16 or higher) and npm installed
- Composer installed
- PHP 8.3 or higher

## Step 1: Install Radix Base Theme

In your Drupal root directory, run:

```bash
composer require drupal/radix
```

## Step 2: Copy Theme to Drupal

Copy the `ibew_theme` directory to your Drupal installation:

```bash
# From your Drupal root
cp -r /path/to/ibew_theme web/themes/custom/
```

## Step 3: Install Node Dependencies

Navigate to the theme directory and install dependencies:

```bash
cd web/themes/custom/ibew_theme
npm install
```

This will install:
- Bootstrap 5
- Laravel Mix (build tool)
- Sass compiler
- BrowserSync (for live reloading)

## Step 4: Build Theme Assets

Build the CSS and JavaScript files:

```bash
# For development (with source maps)
npm run dev

# For production (minified)
npm run prod

# For development with auto-rebuild on file changes
npm run watch
```

## Step 5: Enable the Theme

1. Log in to your Drupal site as an administrator
2. Go to **Appearance** (`/admin/appearance`)
3. Find "IBEW Theme" in the list
4. Click **Install and set as default**

## Step 6: Configure Theme Settings (Optional)

Go to **Appearance** > **Settings** > **IBEW Theme** to configure:
- Logo settings
- Color scheme
- Layout options

## Development Workflow

### Making Style Changes

1. Edit files in `src/scss/`
2. Run `npm run watch` to auto-compile on save
3. Refresh your browser to see changes

### Creating New Components

1. Create a new directory in `components/`
2. Add the required files:
   - `component-name.component.yml` (metadata)
   - `component-name.twig` (template)
   - `component-name.scss` (styles)
3. Import the SCSS in `src/scss/main.scss`
4. Clear Drupal cache: `drush cr`

### Overriding Templates

1. Copy the template from Radix or Drupal core to `templates/`
2. Modify as needed
3. Clear Drupal cache: `drush cr`

## Troubleshooting

### Build Errors

If you encounter build errors:

```bash
# Clear node_modules and reinstall
rm -rf node_modules package-lock.json
npm install
npm run dev
```

### Theme Not Appearing

- Ensure Radix base theme is installed
- Clear Drupal cache: `drush cr` or via admin UI
- Check file permissions

### Styles Not Loading

- Verify build completed successfully
- Check that `build/css/main.css` exists
- Clear browser cache
- Clear Drupal cache

## Next Steps

- Customize colors in `src/scss/_variables.scss`
- Add your organization's logo (replace `logo.svg`)
- Create custom components for your content types
- Override additional templates as needed
- Add custom JavaScript functionality in `src/js/main.script.js`

## Resources

- [Radix Documentation](https://www.drupal.org/docs/contributed-themes/radix)
- [Bootstrap 5 Documentation](https://getbootstrap.com/docs/5.3/)
- [Drupal Theming Guide](https://www.drupal.org/docs/theming-drupal)
- [Single Directory Components](https://www.drupal.org/docs/develop/theming-drupal/using-single-directory-components)
