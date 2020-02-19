# Glacial Indifference Webfont

WordPress plugin that loads Glacial Indifference as webfont

## About Glacial Indifference

**Glacial Indifference** is a geometric sans serif webfont, designed by Alfredo Marco Pradil ([Hanken Design Co.](https://hanken.co/products/glacial-indifference)), and released under the SIL OFL license.

## About this plugin

This plugin provides a simple way to load the font in WordPress.

The plugin loads the webfont files (WOFF2 and WOFF format) that were produced through the FontSquirrel service.

The font is loaded in CSS with the name : 'glacial-indifference-webfont'.

When the plugin is activated, the webfont will be available, but you still need to apply the CSS. You could to something like this:

```css
body * {
    font-family: 'glacial-indifference-webfont', Futura, sans-serif;  
}
```

The following variants will be available:

- regular (font-weight: 400;font-style: normal;)
- bold (font-weight: 700; font-style: normal;)
- italic (font-weight: 400; font-style: italic;)
