# material_design_lite
Google Material Design Lite implementation for TYPO3

## Features

* Static templates to use local or CDN resources
* Use predefined color schemes (CDN resources only), see http://www.getmdl.io/customize/index.html

## Short introductions

### Want to use my own generated css file
* since 1.0.0
* only Local Resources Template

Have a look to the const.materialDesignLite.path, const.materialDesignLite.file.css and const.materialDesignLite.file.js.minified subparts

TypoScript constant example:
```
const.materialDesignLite {
    path {
        relPrefix = fileadmin/templates/
        styles = {$const.materialDesignLite.path.relPrefix}/Css/ 
        scripts = {$const.materialDesignLite.path.relPrefix}/JavaScript/
    }
    file {
        css.minified = your.material.min.css
        css.icons = your.material-icons.css
        
        js.minified = your.material.min.js
    }
}
```

### Use another MDL version 
* since 1.1.0
* only CDN Resources Template

TypoScript constant:
```
const.materialDesignLite.url.version = 1.0.6 
```

### How to use color schemes 
* since 1.2.0
* only CDN Resources Template

For possible primary and accent color combinations have a look at http://www.getmdl.io/customize/index.html

TypoScript constant:
```
const.materialDesignLite.color-scheme = brown-light_green 
```

# License
GPL 3.0+

## Material Design Lite
© Google, 2015. Licensed under an Apache-2 license.