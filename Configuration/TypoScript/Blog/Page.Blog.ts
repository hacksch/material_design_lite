##################################
# Material Design Lite
#
# Template: Blog
#

page = PAGE
page {
  meta {
    author.data = levelfield:-1, author, slide
    keywords.field = keywords
    description.field = description
    viewport = width=device-width, initial-scale=1.0
  }
  
  10 = FLUIDTEMPLATE
  10 {
    format = html
    
    file.stdWrap.cObject = CASE
    file.stdWrap.cObject {
      key.data = levelfield:-1, backend_layout_next_level, slide
      key.override.field = backend_layout
        
      default = TEXT
      default.value = fileadmin/blog/blog.html
    }
    
    partialRootPath = fileadmin/blog/partials/
    layoutRootPath = fileadmin/blog/layouts/
    variables {
        content < styles.content.get
        content.select.where = colPos = 0
    }
  }
}