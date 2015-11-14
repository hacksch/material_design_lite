##################################################
#   Include default CSS and JS files
#
    page {
        includeCSSLibs {
            materialDesignLite = {$const.materialDesignLite.path.styles}{$const.materialDesignLite.file.css.minified}
            materialDesignLite {
                media = all
                compress = 0
                forceOnTop = 1
            }
        }
        includeJSFooterlibs {
            materialDesignLite = {$const.materialDesignLite.path.scripts}{$const.materialDesignLite.file.js.minified}
            materialDesignLite {
                compress = 0
                forceOnTop = 1
            }
        }
    }