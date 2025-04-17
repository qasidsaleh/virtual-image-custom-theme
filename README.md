
# Virtual Image Custom Theme

## The Problem to Be Solved
I created this custom theme after noticing that the Understrap theme used with a child theme, contained a lot of unnecessary and unused code. To address this, I developed a streamlined custom theme with clean, accurate code. It's designed to be easy to refine or customize based on specific project requirements.

## Getting Started with WordPress
Before you begin, make sure you have the following installed on your machine:

1. **LocalWP**:
Local WP: Download and install Local WP from [https://localwp.com/](https://localwp.com/). Create an account and install it on your machine.

2. **Node.js**:
Install Node.js from [https://nodejs.org/en/](https://nodejs.org/en/). Check the version by typing node -v in the command prompt. If not installed, download and install it.

3. **npm**:
Install npm by typing `npm install -g npm@latest` in the command prompt.

4. **Git**: 
Download and install Git from [https://git-scm.com/downloads](https://git-scm.com/downloads).

## Installing the Custom Theme

1. Open Local WP and create a new site by checking all default options. This will install basic WordPress with a default theme.

2. Go to the site folder under the site name and click on it. This will open the site directory.

3. Open the `app > public > wp-content > themes` directory.

4. In the address area, type `cmd` and press Enter.

5. In the command prompt, type `git clone https://github.com/qasidsaleh/virtual-image-custom-theme` to clone the custom theme into the newly installed WordPress.

6. Go to the site's WP admin and activate the newly custom theme under `Appearance > Themes`.

## Installing ACF Pro

1. Install ACF Pro and activate its license key, which can be found in Google Docs.

2. Go to `Plugins` and check if `ACF Pro` is up to date. If not, hit the Update button.

## Importing Page Components and Theme Options

1. Import the page components and theme options JSON file, which can be found under the custom theme's `acf` directory.

## E-commerce Functionality with WooCommerce
If you're planning to use this theme for an e-commerce site, you'll need to install WooCommerce. Once installed, you can customize the WooCommerce functionality by adding files to the `woocommerce` folder.

1. Need to uncomment hooks from the end of functions file
`add_theme_support( 'woocommerce' );`
`add_action( 'wp_enqueue_scripts', 'woocommerce_enqueue_styles' );`

2. Also uncomment style under style.scss
`@use 'woocommerce/woocommerce.css';`

## Customizing WooCommerce
To customize WooCommerce, you can add files to the `woocommerce` folder. This folder contains template files that override the default WooCommerce templates. You can modify these files to change the layout and design of your e-commerce site.

## Using Filter/Hooks Functionality
Alternatively, you can use WooCommerce's filter and hook functionality to customize the plugin's behavior. This allows you to modify the plugin's functionality without modifying the core files.

## WooCommerce CSS
The `css` folder contains a `woocommerce.css` file, which provides default styles for WooCommerce pages. This file is imported in the `style.scss` file, which means that you can override the default styles by adding your own CSS rules to the `style.scss` file.

## Customizing WooCommerce Layout
To customize the WooCommerce layout, you can modify the `woocommerce.css` file or add your own CSS rules to the `style.scss` file. The `woocommerce.css` file provides a basic layout for WooCommerce pages, and you can override these styles to create a custom layout for your e-commerce site.


## Folder Structure
```
virtual-image/
├── acf/
│   ├── Grid Template/
|   |   ├── acf-export.json
│   ├── Theme Options/
|   |   ├── acf-export.json
├── assets/
│   ├── images
│   ├── pdfs
│   └── videos
├── css/
│   ├── node_modules
|   |   ├── /*
|   ├── utilities
|   |   ├── _index.scss 
|   |   ├── _buttons.scss 
|   |   ├── _generic_classes.scss
|   |   ├── _typography.scss
|   |   ├── _normalize.scss
|   |   ├── _variables.scss
|   ├── woocommerce
|   |   ├── woocommerce.css
|   ├── _footer.scss
|   ├── _header.scss
|   ├── _layout.scss
|   ├── package-lock.json
|   ├── package.json
|   ├── style.css
|   ├── style.css.map
|   ├── style.scss
├── custom-functions/
|   ├── register-cpt.php
├── fonts/
├── includes/
|   ├── buttons/
|   |   ├── btn-primary.php
|   |   ├── btn-secondary.php
|   ├── components/
|   |   ├── hero/
|   |   |   ├── hero.php
|   |   |   ├── hero.scss
|   |   ├── grid/
|   |   |   ├── grid.php
|   |   |   ├── grid.scss
|   |   ├── _index.scss
|   |   ├── generic_classes.php
|   ├── components.php
├── js/
|   ├── scripts.js 
├── page-templates
├── woocommerce
|   ├── /*
├── 404.php
├── footer.php
├── functions.php
├── header.php
├── index.php
├── package-lock.json
├── page.php
├── README.md
├── screenshot.php
├── single.php
├── style.css
```

## How It Works

### Theme Features
1. **ACF (Advanced Custom Fields)**:
   - Pre-built components stored in a JSON file for easy reuse.

2. **Assets**:
   - Centralized storage for all media assets, including:
      - Images
      - PDFs
      - Videos

3. **CSS**:
   - Global stylesheets for the entire site, including.
      - Custom styles
      - Bootstrap 4 framework

4. **Custom Functions**:
   - Collection of reusable PHP functions for custom functionality
      - Registering CPT
      - Registering ACF Blocks

### Code Overview

#### Templates Directory
- include/components contains all components folders and its PHP/SCSS files

#### Assets Directory
- `css/style.css`: Contains custom CSS for the theme generated by css/style.scss.

## Technical Specification

### NPM Package for SCSS and Bootstrap4
- under theme folder
   - `npm install -g npm@latest`
- For bootstrap - under css folder
    - `npm install bootstrap@4`
- For SASS Watcher
    - `npm install -g sass`
- To Watch SASS file under css folder
   - `cd css` under themes
    - `sass --watch style.scss:style.css`

## Temporary Test URL
[Dev Test](https://test-dev.local/)

## WP Admin Access
[Dev Test URL](https://test-dev.local/wp-admin/)
- `Username` wp@virtualimage.ca
- `Password` VI321##

## Git Repository
[GitHub - Dev Test](https://github.com/qasidsaleh/virtual-image-custom-theme)


## Next Steps
- Enhancements: Add more custom components for richer content display.

#### Thank you for using this Custom Theme! 

## Author
Qasid Saleh