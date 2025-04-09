
# Virtual Image Custom Theme

## The Problem to Be Solved
I created this custom theme after noticing that the Understrap theme used with a child theme, contained a lot of unnecessary and unused code. To address this, I developed a streamlined custom theme with clean, accurate code. It's designed to be easy to refine or customize based on specific project requirements.

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
|   |   ├── _buttons.scss 
|   |   ├── _typography.scss
|   |   ├── colours.scss
|   |   ├── normalize.scss
|   ├── _footer.scss
|   ├── _header.scss
|   ├── _layout.scss
|   ├── package-lock.json
|   ├── package.json
|   ├── style.css
|   ├── style.css.map
|   ├── style.scss
├── custom-functions/
|   ├── register-acf-blocks.php
|   ├── register-cpt.php
├── fonts/
├── includes/
|   ├── buttons/
|   |   ├── btn-primary.php
|   |   ├── btn-secondary.php
|   ├── components/
|   |   ├── grid/
|   |   |   ├── grid.php
|   |   |   ├── grid.scss
|   |   ├── hero/
|   |   |   ├── hero.php
|   |   |   ├── hero.scss
├── js/
|   ├── scripts.js 
├── page-templates
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
1. **ACF**:
   - It contains pre build components json file

2. **Assets**:
   - It includes all assets e.g (images, pdfs, videos)

3. **CSS**:
   - It includes all stylesheets side wide and bootstrap 4.

4. **Custom Functions**:
   - It includes all custom functions files e.g ().

### Code Overview

#### Templates Directory
icnlude/components Contains all componnets folders and its PHP/SCSS files

#### Assets Directory
- `css/style.css`: Contains custom CSS for the theme.

## Technical Specification

### NPM Package for SCSS and Bootstrap4
- under theme folder
- npm install -g npm@latest
- for bootstrap - under css folder
    - `npm install bootstrap@4`
- For SASS Watcher
    - `npm install -g sass`
- To Watch SASS file
    - `sass --watch css/style.scss:style.css`

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