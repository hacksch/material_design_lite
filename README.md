# material_design_lite
Google Material Design Lite implementation for TYPO3

## Features

* Static templates to use local or CDN resources
* Use predefined color schemes (CDN resources only), see http://www.getmdl.io/customize/index.html

## Short introductions

### Want to use my own generated css file
* since 2.0.0
* only Local Resources Template

Have a look to the plugin.materialDesignLite.path, plugin.materialDesignLite.file.css and plugin.materialDesignLite.file.js.minified subparts

TypoScript constant example:
```
plugin.materialDesignLite {
    path {
        relPrefix = fileadmin/templates/
        styles = {$plugin.materialDesignLite.path.relPrefix}/Css/ 
        scripts = {$plugin.materialDesignLite.path.relPrefix}/JavaScript/
    }
    file {
        css.minified = your.material.min.css
        css.icons = your.material-icons.css
        
        js.minified = your.material.min.js
    }
}
```

### Use another MDL version 
* since 2.0.0
* only CDN Resources Template

TypoScript constant:
```
plugin.materialDesignLite.url.version = 1.0.6 
```

### How to use color schemes 
* since 2.0.0
* only CDN Resources Template

For possible primary and accent color combinations have a look at http://www.getmdl.io/customize/index.html

TypoScript constant:
```
plugin.materialDesignLite.color-scheme = brown-light_green 
```

# License
GPL 3.0+

## Material Design Lite
© Google, 2015. Licensed under an Apache-2 license.