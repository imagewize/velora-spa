# Spa & Retreat Child Theme

A specialized child theme for the [Moiraine WordPress theme](https://github.com/imagewize/moiraine), providing customized styling, color palettes, and typography optimized for spa and wellness websites while maintaining the functionality of the parent theme.

## Description

The Spa & Retreat child theme extends the Moiraine theme with custom colors and styles specifically designed for spas, wellness centers, and retreat businesses. It's crafted to give you a serene, calming foundation for creating a distinctive wellness-focused website while leveraging all the features of the parent Moiraine theme.

## Features

- Spa & wellness-focused color palette with soothing blues and greens
- Custom typography featuring elegant Cormorant Garamond for headings and clean Quicksand for body text
- Pre-designed spa & wellness style variation
- Custom block patterns specifically for spa and wellness businesses
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
- Using the included spa & wellness block patterns
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

The theme includes custom block patterns designed specifically for spa and wellness websites:

- **Four Column Wellness Posts** (`patterns/four-column-wellness-posts.php`): Display wellness blog posts in a four-column layout
- **Header Top Bar with Centered Menu** (`patterns/header-top-bar-centered-menu.php`): A header layout with top utility bar and centered navigation
- **Overlapping Feature Columns** (`patterns/overlapping-feature-columns.php`): Showcase services or features with visually overlapping columns
- **Overlapping Feature Columns Reversed** (`patterns/overlapping-feature-columns-reversed.php`): Same as Overlapping Feature Columns but with reversed layout - text on left, image on right
- **Shop Overview Three Columns** (`patterns/shop-overview-three-columns.php`): Display products in an elegant three-column layout
- **Two Column Feature** (`patterns/two-column-feature.php`): Highlight a service or feature in a two-column layout with image and text
- **Two Column Review** (`patterns/two-column-review.php`): Display customer testimonials in a two-column layout

These patterns can be accessed in the WordPress editor by clicking the "+" button and navigating to the Patterns section.

### Custom Templates

The theme includes the following custom templates:

- **WooCommerce Archive Product** (`templates/archive-product.html`): A custom template for WooCommerce product category pages, optimized for wellness products

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
- [Diana Light](https://unsplash.com/@dreamcatchlight?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/white-and-brown-wooden-rolling-pin-pBBxMUCgwuU?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Jernej Graj](https://unsplash.com/@jernejgraj?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/floating-woman-on-body-of-water-rlNibgIqi4o?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Yonas Bekele](https://unsplash.com/@ybekele?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/woman-in-blue-denim-jacket-standing-on-sidewalk-during-daytime-B4NW2Fk3Bkk?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)
- [Jellybee](https://unsplash.com/@jellybee?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash) on [Unsplash](https://unsplash.com/photos/kirkland-vitamin-c-1000-mg-dTCSkD-oLNE?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash)

## License

GNU General Public License v2 or later - http://www.gnu.org/licenses/gpl-2.0.html