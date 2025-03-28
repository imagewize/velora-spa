# Moiraine Child Theme

A child theme for the [Moiraine WordPress theme](https://github.com/imagewize/moiraine), providing customized styling and color palettes while maintaining the functionality of the parent theme.

## Description

Moiraine Child theme extends the Moiraine theme with custom colors and styles. It's designed to give you a solid foundation for creating a unique website while leveraging all the features of the parent Moiraine theme.

## Features

- Custom color palette optimized for brand consistency
- Maintains all functionality from the parent Moiraine theme
- Clean, minimal design with focus on content

## Requirements

- WordPress 6.0 or higher
- Moiraine parent theme must be installed
- PHP 7.4 or higher

## Installation

1. Download and install the [parent Moiraine theme](https://github.com/imagewize/moiraine)
2. Upload the Moiraine Child theme to your WordPress site
3. Activate the Moiraine Child theme from the WordPress admin panel

## Customization

The theme includes a custom color palette defined in the `theme.json` file. You can further customize the theme by:

- Modifying the color palette in the `theme.json` file
- Adding custom CSS to the `style.css` file
- Creating custom block patterns in the patterns directory
- Adding style variations to the `styles` directory (see below)
- Including custom fonts in the `assets/fonts` directory (see below)

### Adding Style Variations

To create custom style variations:

1. Navigate to the `styles` directory in your child theme
2. Create a new JSON file (e.g., `my-custom-style.json`)
3. Define your variation settings following the WordPress style variation format
4. Your new style variation will appear in the WordPress Site Editor under "Styles"

Example of a style variation file:
```json
{
  "$schema": "https://schemas.wp.org/trunk/theme.json",
  "version": 3,
  "title": "My Custom Style",
  "settings": {
    "color": {
      "palette": [
        {
          "slug": "primary",
          "color": "#yourCustomColor",
          "name": "Primary"
        }
        // Add more colors as needed
      ]
    }
  }
}
```

### Adding Custom Fonts

To add custom fonts to your theme:

1. Place your font files (woff, woff2, etc.) in the `assets/fonts` directory
2. Add the @font-face declarations to your `style.css` file
3. Update your `theme.json` to include the new font family

Example @font-face declaration for style.css:
```css
@font-face {
  font-family: 'Your Custom Font';
  src: url('./assets/fonts/your-custom-font.woff2') format('woff2');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}
```

## Support

For support or more information, visit [Imagewize](https://imagewize.com).

## License

GNU General Public License v2 or later - http://www.gnu.org/licenses/gpl-2.0.html