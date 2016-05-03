##############################
#
# content element wrapper

tt_content.stdWrap.innerWrap.cObject.default.20.10 >
tt_content.stdWrap.innerWrap.cObject.default.20.10 = COA
tt_content.stdWrap.innerWrap.cObject.default.20.10 {

    # responsive settings
  10 = TEXT
  10 {
    value = csc-default mdl-cell
    required = 1
    noTrimWrap = || |
  }
  
  15 = TEXT
  15 {
    value = mdl-card
    noTrimWrap = || |
    if.value = 20
    if.equals.field = layout
  }
  
  20 = TEXT
  20 {
    field = tx_material_design_lite_grid_desktop
    noTrimWrap = |mdl-cell--|-col-desktop |
    if.isTrue.field = tx_material_design_lite_grid_desktop
  }
  30 = TEXT
  30 {
    field = tx_material_design_lite_grid_tablet
    noTrimWrap = |mdl-cell--|-col-tablet |
    if.isTrue.field = tx_material_design_lite_grid_tablet
  }
  40 = TEXT
  40 {
    field = tx_material_design_lite_grid_phone
    noTrimWrap = |mdl-cell--|-col-phone|
    if.isTrue.field = tx_material_design_lite_grid_phone
  }
  
    # outer shadow
  60 = TEXT
  60 {
    field = tx_material_design_lite_card_shadow
    noTrimWrap = | mdl-shadow--|dp|
    if.isTrue.field = tx_material_design_lite_card_shadow
  }
}
