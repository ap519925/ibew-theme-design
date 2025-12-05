# IBEW Header Component

A reusable header component for the IBEW theme.

## Usage

```twig
{% include 'ibew_theme:ibew-header' with {
  site_name: 'IBEW Local 123',
  logo_url: '/path/to/logo.svg',
  slots: {
    navigation: navigation_menu
  }
} %}
```

## Props

- `site_name` (string): The name of the site/local
- `logo_url` (string): Path to the logo image

## Slots

- `navigation`: Main navigation menu content
