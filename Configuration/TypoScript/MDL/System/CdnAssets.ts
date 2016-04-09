##################################################
#   Include default CSS and JS files
#
    page {
        includeCSSLibs {
            materialDesignLite = {$const.materialDesignLite.url.base}{$const.materialDesignLite.file.css.minified}
            materialDesignLite {
                external = 1
                forceOnTop = 1
                disableCompression = 1
                excludeFromConcatenation = 1
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
    
    
    