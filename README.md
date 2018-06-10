# germ-blog-theme
A WordPress theme for germ.blog.

### Requirements
This theme was built using the following tools. Older versions of this
 utilities may be supported, but have not been tested:
- Composer 1.6.5
- NPM 6.1.0

### Installation
1. Clone this repository into your WordPress themes directory.
2. From the theme directory, run: `composer install`, then `npm install`.
3. Next, run `npm run build` to generate theme assets.
3. Activate the theme in WordPress!

At some point, I'll extend this build tools so the process is more simplified,
but right now, my goal is to get a working theme together and to learn how
to leverage Webpack in the process. This project is as much about modern
build tool exploration as it is about getting my blog up and running.

### Development
Following installation, you can call `npm run watch` from the theme root
to launch the theme in your browser and make any style, template, or
JS behavior enhancements and see them update in real time thanks to the
glory of Browser Sync.