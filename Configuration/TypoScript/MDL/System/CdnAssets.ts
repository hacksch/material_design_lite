##################################################
#   Include default CSS and JS files
#
    page {
        includeCSSLibs {
            materialDesignLite = {$plugin.materialDesignLite.url.base}{$plugin.materialDesignLite.file.css.minified}
            materialDesignLite {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
            }
            materialIcons = {$plugin.materialDesignLite.file.css.icons}
            materialIcons {
                external = 1
                disableCompression = 1
                excludeFromConcatenation = 1
            }
        }
        includeJSFooterlibs {
            materialDesignLite = {$plugin.materialDesignLite.url.base}{$plugin.materialDesignLite.file.js.minified}
            materialDesignLite {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
            }
        }
    }
    
    
    