# IBEW Theme

A custom Drupal 11 theme for IBEW (International Brotherhood of Electrical Workers) based on the Radix base theme.

## Features

- Built on Radix 6.x with Bootstrap 5
- Custom IBEW color scheme (Dark Blue and Gold)
- Responsive design with Bootstrap grid system
- Component-based architecture
- Modern build tools (Laravel Mix, Sass, ES6)

## Requirements

- Drupal 11
- Radix base theme
- Node.js and npm
- PHP 8.3+

## Installation

1. Place this theme in your Drupal installation's `themes/custom/` directory
2. Install the Radix base theme if not already installed:
   ```
   composer require drupal/radix
   ```
3. Install Node.js dependencies:
   ```
   cd themes/custom/ibew_theme
   npm install
   ```
4. Build the theme assets:
   ```
   npm run dev
   ```
5. Enable the theme in Drupal's Appearance settings

## Development

### Build Commands

- `npm run dev` - Build assets for development
- `npm run watch` - Watch for changes and rebuild automatically
- `npm run prod` - Build optimized assets for production

### Customization

- **Colors**: Edit `src/scss/_variables.scss` to customize Bootstrap variables
- **Styles**: Add custom styles to `src/scss/main.scss`
- **JavaScript**: Add custom scripts to `src/js/main.script.js`
- **Templates**: Override Drupal templates in the `templates/` directory
- **Components**: Create custom components in the `components/` directory

## Color Scheme

- Primary (Dark Blue): `#003366`
- Secondary (Gold): `#ffd700`

## Support

For issues or questions, please contact your development team.
