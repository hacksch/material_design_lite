##################################################
#   Include default CSS and JS files
#
    page {
        includeCSSLibs {
              # default style
            materialDesignLite = {$const.materialDesignLite.url.base}{$const.materialDesignLite.file.css.minified}
            materialDesignLite {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
                if.isFalse = {$const.materialDesignLite.color-scheme}
            }
              # with color scheme
              # http://www.getmdl.io/customize/index.html
            materialDesignLiteColor = {$const.materialDesignLite.url.base}{$const.materialDesignLite.file.css.minified.color-scheme}
            materialDesignLiteColor {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
                if.isTrue = {$const.materialDesignLite.color-scheme}
            }
            
            materialIcons = {$const.materialDesignLite.file.css.icons}
            materialIcons {
                external = 1
                disableCompression = 1
                excludeFromConcatenation = 1
            }
        }
        includeJSFooterlibs {
            materialDesignLite = {$const.materialDesignLite.url.base}{$const.materialDesignLite.file.js.minified}
            materialDesignLite {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
            }
        }
    }
    
    
    