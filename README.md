base-theme
---------------

Installation
---------------

### Requirements
`base-theme` requires the following dependencies:

- [Node.js](https://nodejs.org/)
- [Composer](https://getcomposer.org/)

## Download the repository
https://github.com/DinkumInteractive/base-theme

## Setup
To start using all the tools that come with base-theme you need to install the necessary Node.js and Composer dependencies :

```sh
$ npm run start
$ npm run watch
```
### Available CLI commands

`base-theme` comes packed with CLI commands tailored for WordPress theme development :

- `npm run start` : run composer install, npm install and then the npm run build command.
- `npm run build` : build, compile and optimize the assets into dist folder to publish them in production env.
- `npm run dev` : build and compile the assets into dist folder without compression or optimization to be used in dev env.
- `npm run watch` : watches all SASS and JS files and recompiles them to css/js when they change.
- `npm run watch-html` : creates a local server and watches all SASS and JS files and recompiles them to css/js when they change.
- `npm run lint-css` : checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run lint-js` : checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/)
- `npm run lint-php` : checks syntax of PHP files faster than serial check with a fancier output.
- `npm run format-js` : checks all JS files for syntax errors and attempt to fix them.
- `npm run format-css` : checks all SASS files for syntax errors and attempt to fix them.
- `npm run format-php` : checks all PHP files for syntax errors and attempt to fix them.
- `npm run lint` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/), checks all JavaScript files against [JavaScript Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/javascript/) and checks all SASS files against [CSS Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/css/).
- `npm run format` : checks all PHP, JS and SASS files for syntax errors and attempt to fix them.
- `npm run test-a11y` : run accessibility tests to identify WCAG2AA errors.
- `composer make-pot` : generates a .pot file in the `language/` directory.
<!-- - `npm run bundle` : generates a .zip archive for distribution, excluding development and system files. -->

### Accessibility tests
The command `npm run test-a11y` run tests to identify WCAG2AA issues in the page html.
You can specify which urls you want to test adding them in package.json file in the *testing -> urls* setion, by default "homepage, article, search-results and local" are available, but you can add as many as you need and you can use online domains if necessary.

The `local` url will be used by default. To run tests over a specific url, the command will be `npm run test-a11y {URL_KEY}`, for example `npm run test-a11y article`.

**Note:** Only Errors results will be displayed, to add Warnings to the result, you can change `includeWarnings: false` to `includeWarnings: true` in *pa11y.js* file.
