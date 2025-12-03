# IBEW Theme Directory Structure

```
ibew_theme/
├── components/                 # Single Directory Components
│   └── ibew-header/           # Example header component
│       ├── ibew-header.component.yml
│       ├── ibew-header.twig
│       ├── ibew-header.scss
│       └── README.md
├── src/                       # Source files (compiled to build/)
│   ├── js/
│   │   └── main.script.js    # Main JavaScript file
│   └── scss/
│       ├── _variables.scss   # Bootstrap variable overrides
│       └── main.scss         # Main stylesheet
├── templates/                 # Twig template overrides
│   └── page.html.twig        # Page template
├── build/                     # Compiled assets (generated, git-ignored)
│   ├── css/
│   └── js/
├── .gitignore
├── ibew_theme.info.yml       # Theme metadata
├── ibew_theme.libraries.yml  # Asset libraries
├── ibew_theme.breakpoints.yml # Responsive breakpoints
├── ibew_theme.theme          # Theme hooks and preprocessing
├── logo.svg                  # Theme logo
├── screenshot.png            # Theme screenshot
├── package.json              # Node.js dependencies
├── webpack.mix.js            # Build configuration
└── README.md                 # Documentation
```

## Key Directories

- **components/**: Reusable UI components following Drupal's SDC pattern
- **src/**: Source files that get compiled into the build directory
- **templates/**: Twig template overrides for Drupal's default markup
- **build/**: Compiled CSS and JS (auto-generated, don't edit directly)
