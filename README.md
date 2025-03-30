# Spa & Retreat Child Theme

A specialized child theme for the [Moiraine WordPress theme](https://github.com/imagewize/moiraine), providing customized styling, color palettes, and typography optimized for spa and wellness websites while maintaining the functionality of the parent theme.

## Description

The Spa & Retreat child theme extends the Moiraine theme with custom colors and styles specifically designed for spas, wellness centers, and retreat businesses. It's crafted to give you a serene, calming foundation for creating a distinctive wellness-focused website while leveraging all the features of the parent Moiraine theme.

## Features

- Spa & wellness-focused color palette with soothing blues and greens
- Custom typography featuring elegant Cormorant Garamond for headings and clean Quicksand for body text
- Pre-designed spa & wellness style variation
- Custom block patterns specifically for spa and wellness businesses (coming soon)
- Maintains all functionality from the parent Moiraine theme
- Clean, tranquil design with focus on creating a relaxing user experience

## Requirements

- WordPress 6.0 or higher
- Moiraine parent theme must be installed
- PHP 7.4 or higher

## Installation

1. Download and install the [parent Moiraine theme](https://github.com/imagewize/moiraine)
2. Upload the Spa & Retreat Child theme to your WordPress site
3. Activate the Spa & Retreat Child theme from the WordPress admin panel

## Demo Content

The theme includes demo content to help you get started quickly:

### WooCommerce Demo Products

The included demo content file `demo-content/velora.WordPress.2025-03-30.xml` contains WooCommerce products and related data. To use this demo content:

1. Install and activate the [WooCommerce plugin](https://wordpress.org/plugins/woocommerce/) before importing
2. Import the XML file through WordPress Tools > Import
3. After import, you'll need to configure:
   - Store location settings
   - Tax settings
   - Payment methods
   - Shipping options

Additionally, there is a CSV product import file available at `demo-content/spa-retreat-products.csv`. Note that while product images for this import are included in the theme's `assets/images/shop` directory, the current CSV file's image references do not match. You'll need to manually replace them with the correct images after import. Also if you used the XML for full import you do _not_ need this `.csv` file.

Some WooCommerce settings are not included in the export and must be configured manually to match your specific requirements.

For a basic installation without WooCommerce, you can still use the theme but will need to skip importing the demo content or remove the WooCommerce-specific content after import.

## Customization

The theme includes a custom spa-focused color palette and typography defined in the `theme.json` file and a dedicated style variation. You can further customize the theme by:

- Modifying the color palette in the `theme.json` file
- Adding custom CSS to the `style.css` file
- Using the included spa & wellness block patterns (coming soon)
- Creating additional style variations in the `styles` directory
- Using the included custom fonts (Cormorant Garamond and Quicksand)

### Style Variations

The theme comes with a pre-configured "Spa & Wellness" style variation:

- **Spa & Wellness**: A soothing color palette with calming blues and greens, perfect for creating a tranquil spa website experience

To create additional style variations:

1. Navigate to the `styles` directory in your child theme
2. Create a new JSON file (e.g., `my-custom-style.json`)
3. Define your variation settings following the WordPress style variation format
4. Your new style variation will appear in the WordPress Site Editor under "Styles"

### Included Fonts

The theme comes with these custom fonts already configured:

- **Cormorant Garamond**: An elegant serif font used for headings
- **Quicksand**: A clean, modern sans-serif font used for body text

These fonts are located in the `assets/fonts` directory and are already configured in the theme's style variation.

### Adding Block Patterns

The theme will soon include custom block patterns designed specifically for spa and wellness websites, such as:

- Service showcase
- Testimonial layouts
- Spa treatment menus
- Booking and reservation sections
- Wellness program highlights

## Support

For support or more information, visit [Imagewize](https://imagewize.com).

## Photo Credits

This theme includes images from the following photographers:

- [Carl Barcelo](https://unsplash.com/@barcelocarl?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/woman-doing-yoga-nqUHQkuVj3c?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Toa Heftiba](https://unsplash.com/@heftiba?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/man-massaging-womans-body-a9pFSC8dTlo?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Nico](https://unsplash.com/@nicobaby?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/gardener-votive-candle-on-table-8IK1OrkMzMQ?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Paje Victoria](https://unsplash.com/@pajevictoria?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/woman-in-hot-tub-ohhEOp05h4g?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Nataliya Melnychuk](https://unsplash.com/@natinati?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/person-holding-blue-plastic-container-I-6Ap7JXHq8?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Kristina Petrick](https://unsplash.com/@dayinmydreams?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/woman-lying-on-bed-with-white-siberian-husky-TYXCnTHDqHk?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Brooke Lark](https://unsplash.com/@brookelark?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/black-and-red-cherries-on-white-bowl-nTZOILVZuOg?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Florencia Potter](https://unsplash.com/@florenciapotter?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/white-salt-on-glass-jar-UH1ewTC9HTk?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Jonathan Ocampo](https://unsplash.com/@johnophoto?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/oil-dispenser-bottle-iCgfwfqgdzo?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Mathilde Langevin](https://unsplash.com/@mathildelangevin?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/person-holding-black-glass-bottle-FDRaYqiTY1k?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Kadarius Seegars](https://unsplash.com/@kseegars?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/clear-glass-bottle-on-white-wooden-round-table-Mxy5gokl8mE?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Rowan Freeman](https://unsplash.com/@rowanfreeman?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/brown-glass-bottle-showing-back-content-4u9LSRrZusc?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
      

## License

GNU General Public License v2 or later - http://www.gnu.org/licenses/gpl-2.0.html