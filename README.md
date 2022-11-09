# Candy Shop Site Editor (FSE) Theme

A mega-simple block theme built to display candy cards!


## Description

This is a custom FSE WP theme built to display simple content and a candy card block (which is a plugin that must be downloaded and installed separately!). Test out the editing capabilities in the index template, or directly on a page/post!

## Installation

1. Install a fresh version of WP
1. Upload the `candyshop-fse-theme` files to the `/wp-content/themes` directory, or install the `candyshop-fse-theme` (zipped) through the WordPress themes screen directly.
2. Activate the theme through the 'Themes' screen in WordPress
3. Replace the `/wp-content/uploads` folder with the `uploads.zip` included in this repo 
4. Import the `candyshop-fse-db.sql` to your fresh version of WP, and utilize search/replace (ideally using WP-CLI) to replace the `http://candyshop.local` URLs with your fresh WP version URL.
- *You will need to add a user or directly edit the `bnmears` user password to login to the admin!*

## What you should see
### == Admin ==

![image](https://user-images.githubusercontent.com/20464603/200953931-ee6faad8-b256-4c26-9072-47e104124dce.png)

### == Front-end/Index template ==

![image](https://user-images.githubusercontent.com/20464603/200953984-2639a4e4-00aa-4b74-a209-f9d79761f272.png)

## Moving Forward

Some things I would do moving forward: 

1. Dive more into the FSE build and attempt some custom Gutenberg blocks that leverages PHP a bit deeper
2. Of course, actually add webpack/gulp to the project to organize (and compile) the CSS as the theme grows larger
