require('dotenv').config()

const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
const mysqldump = require("mysqldump");
require("laravel-mix-purgecss");

/* ==========================================================================
  Config
  ========================================================================== */
if (mix.inProduction()) {
  mysqldump({
    connection: {
      host: process.env.DB_HOST,
      user: process.env.DB_USER,
      password: process.env.DB_PASS,
      database: process.env.DB_NAME,
    },
    dumpToFile: "./" + process.env.DB_NAME + '.sql',
  });
}


/* ==========================================================================
  Config
  ========================================================================== */
const config = {
  siteUrl: process.env.SITE_URL,
  proxyUrl: process.env.SITE_URL,
  // browser: "google chrome",
  port: 3000,
  openOnStart: true,
  pathToLocalSSLCert: "",
  pathToLocalSSLKey: "",
  filesToWatch: [
    "./**/*.php",
    "./**/*.html",
    "assets/css/**/*.css",
    "assets/css/**/*.scss",
    "assets/js/**/*.js",
    "assets/tailwind.config.js",
  ],
};

/* ==========================================================================
    Purge CSS Extractors
    ========================================================================== */
class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g) || [];
  }
}
/* ==========================================================================
  Laravel Mix Config
  ========================================================================== */

  mix.js(["./assets/js/app.js", "./assets/js/navigation.js"], "./dist/js/bundle.js");
  mix.js("./assets/js/slider.js", "./dist/js/slider.js");
mix
  .sass("./assets/css/app.scss", "./dist/css/bundle.css")
  .options({
    processCssUrls: false,
    postCss: [
      tailwindcss("./tailwind.config.js"),
      require("autoprefixer")({
        browsers: ["last 40 versions"],
      }),
    ],
  })
  .purgeCss({
    enabled: mix.inProduction(),
    content: [
      path.join(__dirname, "./**/*.php"),
      path.join(__dirname, "./template-parts/**/*.php"),
      path.join(__dirname, "./page-templates/**/*.php"),
      path.join(__dirname, "./src/**/*.php"),
      path.join(__dirname, "./" + process.env.DB_NAME + '.sql'),
    ],
    whitelist: [
      // "list-disc",
      // "list-decimal",
      // "w-auto",
      // "bg-fixed",
      // "bg-no-repeat",
      // "bg-cover",
      // "bg-center",
      // "w-1/2",
      // "sr-only",
      // "w-1/2",
      // "pr-4",
      // "mr-4", 
      // "border-r", 
      // "border-gray-300",
    ],
    whitelistPatterns: [/wpcf7$/],
  });

if (mix.inProduction()) {
  mix.minify("./dist/css/bundle.css");
  mix.minify("./dist/js/bundle.js");
}

if (!mix.inProduction()) {
  // BrowserSync
  mix.browserSync({
    browser: config.browser,
    proxy: config.proxyUrl,
    host: config.siteUrl,
    open: config.openOnStart,
    port: config.port,
    https: {
      key: config.pathToLocalSSLKey,
      cert: config.pathToLocalSSLCert,
    },
    files: config.filesToWatch,
  });
}
