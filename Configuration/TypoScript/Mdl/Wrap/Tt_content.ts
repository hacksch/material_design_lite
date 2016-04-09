##############################
#
# content element wrapper

tt_content.stdWrap.innerWrap.cObject.default.20.10 >
tt_content.stdWrap.innerWrap.cObject.default.20.10 = COA
tt_content.stdWrap.innerWrap.cObject.default.20.10 {
  10 = TEXT
  10 {
    value = csc-default mdl-card mdl-cell
    required = 1
    noTrimWrap = || |
  }
  20 = TEXT
  20 {
    field = tx_material_design_lite_grid_default
    noTrimWrap = |mdl-cell--|-col |
  }
  30 = TEXT
  30 {
    field = tx_material_design_lite_grid_desktop
    noTrimWrap = |mdl-cell--|-col-desktop |
    if.isTrue.field = tx_material_design_lite_grid_desktop
  }
  40 = TEXT
  40 {
    field = tx_material_design_lite_grid_tablet
    noTrimWrap = |mdl-cell--|-col-tablet |
    if.isTrue.field = tx_material_design_lite_grid_tablet
  }
  50 = TEXT
  50 {
    field = tx_material_design_lite_grid_phone
    noTrimWrap = |mdl-cell--|-col-phone|
    if.isTrue.field = tx_material_design_lite_grid_phone
  }
}
