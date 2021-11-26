<html dir="ltr" lang="fr" class="focus-outline-visible"><head>
  <title>Extrait de naissance</title>
  <meta charset="utf-8">
  <meta name="color-scheme" content="light dark">
  <base href="chrome://print">
  <style>
    html {
      background: white;
      /* Remove 300ms delay for 'click' event, when using touch interface. */
      touch-action: manipulation;
    }

    @media (prefers-color-scheme: dark) {
      html {
        background: rgb(40, 41, 44);
      }
    }

    html,
    body {
      height: 100%;
      margin: 0;
      overflow: hidden;
      width: 100%;
    }

    .loading body {
    }

    .loading body::before {
      background: rgb(218, 220, 224);  /* --google-grey-refresh-300 */
      border-bottom-width: 0;
      border-color: rgb(232, 234, 237);
      border-inline-end-width: 1px;
      border-inline-start-width: 0;
      border-style: solid;
      border-top-width: 0;
      content: '';
      display: block;
      height: 100%;
      width: calc(100% - 385px);  /* --print-preview-sidebar-width */
    }

    @media (prefers-color-scheme: dark) {
      .loading body::before {
        background: rgb(95, 99, 104);  /* --google-grey-refresh-700 */
        border-color: rgba(40, 41, 44, .9);
      }
    }
  </style>
<custom-style>
  <style is="custom-style" css-build="shadow">html {
  --google-red-100-rgb: 244, 199, 195;  
      --google-red-100: rgb(var(--google-red-100-rgb));
      --google-red-300-rgb: 230, 124, 115;  
      --google-red-300: rgb(var(--google-red-300-rgb));
      --google-red-500-rgb: 219, 68, 55;  
      --google-red-500: rgb(var(--google-red-500-rgb));
      --google-red-700-rgb: 197, 57, 41;  
      --google-red-700: rgb(var(--google-red-700-rgb));

      --google-blue-100-rgb: 198, 218, 252;  
      --google-blue-100: rgb(var(--google-blue-100-rgb));
      --google-blue-300-rgb: 123, 170, 247;  
      --google-blue-300: rgb(var(--google-blue-300-rgb));
      --google-blue-500-rgb: 66, 133, 244;  
      --google-blue-500: rgb(var(--google-blue-500-rgb));
      --google-blue-700-rgb: 51, 103, 214;  
      --google-blue-700: rgb(var(--google-blue-700-rgb));

      --google-green-100-rgb: 183, 225, 205;  
      --google-green-100: rgb(var(--google-green-100-rgb));
      --google-green-300-rgb: 87, 187, 138;  
      --google-green-300: rgb(var(--google-green-300-rgb));
      --google-green-500-rgb: 15, 157, 88;  
      --google-green-500: rgb(var(--google-green-500-rgb));
      --google-green-700-rgb: 11, 128, 67;  
      --google-green-700: rgb(var(--google-green-700-rgb));

      --google-yellow-100-rgb: 252, 232, 178;  
      --google-yellow-100: rgb(var(--google-yellow-100-rgb));
      --google-yellow-300-rgb: 247, 203, 77;  
      --google-yellow-300: rgb(var(--google-yellow-300-rgb));
      --google-yellow-500-rgb: 244, 180, 0;  
      --google-yellow-500: rgb(var(--google-yellow-500-rgb));
      --google-yellow-700-rgb: 240, 147, 0;  
      --google-yellow-700: rgb(var(--google-yellow-700-rgb));

      --google-grey-100-rgb: 245, 245, 245;  
      --google-grey-100: rgb(var(--google-grey-100-rgb));
      --google-grey-300-rgb: 224, 224, 224;  
      --google-grey-300: rgb(var(--google-grey-300-rgb));
      --google-grey-500-rgb: 158, 158, 158;  
      --google-grey-500: rgb(var(--google-grey-500-rgb));
      --google-grey-700-rgb: 97, 97, 97;  
      --google-grey-700: rgb(var(--google-grey-700-rgb));

      

      --paper-red-50: #ffebee;
      --paper-red-100: #ffcdd2;
      --paper-red-200: #ef9a9a;
      --paper-red-300: #e57373;
      --paper-red-400: #ef5350;
      --paper-red-500: #f44336;
      --paper-red-600: #e53935;
      --paper-red-700: #d32f2f;
      --paper-red-800: #c62828;
      --paper-red-900: #b71c1c;
      --paper-red-a100: #ff8a80;
      --paper-red-a200: #ff5252;
      --paper-red-a400: #ff1744;
      --paper-red-a700: #d50000;

      --paper-light-blue-50: #e1f5fe;
      --paper-light-blue-100: #b3e5fc;
      --paper-light-blue-200: #81d4fa;
      --paper-light-blue-300: #4fc3f7;
      --paper-light-blue-400: #29b6f6;
      --paper-light-blue-500: #03a9f4;
      --paper-light-blue-600: #039be5;
      --paper-light-blue-700: #0288d1;
      --paper-light-blue-800: #0277bd;
      --paper-light-blue-900: #01579b;
      --paper-light-blue-a100: #80d8ff;
      --paper-light-blue-a200: #40c4ff;
      --paper-light-blue-a400: #00b0ff;
      --paper-light-blue-a700: #0091ea;

      --paper-yellow-50: #fffde7;
      --paper-yellow-100: #fff9c4;
      --paper-yellow-200: #fff59d;
      --paper-yellow-300: #fff176;
      --paper-yellow-400: #ffee58;
      --paper-yellow-500: #ffeb3b;
      --paper-yellow-600: #fdd835;
      --paper-yellow-700: #fbc02d;
      --paper-yellow-800: #f9a825;
      --paper-yellow-900: #f57f17;
      --paper-yellow-a100: #ffff8d;
      --paper-yellow-a200: #ffff00;
      --paper-yellow-a400: #ffea00;
      --paper-yellow-a700: #ffd600;

      --paper-orange-50: #fff3e0;
      --paper-orange-100: #ffe0b2;
      --paper-orange-200: #ffcc80;
      --paper-orange-300: #ffb74d;
      --paper-orange-400: #ffa726;
      --paper-orange-500: #ff9800;
      --paper-orange-600: #fb8c00;
      --paper-orange-700: #f57c00;
      --paper-orange-800: #ef6c00;
      --paper-orange-900: #e65100;
      --paper-orange-a100: #ffd180;
      --paper-orange-a200: #ffab40;
      --paper-orange-a400: #ff9100;
      --paper-orange-a700: #ff6500;

      --paper-grey-50: #fafafa;
      --paper-grey-100: #f5f5f5;
      --paper-grey-200: #eeeeee;
      --paper-grey-300: #e0e0e0;
      --paper-grey-400: #bdbdbd;
      --paper-grey-500: #9e9e9e;
      --paper-grey-600: #757575;
      --paper-grey-700: #616161;
      --paper-grey-800: #424242;
      --paper-grey-900: #212121;

      --paper-blue-grey-50: #eceff1;
      --paper-blue-grey-100: #cfd8dc;
      --paper-blue-grey-200: #b0bec5;
      --paper-blue-grey-300: #90a4ae;
      --paper-blue-grey-400: #78909c;
      --paper-blue-grey-500: #607d8b;
      --paper-blue-grey-600: #546e7a;
      --paper-blue-grey-700: #455a64;
      --paper-blue-grey-800: #37474f;
      --paper-blue-grey-900: #263238;

      
      --dark-divider-opacity: 0.12;
      --dark-disabled-opacity: 0.38; 
      --dark-secondary-opacity: 0.54;
      --dark-primary-opacity: 0.87;

      
      --light-divider-opacity: 0.12;
      --light-disabled-opacity: 0.3; 
      --light-secondary-opacity: 0.7;
      --light-primary-opacity: 1.0;
}

</style>
</custom-style>
<custom-style>
<style is="custom-style" css-build="shadow">html {
  --google-blue-50-rgb: 232, 240, 254;  
    --google-blue-50: rgb(var(--google-blue-50-rgb));
    --google-blue-200-rgb: 174, 203, 250;  
    --google-blue-200: rgb(var(--google-blue-200-rgb));
    --google-blue-600-rgb: 26, 115, 232;  
    --google-blue-600: rgb(var(--google-blue-600-rgb));

    --google-grey-50-rgb: 248, 249, 250;  
    --google-grey-50: rgb(var(--google-grey-50-rgb));
    --google-grey-200-rgb: 232, 234, 237;  
    --google-grey-200: rgb(var(--google-grey-200-rgb));
    --google-grey-400-rgb: 189, 193, 198;  
    --google-grey-400: rgb(var(--google-grey-400-rgb));
    --google-grey-600-rgb: 128, 134, 139;  
    --google-grey-600: rgb(var(--google-grey-600-rgb));
    --google-grey-800-rgb: 60, 64, 67;  
    --google-grey-800: rgb(var(--google-grey-800-rgb));
    --google-grey-900-rgb: 32, 33, 36;  
    --google-grey-900: rgb(var(--google-grey-900-rgb));
    
    --google-grey-900-white-4-percent: #292a2d;

    --google-red-600-rgb: 217, 48, 37;  
    --google-red-600: rgb(var(--google-red-600-rgb));

    --google-yellow-50-rgb: 254, 247, 224;  
    --google-yellow-50: rgb(var(--google-yellow-50-rgb));

    
    --google-blue-refresh-100-rgb: 210, 227, 252;  
    --google-blue-refresh-100: rgb(var(--google-blue-refresh-100-rgb));
    --google-blue-refresh-300-rgb: 138, 180, 248;  
    --google-blue-refresh-300: rgb(var(--google-blue-refresh-300-rgb));
    --google-blue-refresh-400-rgb: 102, 157, 246;  
    --google-blue-refresh-400: rgb(var(--google-blue-refresh-400-rgb));
    --google-blue-refresh-500-rgb: 66, 133, 244;  
    --google-blue-refresh-500: rgb(var(--google-blue-refresh-500-rgb));
    --google-blue-refresh-700-rgb: 25, 103, 210;  
    --google-blue-refresh-700: rgb(var(--google-blue-refresh-700-rgb));

    --google-green-refresh-300-rgb: 129, 201, 149;  
    --google-green-refresh-300: rgb(var(--google-green-refresh-300-rgb));
    --google-green-refresh-400-rgb: 91, 185, 116;  
    --google-green-refresh-400: rgb(var(--google-green-refresh-400-rgb));
    --google-green-refresh-500-rgb: 52, 168, 83;  
    --google-green-refresh-500: rgb(var(--google-green-refresh-500-rgb));
    --google-green-refresh-700-rgb: 24, 128, 56;  
    --google-green-refresh-700: rgb(var(--google-green-refresh-700-rgb));

    --google-grey-refresh-100-rgb: 241, 243, 244;  
    --google-grey-refresh-100: rgb(var(--google-grey-refresh-100-rgb));
    --google-grey-refresh-300-rgb: 218, 220, 224;  
    --google-grey-refresh-300: rgb(var(--google-grey-refresh-300-rgb));
    --google-grey-refresh-500-rgb: 154, 160, 166;  
    --google-grey-refresh-500: rgb(var(--google-grey-refresh-500-rgb));
    --google-grey-refresh-700-rgb: 95, 99, 104;  
    --google-grey-refresh-700: rgb(var(--google-grey-refresh-700-rgb));

    --google-red-refresh-300-rgb: 242, 139, 130;  
    --google-red-refresh-300: rgb(var(--google-red-refresh-300-rgb));
    --google-red-refresh-500-rgb: 234, 67, 53;  
    --google-red-refresh-500: rgb(var(--google-red-refresh-500-rgb));

    --google-yellow-refresh-300-rgb: 253, 214, 51;  
    --google-yellow-refresh-300: rgb(var(--google-yellow-refresh-300-rgb));
    --google-yellow-refresh-400-rgb: 252, 201, 52;  
    --google-yellow-refresh-400: rgb(var(--google-yellow-refresh-400-rgb));
    --google-yellow-refresh-500-rgb: 251, 188, 4;  
    --google-yellow-refresh-500: rgb(var(--google-yellow-refresh-500-rgb));

    --cr-primary-text-color: var(--google-grey-900);
    --cr-secondary-text-color: var(--google-grey-refresh-700);

    --cr-card-background-color: white;
    --cr-card-shadow-color-rgb: var(--google-grey-800-rgb);

    --cr-elevation-1: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 2px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 1px 3px 1px;
    --cr-elevation-2: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 2px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 2px 6px 2px;
    --cr-elevation-3: rgba(var(--cr-card-shadow-color-rgb), .3) 0 1px 3px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 4px 8px 3px;
    --cr-elevation-4: rgba(var(--cr-card-shadow-color-rgb), .3) 0 2px 3px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 6px 10px 4px;
    --cr-elevation-5: rgba(var(--cr-card-shadow-color-rgb), .3) 0 4px 4px 0,
                      rgba(var(--cr-card-shadow-color-rgb), .15) 0 8px 12px 6px;

    --cr-card-shadow: var(--cr-elevation-1);

    --cr-checked-color: var(--google-blue-600);
    --cr-focused-item-color: var(--google-grey-300);
    --cr-form-field-label-color: var(--google-grey-refresh-700);
    --cr-hairline-rgb: 0, 0, 0;
    --cr-link-color: var(--google-blue-700);
    --cr-menu-background-color: white;
    --cr-menu-background-focus-color: var(--google-grey-400);
    --cr-menu-shadow: 0 2px 6px var(--paper-grey-500);
    --cr-separator-color: rgba(0, 0, 0, .06);
    --cr-title-text-color: rgb(90, 90, 90);
    --cr-toggle-color: var(--google-blue-500);
    --cr-toolbar-background-color: var(--google-blue-700);

    --cr-hover-background-color: rgba(var(--google-grey-900-rgb), .1);
    --cr-active-background-color: rgba(var(--google-grey-900-rgb), .16);
    --cr-focus-outline-color: rgba(var(--google-blue-600-rgb), .4);
}

@media (prefers-color-scheme: light) {
html[enable-branding-update] {
  --cr-toolbar-background-color: white;
}

}

@media (prefers-color-scheme: dark) {
html {
  --cr-primary-text-color: var(--google-grey-200);
      --cr-secondary-text-color: var(--google-grey-refresh-500);

      --cr-card-background-color: var(--google-grey-900-white-4-percent);
      --cr-card-shadow-color-rgb: 0, 0, 0;

      --cr-checked-color: var(--google-blue-refresh-300);
      --cr-focused-item-color: var(--google-grey-800);
      --cr-form-field-label-color: var(--dark-secondary-color);
      --cr-hairline-rgb: 255, 255, 255;
      --cr-link-color: var(--google-blue-refresh-300);
      --cr-menu-background-color: var(--google-grey-900);
      --cr-menu-background-focus-color: var(--google-grey-refresh-700);
      --cr-menu-background-sheen: rgba(255, 255, 255, .06);  
      --cr-menu-shadow: rgba(0, 0, 0, .3) 0 1px 2px 0,
                        rgba(0, 0, 0, .15) 0 3px 6px 2px;
      --cr-separator-color: rgba(255, 255, 255, .1);
      
      --cr-title-text-color: var(--cr-primary-text-color);
      --cr-toolbar-background-color: var(--google-grey-900-white-4-percent);

      --cr-hover-background-color: rgba(255, 255, 255, .1);
      --cr-active-background-color: rgba(var(--google-grey-200-rgb), .16);
      --cr-focus-outline-color: rgba(var(--google-blue-300-rgb), .4);
}

}

html {
  --cr-button-edge-spacing: 12px;
    --cr-button-height: 32px;

    
    --cr-controlled-by-spacing: 24px;

    
    --cr-default-input-max-width: 264px;

    
    --cr-icon-ripple-size: 36px;
    --cr-icon-ripple-padding: 8px;

    --cr-icon-size: 20px;

    --cr-icon-button-margin-start: 16px;

    
    --cr-icon-ripple-margin: calc(var(--cr-icon-ripple-padding) * -1);

    
    
    --cr-section-min-height: 48px;
    --cr-section-two-line-min-height: 64px;

    --cr-section-padding: 20px;
    --cr-section-vertical-padding: 12px;
    --cr-section-indent-width: 40px;
    --cr-section-indent-padding: calc(
        var(--cr-section-padding) + var(--cr-section-indent-width));

    --cr-section-vertical-margin: 21px;

    --cr-centered-card-max-width: 680px;
    --cr-centered-card-width-percentage: 0.96;

    --cr-hairline: 1px solid rgba(var(--cr-hairline-rgb), .14);

    --cr-separator-height: 1px;
    --cr-separator-line: var(--cr-separator-height) solid
        var(--cr-separator-color);

    --cr-toolbar-overlay-animation-duration: 150ms;
    --cr-toolbar-height: 56px;

    --cr-container-shadow-height: 6px;
    --cr-container-shadow-margin: calc(-1 * var(--cr-container-shadow-height));

    --cr-container-shadow-max-opacity: 1;

    
    --cr-card-border-radius: 4px;
    --cr-disabled-opacity: .38;
    --cr-form-field-bottom-spacing: 16px;
    --cr-form-field-label-font-size: .625rem;
    --cr-form-field-label-height: 1em;
    --cr-form-field-label-line-height: 1em;
}

html[enable-branding-update] {
  --cr-card-border-radius: 8px;
    --cr-card-shadow: var(--cr-elevation-2);
}

</style>
</custom-style>
<custom-style>
  <style is="custom-style" css-build="shadow">[hidden] {
  display: none !important;
}

</style>
</custom-style>
<custom-style>
  <style is="custom-style" css-build="shadow">html {
  --layout_-_display:  flex;;

      --layout-inline_-_display:  inline-flex;;

      --layout-horizontal_-_display:  var(--layout_-_display); --layout-horizontal_-_flex-direction:  row;;

      --layout-horizontal-reverse_-_display:  var(--layout_-_display); --layout-horizontal-reverse_-_flex-direction:  row-reverse;;

      --layout-vertical_-_display:  var(--layout_-_display); --layout-vertical_-_flex-direction:  column;;

      --layout-vertical-reverse_-_display:  var(--layout_-_display); --layout-vertical-reverse_-_flex-direction:  column-reverse;;

      --layout-wrap_-_flex-wrap:  wrap;;

      --layout-wrap-reverse_-_flex-wrap:  wrap-reverse;;

      --layout-flex-auto_-_flex:  1 1 auto;;

      --layout-flex-none_-_flex:  none;;

      --layout-flex_-_flex:  1; --layout-flex_-_flex-basis:  0.000000001px;;

      --layout-flex-2_-_flex:  2;;

      --layout-flex-3_-_flex:  3;;

      --layout-flex-4_-_flex:  4;;

      --layout-flex-5_-_flex:  5;;

      --layout-flex-6_-_flex:  6;;

      --layout-flex-7_-_flex:  7;;

      --layout-flex-8_-_flex:  8;;

      --layout-flex-9_-_flex:  9;;

      --layout-flex-10_-_flex:  10;;

      --layout-flex-11_-_flex:  11;;

      --layout-flex-12_-_flex:  12;;

      

      --layout-start_-_align-items:  flex-start;;

      --layout-center_-_align-items:  center;;

      --layout-end_-_align-items:  flex-end;;

      --layout-baseline_-_align-items:  baseline;;

      

      --layout-start-justified_-_justify-content:  flex-start;;

      --layout-center-justified_-_justify-content:  center;;

      --layout-end-justified_-_justify-content:  flex-end;;

      --layout-around-justified_-_justify-content:  space-around;;

      --layout-justified_-_justify-content:  space-between;;

      --layout-center-center_-_align-items:  var(--layout-center_-_align-items); --layout-center-center_-_justify-content:  var(--layout-center-justified_-_justify-content);;

      

      --layout-self-start_-_align-self:  flex-start;;

      --layout-self-center_-_align-self:  center;;

      --layout-self-end_-_align-self:  flex-end;;

      --layout-self-stretch_-_align-self:  stretch;;

      --layout-self-baseline_-_align-self:  baseline;;

      

      --layout-start-aligned_-_align-content:  flex-start;;

      --layout-end-aligned_-_align-content:  flex-end;;

      --layout-center-aligned_-_align-content:  center;;

      --layout-between-aligned_-_align-content:  space-between;;

      --layout-around-aligned_-_align-content:  space-around;;

      

      --layout-block_-_display:  block;;

      --layout-invisible_-_visibility:  hidden !important;;

      --layout-relative_-_position:  relative;;

      --layout-fit_-_position:  absolute; --layout-fit_-_top:  0; --layout-fit_-_right:  0; --layout-fit_-_bottom:  0; --layout-fit_-_left:  0;;

      --layout-scroll_-_-webkit-overflow-scrolling:  touch; --layout-scroll_-_overflow:  auto;;

      --layout-fullbleed_-_margin:  0; --layout-fullbleed_-_height:  100vh;;

      

      --layout-fixed-top_-_position:  fixed; --layout-fixed-top_-_top:  0; --layout-fixed-top_-_left:  0; --layout-fixed-top_-_right:  0;;

      --layout-fixed-right_-_position:  fixed; --layout-fixed-right_-_top:  0; --layout-fixed-right_-_right:  0; --layout-fixed-right_-_bottom:  0;;

      --layout-fixed-bottom_-_position:  fixed; --layout-fixed-bottom_-_right:  0; --layout-fixed-bottom_-_bottom:  0; --layout-fixed-bottom_-_left:  0;;

      --layout-fixed-left_-_position:  fixed; --layout-fixed-left_-_top:  0; --layout-fixed-left_-_bottom:  0; --layout-fixed-left_-_left:  0;;
}

</style>
</custom-style><style>[hidden] { display: none !important; }</style><!--_html_template_start_--><custom-style>
<style css-build="shadow">html {
  --print-preview-row-height: 38px;
    --print-preview-sidebar-width: 384px;
    --print-preview-title-width: 120px;
    --print-preview-sidebar-margin: 24px;
    
    --print-preview-dropdown-width: calc(var(--print-preview-sidebar-width)
        - var(--print-preview-title-width)
        - 3 * var(--print-preview-sidebar-margin));

    --print-preview-settings-border: 1px solid var(--google-grey-200);
    --print-preview-dialog-margin: 34px;
    --cr-form-field-label-height: initial;
    --cr-form-field-label-line-height: .75rem;
    --destination-item-height: 32px;
    --preview-area-background-color: var(--google-grey-refresh-300);
    --iron-icon-fill-color: var(--google-grey-refresh-700);
    --iron-icon-height: var(--cr-icon-size);
    --iron-icon-width: var(--cr-icon-size);
    --search-icon-size: 32px;
    --throbber-size: 16px;
}

@media (prefers-color-scheme: dark) {
html {
  --preview-area-background-color: var(--google-grey-refresh-700);
      --print-preview-settings-border: var(--cr-separator-line);
      --iron-icon-fill-color: var(--google-grey-refresh-500);
}

}

</style>
</custom-style>
<!--_html_template_end_--><!--_html_template_start_--><iron-iconset-svg name="print-preview" size="24" style="display: none;">
  <svg>
    <defs>
      <!-- Custom SVGs (namratakannan) -->
      <g id="printer-shared" viewBox="0 0 106 96">
        <path d="M44 59H32v26h12v11H21.2V74.462H0V42.154C0 33.215 7.102 26 15.9 26h74.2c8.798 0 15.9 7.215 15.9 16.154V59H91.393A15.943 15.943 0 0 0 93 52c0-8.84-7.16-16-16-16s-16 7.16-16 16c0 2.51.578 4.886 1.607 7H44zM84 0H21v22h63V0z"></path>
        <path d="M77 68c-9.679 0-29 6.253-29 18.667V96h58v-9.333C106 74.253 86.679 68 77 68zM77 64c6.63 0 12-5.37 12-12s-5.37-12-12-12-12 5.37-12 12 5.37 12 12 12z" fill="#4A93F9"></path>
      </g>
      <g id="short-edge" viewBox="0 0 26 20" fill-rule="evenodd">
        <path d="M2 14v2h2v-2H2zm12 4v2h2v-2h-2zm4 0v2h2v-2h-2zm3.556-18H4.444C3.1 0 2 1.35 2 3v6h2V2h18v7h2V3c0-1.65-1.1-3-2.444-3zM24 18h-2v2c1.1 0 2-.9 2-2zM0 10v2h26v-2H0zm6 8v2h2v-2H6zm16-4v2h2v-2h-2zm-12 4v2h2v-2h-2zm-8 0c0 1.1.9 2 2 2v-2H2z">
        <path d="M29-6v32H-3V-6z">
      </path></path></g>
      <g id="long-edge" viewBox="0 0 23 22" fill-rule="evenodd">
        <path d="M17 20h2v-2h-2v2zm4-12h2V6h-2v2zM0 4v14c0 1.1 1.35 2 3 2h6v-2H2V4h7V2H3c-1.65 0-3 .9-3 2zm21-2v2h2c0-1.1-.9-2-2-2zM10 22h2V0h-2v22zm11-6h2v-2h-2v2zM17 4h2V2h-2v2zm-4 16h2v-2h-2v2zm0-16h2V2h-2v2zm8 8h2v-2h-2v2zm0 8c1.1 0 2-.9 2-2h-2v2z">
        <path d="M-5-5h32v32H-5z">
      </path></path></g>

      <!-- Icon from http://icons/ -->
      <g id="save-to-drive">
        <path fill="none" d="M0 0h24v24H0z"></path>
        <path d="M20 6h-8l-2-2H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-8.5 11l-1.1-2.14 2.84-4.96 1.5 2.66L12.25 17h-.75zm6.8 0h-5.55l1.4-2.5h5.11l.26.46L18.3 17zm-4.55-8h2.39l2.84 5h-2.93l-2.56-4.54.26-.46z"></path>
      </g>

    

      <!--
      These icons are copied from Polymer's iron-icons and kept in sorted order.
      See http://goo.gl/Y1OdAq for instructions on adding additional icons.
      -->
      <g id="business"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"></path></g>
      <g id="smartphone"><path d="M17 1.01L7 1c-1.1 0-2 .9-2 2v18c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2V3c0-1.1-.9-1.99-2-1.99zM17 19H7V5h10v14z"></path></g>
      <g id="print"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"></path></g>
    </defs>
  </svg>
</iron-iconset-svg>
<!--_html_template_end_--><iron-iconset-svg name="cr20" size="20" style="display: none;">
  <svg>
    <defs>
      <!--
      Keep these in sorted order by id="". See also http://goo.gl/Y1OdAq
      -->
      <g id="domain">
        <path d="M2,3 L2,17 L11.8267655,17 L13.7904799,17 L18,17 L18,7 L12,7 L12,3 L2,3 Z M8,13 L10,13 L10,15 L8,15 L8,13 Z M4,13 L6,13 L6,15 L4,15 L4,13 Z M8,9 L10,9 L10,11 L8,11 L8,9 Z M4,9 L6,9 L6,11 L4,11 L4,9 Z M12,9 L16,9 L16,15 L12,15 L12,9 Z M12,11 L14,11 L14,13 L12,13 L12,11 Z M8,5 L10,5 L10,7 L8,7 L8,5 Z M4,5 L6,5 L6,7 L4,7 L4,5 Z">
        </path>
      </g>
      <g id="kite">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.6327 8.00094L10.3199 2L16 8.00094L10.1848 16.8673C10.0995 16.9873 10.0071 17.1074 9.90047 17.2199C9.42417 17.7225 8.79147 18 8.11611 18C7.44076 18 6.80806 17.7225 6.33175 17.2199C5.85545 16.7173 5.59242 16.0497 5.59242 15.3371C5.59242 14.977 5.46445 14.647 5.22275 14.3919C4.98104 14.1369 4.66825 14.0019 4.32701 14.0019H4V12.6667H4.32701C5.00237 12.6667 5.63507 12.9442 6.11137 13.4468C6.58768 13.9494 6.85071 14.617 6.85071 15.3296C6.85071 15.6896 6.97867 16.0197 7.22038 16.2747C7.46209 16.5298 7.77488 16.6648 8.11611 16.6648C8.45735 16.6648 8.77014 16.5223 9.01185 16.2747C9.02396 16.2601 9.03607 16.246 9.04808 16.2319C9.08541 16.1883 9.12176 16.1458 9.15403 16.0947L9.55213 15.4946L4.6327 8.00094ZM10.3199 13.9371L6.53802 8.17116L10.3199 4.1814L14.0963 8.17103L10.3199 13.9371Z">
        </path>
      </g>
      <g id="menu">
        <path d="M2 4h16v2H2zM2 9h16v2H2zM2 14h16v2H2z"></path>
      </g>
      
  </defs></svg>
</iron-iconset-svg>
<iron-iconset-svg name="cr" size="24" style="display: none;">
  <svg>
    <defs>
      <!--
      These icons are copied from Polymer's iron-icons and kept in sorted order.
      See http://goo.gl/Y1OdAq for instructions on adding additional icons.
      -->
      <g id="account-child-invert" viewBox="0 0 48 48">
        <path d="M24 4c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6 2.69-6 6-6z"></path>
        <path fill="none" d="M0 0h48v48H0V0z"></path>
        <circle fill="none" cx="24" cy="26" r="4"></circle>
        <path d="M24 18c-6.16 0-13 3.12-13 7.23v11.54c0 2.32 2.19 4.33 5.2 5.63 2.32 1 5.12 1.59 7.8 1.59.66 0 1.33-.06 2-.14v-5.2c-.67.08-1.34.14-2 .14-2.63 0-5.39-.57-7.68-1.55.67-2.12 4.34-3.65 7.68-3.65.86 0 1.75.11 2.6.29 2.79.62 5.2 2.15 5.2 4.04v4.47c3.01-1.31 5.2-3.31 5.2-5.63V25.23C37 21.12 30.16 18 24 18zm0 12c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z">
        </path>
      </g>
      <g id="add">
        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
      </g>
      <g id="arrow-back">
        <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"></path>
      </g>
      <g id="arrow-drop-up">
        <path d="M7 14l5-5 5 5z">
      </path></g>
      <g id="arrow-drop-down">
        <path d="M7 10l5 5 5-5z"></path>
      </g>
      <g id="arrow-forward">
        <path d="M12 4l-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
      </g>
      <g id="arrow-right">
        <path d="M10 7l5 5-5 5z"></path>
      </g>
      
      <g id="cancel">
        <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z">
        </path>
      </g>
      <g id="check">
        <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path>
      </g>
      <g id="check-circle">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z">
        </path>
      </g>
      <g id="chevron-left">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path>
      </g>
      <g id="chevron-right">
        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path>
      </g>
      <g id="clear">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
        </path>
      </g>
      <g id="close">
        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
        </path>
      </g>
      <g id="computer">
        <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z">
        </path>
      </g>
      <g id="delete">
        <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path>
      </g>
      <g id="domain">
        <path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z">
        </path>
      </g>
      <g id="error">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z">
        </path>
      </g>
      <g id="error-outline">
        <path d="M11 15h2v2h-2zm0-8h2v6h-2zm.99-5C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
        </path>
      </g>
      <g id="expand-less">
        <path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"></path>
      </g>
      <g id="expand-more">
        <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path>
      </g>
      <g id="extension">
        <path d="M20.5 11H19V7c0-1.1-.9-2-2-2h-4V3.5C13 2.12 11.88 1 10.5 1S8 2.12 8 3.5V5H4c-1.1 0-1.99.9-1.99 2v3.8H3.5c1.49 0 2.7 1.21 2.7 2.7s-1.21 2.7-2.7 2.7H2V20c0 1.1.9 2 2 2h3.8v-1.5c0-1.49 1.21-2.7 2.7-2.7 1.49 0 2.7 1.21 2.7 2.7V22H17c1.1 0 2-.9 2-2v-4h1.5c1.38 0 2.5-1.12 2.5-2.5S21.88 11 20.5 11z">
        </path>
      </g>
      <g id="file-download">
        <path d="M19 9h-4V3H9v6H5l7 7 7-7zM5 18v2h14v-2H5z"></path>
      </g>
      
      <g id="fullscreen">
        <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"></path>
      </g>
      <g id="group">
        <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z">
        </path>
      </g>
      <g id="help-outline">
        <path d="M11 18h2v-2h-2v2zm1-16C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm0-14c-2.21 0-4 1.79-4 4h2c0-1.1.9-2 2-2s2 .9 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5 0-2.21-1.79-4-4-4z">
        </path>
      </g>
      <g id="info">
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z">
        </path>
      </g>
      <g id="info-outline">
        <path d="M11 17h2v-6h-2v6zm1-15C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zM11 9h2V7h-2v2z">
        </path>
      </g>
      <g id="insert-drive-file">
        <path d="M6 2c-1.1 0-1.99.9-1.99 2L4 20c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6H6zm7 7V3.5L18.5 9H13z">
        </path>
      </g>
      <g id="location-on">
        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z">
        </path>
      </g>
      <g id="mic">
        <path d="M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z">
        </path>
      </g>
      <g id="more-vert">
        <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z">
        </path>
      </g>
      <g id="open-in-new">
        <path d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z">
        </path>
      </g>
      <g id="person">
        <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
        </path>
      </g>
      <g id="phonelink"><path d="M4 6h18V4H4c-1.1 0-2 .9-2 2v11H0v3h14v-3H4V6zm19 2h-6c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V9c0-.55-.45-1-1-1zm-1 9h-4v-7h4v7z"></path></g>
      <g id="print">
        <path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z">
        </path>
      </g>
      <g id="schedule"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"></path></g>
      <g id="search">
        <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
        </path>
      </g>
      <g id="security">
        <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z">
        </path>
      </g>
      
      <!-- The <g> IDs are exposed as global variables in Vulcanized mode, which
        conflicts with the "settings" namespace of MD Settings. Using an "_icon"
        suffix prevents the naming conflict. -->
      <g id="settings_icon">
        <path d="M19.43 12.98c.04-.32.07-.64.07-.98s-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.12-.22-.39-.3-.61-.22l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.23-.09-.49 0-.61.22l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.12.22.39.3.61.22l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.23.09.49 0 .61-.22l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zM12 15.5c-1.93 0-3.5-1.57-3.5-3.5s1.57-3.5 3.5-3.5 3.5 1.57 3.5 3.5-1.57 3.5-3.5 3.5z">
        </path>
      </g>
      <g id="star">
        <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
      </g>
      <g id="sync">
        <path d="M12 4V1L8 5l4 4V6c3.31 0 6 2.69 6 6 0 1.01-.25 1.97-.7 2.8l1.46 1.46C19.54 15.03 20 13.57 20 12c0-4.42-3.58-8-8-8zm0 14c-3.31 0-6-2.69-6-6 0-1.01.25-1.97.7-2.8L5.24 7.74C4.46 8.97 4 10.43 4 12c0 4.42 3.58 8 8 8v3l4-4-4-4v3z">
        </path>
      </g>
      <g id="videocam">
        <path d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z">
        </path>
      </g>
      <g id="warning">
        <path d="M1 21h22L12 2 1 21zm12-3h-2v-2h2v2zm0-4h-2v-4h2v4z"></path>
      </g>
    </defs>
  </svg>
</iron-iconset-svg>
</head>
<body>
  <print-preview-app></print-preview-app>
  <link rel="stylesheet" href="chrome://resources/css/text_defaults_md.css">
  <link rel="stylesheet" href="chrome://resources/css/md_colors.css">
  <script type="module" src="print_preview.js"></script>


<dom-module id="cr-hidden-style" assetpath="chrome://resources/">
  <template>
    <style scope="cr-hidden-style">[hidden], :host([hidden]) {
  display: none !important;
}

</style>
  </template>
</dom-module>
<dom-module id="cr-icons" assetpath="chrome://resources/">
  <template>
    <style scope="cr-icons">.icon-arrow-back {
  --cr-icon-image: url('chrome://resources/images/icon_arrow_back.svg');
}

.icon-arrow-dropdown {
  --cr-icon-image: url('chrome://resources/images/icon_arrow_dropdown.svg');
}

.icon-cancel {
  --cr-icon-image: url('chrome://resources/images/icon_cancel.svg');
}

.icon-clear {
  --cr-icon-image: url('chrome://resources/images/icon_clear.svg');
}

.icon-copy-content {
  --cr-icon-image: url('chrome://resources/images/icon_copy_content.svg');
}

.icon-delete-gray {
  --cr-icon-image: url('chrome://resources/images/icon_delete_gray.svg');
}

.icon-edit {
  --cr-icon-image: url('chrome://resources/images/icon_edit.svg');
}

.icon-picture-delete {
  --cr-icon-image: url('chrome://resources/images/icon_picture_delete.svg');
}

.icon-expand-less {
  --cr-icon-image: url('chrome://resources/images/icon_expand_less.svg');
}

.icon-expand-more {
  --cr-icon-image: url('chrome://resources/images/icon_expand_more.svg');
}

.icon-external {
  --cr-icon-image: url('chrome://resources/images/open_in_new.svg');
}

.icon-more-vert {
  --cr-icon-image: url('chrome://resources/images/icon_more_vert.svg');
}

.icon-refresh {
  --cr-icon-image: url('chrome://resources/images/icon_refresh.svg');
}

.icon-search {
  --cr-icon-image: url('chrome://resources/images/icon_search.svg');
}

.icon-settings {
  --cr-icon-image: url('chrome://resources/images/icon_settings.svg');
}

.icon-visibility {
  --cr-icon-image: url('chrome://resources/images/icon_visibility.svg');
}

.icon-visibility-off {
  --cr-icon-image: url('chrome://resources/images/icon_visibility_off.svg');
}

.subpage-arrow {
  --cr-icon-image: url('chrome://resources/images/arrow_right.svg');
}

.cr-icon {
  -webkit-mask-image: var(--cr-icon-image);
        -webkit-mask-position: center;
        -webkit-mask-repeat: no-repeat;
        -webkit-mask-size: var(--cr-icon-size);
        background-color: var(--google-grey-refresh-700);
        flex-shrink: 0;
        height: var(--cr-icon-ripple-size);
        margin-inline-end: var(--cr-icon-ripple-margin);
        margin-inline-start: var(--cr-icon-button-margin-start);
        user-select: none;
        width: var(--cr-icon-ripple-size);
}

:host-context([dir=rtl]) .cr-icon {
  transform: scaleX(-1);
}

.cr-icon.no-overlap {
  margin-inline-end: 0;
        margin-inline-start: 0;
}

@media (prefers-color-scheme: dark) {
.cr-icon {
  background-color: var(--google-grey-refresh-500);
}

}

</style>
  </template>
</dom-module>
<dom-module id="cr-shared-style" assetpath="chrome://resources/">
  <template>
    <style include="cr-hidden-style cr-icons" scope="cr-shared-style">html, :host {
  --scrollable-border-color: var(--google-grey-refresh-300);
}

@media (prefers-color-scheme: dark) {
html, :host {
  --scrollable-border-color: var(--google-grey-refresh-700);
}

}

[actionable] {
  cursor: pointer;
}

.hr {
  border-top: var(--cr-separator-line);
}

iron-list.cr-separators > *:not([first]) {
  border-top: var(--cr-separator-line);
}

[scrollable] {
  border-color: transparent;
        border-style: solid;
        border-width: 1px 0;
        overflow-y: auto;
}

[scrollable].is-scrolled {
  border-top-color: var(--scrollable-border-color);
}

[scrollable].can-scroll:not(.scrolled-to-bottom) {
  border-bottom-color: var(--scrollable-border-color);
}

[scrollable] iron-list > :not(.no-outline):focus, [selectable]:focus, [selectable] > :focus {
  background-color: var(--cr-focused-item-color);
        outline: none;
}

.scroll-container {
  display: flex;
        flex-direction: column;
        min-height: 1px;
}

[selectable] > * {
  cursor: pointer;
}

.cr-centered-card-container {
  box-sizing: border-box;
        display: block;
        height: inherit;
        margin: 0 auto;
        max-width: var(--cr-centered-card-max-width);
        min-width: 550px;
        position: relative;
        width: calc(100% * var(--cr-centered-card-width-percentage));
}

.cr-container-shadow {
  box-shadow: inset 0 5px 6px -3px rgba(0, 0, 0, .4);
        height: var(--cr-container-shadow-height);
        left: 0;
        margin: 0 0 var(--cr-container-shadow-margin);
        opacity: 0;
        pointer-events: none;
        position: relative;
        right: 0;
        top: 0;
        transition: opacity 500ms;
        z-index: 1;
}

#cr-container-shadow-bottom {
  margin-bottom: 0;
        margin-top: var(--cr-container-shadow-margin);
        transform: scaleY(-1);
}

#cr-container-shadow-top.has-shadow, #cr-container-shadow-bottom.has-shadow {
  opacity: var(--cr-container-shadow-max-opacity);
}

.cr-row {
  align-items: center;
        border-top: var(--cr-separator-line);
        display: flex;
        min-height: var(--cr-section-min-height);
        padding: 0 var(--cr-section-padding);
}

.cr-row.first, .cr-row.continuation {
  border-top: none;
}

.cr-row-gap {
  padding-inline-start: 16px;
}

.cr-button-gap {
  margin-inline-start: 8px;
}

paper-tooltip {
  --paper-tooltip_-_border-radius:  var(--paper-tooltip-border-radius, 2px); --paper-tooltip_-_font-size:  92.31%; --paper-tooltip_-_font-weight:  500; --paper-tooltip_-_max-width:  330px; --paper-tooltip_-_min-width:  var(--paper-tooltip-min-width, 200px); --paper-tooltip_-_padding:  var(--paper-tooltip-padding, 10px 8px);
}

.cr-padded-text {
  padding-block-end: var(--cr-section-vertical-padding);
        padding-block-start: var(--cr-section-vertical-padding);
}

.cr-title-text {
  color: var(--cr-title-text-color);
        font-size: 107.6923%; 
        font-weight: 500;
}

.cr-secondary-text {
  color: var(--cr-secondary-text-color);
        font-weight: 400;
}

.cr-form-field-label {
  color: var(--cr-form-field-label-color);
        display: block;
        font-size: var(--cr-form-field-label-font-size);
        font-weight: 500;
        letter-spacing: .4px;
        line-height: var(--cr-form-field-label-line-height);
        margin-bottom: 8px;
}

.cr-vertical-tab {
  align-items: center;
        display: flex;
}

.cr-vertical-tab::before {
  border-radius: 0 3px 3px 0;
        content: '';
        display: block;
        flex-shrink: 0;
        height: var(--cr-vertical-tab-height, 100%);
        width: 4px;
}

.cr-vertical-tab.selected::before {
  background: var(--cr-vertical-tab-selected-color, var(--cr-checked-color));
}

:host-context([dir=rtl]) .cr-vertical-tab::before {
  transform: scaleX(-1);
}

</style>
  </template>
</dom-module>
<dom-module id="cr-input-style" assetpath="chrome://resources/">
  <template>
    <style scope="cr-input-style">:host {
  --cr-input-background-color: var(--google-grey-refresh-100);
        --cr-input-color: var(--cr-primary-text-color);
        --cr-input-error-color: var(--google-red-600);
        --cr-input-focus-color: var(--google-blue-600);
        display: block;
        
        outline: none;
}

@media (prefers-color-scheme: dark) {
:host {
  --cr-input-background-color: rgba(0, 0, 0, .3);
          --cr-input-error-color: var(--google-red-refresh-300);
          --cr-input-focus-color: var(--google-blue-refresh-300);
}

}

:host([focused_]:not([readonly]):not([invalid])) #label {
  color: var(--cr-input-focus-color);
}

#input-container {
  border-radius: var(--cr-input-border-radius, 4px);
        overflow: hidden;
        position: relative;
        width: var(--cr-input-width, 100%);
}

#inner-input-container {
  background-color: var(--cr-input-background-color);
        box-sizing: border-box;
        padding: 0;
}

#input {
  -webkit-appearance: none;
        
        background-color: transparent;
        border: none;
        box-sizing: border-box;
        caret-color: var(--cr-input-focus-color);
        color: var(--cr-input-color);
        font-family: inherit;
        font-size: inherit;
        font-weight: inherit;
        line-height: inherit;
        min-height: var(--cr-input-min-height, auto);
        outline: none;

        
        padding-bottom: var(--cr-input-padding-bottom, 6px);
        padding-inline-end: var(--cr-input-padding-end, 8px);
        padding-inline-start: var(--cr-input-padding-start, 8px);
        padding-top: var(--cr-input-padding-top, 6px);

        text-align: inherit;
        text-overflow: ellipsis;
        width: 100%;
}

#underline {
  border-bottom: 2px solid var(--cr-input-focus-color);
        border-radius: var(--cr-input-underline-border-radius, 0);
        bottom: 0;
        box-sizing: border-box;
        display: var(--cr-input-underline-display);
        height: var(--cr-input-underline-height, 0);
        left: 0;
        margin: auto;
        opacity: 0;
        position: absolute;
        right: 0;
        transition: opacity 120ms ease-out, width 0s linear 180ms;
        width: 0;
}

:host([invalid]) #underline, :host([force-underline]) #underline, :host([focused_]) #underline {
  opacity: 1;
        transition: opacity 120ms ease-in, width 180ms ease-out;
        width: 100%;
}

</style>
  </template>
</dom-module>
<dom-module id="search-highlight-style" assetpath="chrome://resources/">
<!--_html_template_start_-->
  <template>
    <style scope="search-highlight-style">.search-bubble {
  --search-bubble-color: var(--paper-yellow-500);
        position: absolute;
        z-index: 1;
}

.search-bubble-innards {
  align-items: center;
        background-color: var(--search-bubble-color);
        border-radius: 2px;
        color: var(--google-grey-900);
        max-width: 100px;
        min-width: 64px;
        overflow: hidden;
        padding: 4px 10px;
        text-align: center;
        text-overflow: ellipsis;
        white-space: nowrap;
}

.search-bubble-innards::after {
  background-color: var(--search-bubble-color);
        content: '';
        height: 10px;
        left: calc(50% - 5px);
        position: absolute;
        top: -5px;
        transform: rotate(-45deg);
        width: 10px;
        z-index: -1;
}

.search-bubble-innards.above::after {
  bottom: -5px;
        top: auto;
        transform: rotate(-135deg);
}

</style>
  </template>
<!--_html_template_end_-->
</dom-module>
<dom-module id="md-select" assetpath="chrome://resources/">
  <template>
    <style scope="md-select">.md-select {
  --md-arrow-width: 10px;
        --md-select-bg-color: var(--google-grey-refresh-100);
        --md-select-focus-shadow-color: rgba(var(--google-blue-600-rgb), .4);
        --md-select-option-bg-color: white;
        --md-select-side-padding: 8px;
        --md-select-text-color: var(--google-grey-900);

        -webkit-appearance: none;
        background: url('chrome://resources/images/arrow_down.svg')
            calc(100% - var(--md-select-side-padding))
            center no-repeat;
        background-color: var(--md-select-bg-color);
        background-size: var(--md-arrow-width);
        border: none;
        border-radius: 4px;
        color: var(--md-select-text-color);
        cursor: pointer;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        max-width: 100%;
        outline: none;
        padding-bottom: 6px;
        
        padding-inline-end: calc(var(--md-select-side-padding) +
            var(--md-arrow-width) + 3px);
        padding-inline-start: var(--md-select-side-padding);
        padding-top: 6px;
        width: var(--md-select-width, 200px);
}

@media (prefers-color-scheme: dark) {
.md-select {
  --md-select-bg-color: rgba(0, 0, 0, .3);
          --md-select-focus-shadow-color:
              rgba(var(--google-blue-refresh-300-rgb), .5);
          --md-select-option-bg-color: var(--google-grey-900-white-4-percent);
          --md-select-text-color: var(--cr-primary-text-color);
          background-image: url('chrome://resources/images/dark/arrow_down.svg');
}

}

.md-select :-webkit-any(option, optgroup) {
  background-color: var(--md-select-option-bg-color);
}

.md-select[disabled] {
  opacity: var(--cr-disabled-opacity);
        pointer-events: none;
}

.md-select:focus {
  box-shadow: 0 0 0 2px var(--md-select-focus-shadow-color);
}

.md-select:active {
  box-shadow: none;
}

:host-context([dir=rtl]) .md-select {
  background-position-x: var(--md-select-side-padding);
}

</style>
  </template>
</dom-module>
<dom-module id="print-preview-shared"><!--_html_template_start_-->
<template>
  <style include="cr-shared-style" scope="print-preview-shared">select.md-select {
  margin-bottom: 2px;
      margin-top: 2px;
      min-height: 32px;
      padding-bottom: 1px;
    
      
      padding-bottom: 2px;
    
      padding-inline-end: 32px;
      padding-top: 1px;
      user-select: none;
      --md-select-width: calc(100% - 2 * var(--print-preview-sidebar-margin));
}

.checkbox cr-checkbox {
  min-height: var(--print-preview-row-height);
      --cr-checkbox-ripple-size: var(--print-preview-row-height);
}

.checkbox cr-checkbox::part(label-container) {
  overflow: hidden;
      padding-inline-start: 16px;
}

cr-input {
  line-height: 20px;
}

cr-input::part(row-container) {
  min-height: var(--print-preview-row-height);
}

a[href], a[is='action-link'] {
  color: var(--google-blue-600);  
      text-decoration: none;
}

@media (prefers-color-scheme: dark) {
:-webkit-any(a[href], a[is='action-link']) {
  color: var(--cr-link-color);
}

}

print-preview-settings-section [slot=controls] > * {
  margin: 0 var(--print-preview-sidebar-margin);
}

cr-dialog::part(wrapper) {
  max-height: calc(100vh - 68px);
      max-width: 100%;
      width:  calc(100vw - 68px);
}

cr-dialog [slot=body] {
  box-sizing: border-box;
}

#dialog div[slot='title'] {
  padding-bottom: 8px;
}

#dialog div[slot='button-container'] {
  align-items: center;
      box-shadow: 0 -1px 1px 0 rgba(var(--cr-card-shadow-color-rgb), 0.3);
      min-height: 64px;
      padding-bottom: 0;
      padding-top: 0;
}

</style>
</template>
<!--_html_template_end_--></dom-module>
<dom-module id="cr-actionable-row-style" assetpath="chrome://resources/">
  <template>
    <style scope="cr-actionable-row-style">:host {
  align-items: center;
        align-self: stretch;
        display: flex;
        margin: 0;
        outline: none;
}

:host(:not([effectively-disabled_])) {
  cursor: pointer;
}

:host(:not([no-hover], [effectively-disabled_]):hover) {
  background-color: var(--cr-hover-background-color);
}

:host(:not([no-hover], [effectively-disabled_]):active) {
  background-color: var(--cr-active-background-color);
}

:host(:not([no-hover], [effectively-disabled_])) cr-icon-button {
  --cr-icon-button-hover-background-color: transparent;
        --cr-icon-button-active-background-color: transparent;
}

</style>
  </template>
</dom-module>
<dom-module id="throbber"><!--_html_template_start_-->
<template>
  <style scope="throbber">.throbber {
  background: url('chrome://resources/images/throbber_small.svg') no-repeat;
      display: inline-block;
      height: var(--throbber-size);
      width: var(--throbber-size);
}

</style>
</template>
<!--_html_template_end_--></dom-module>
<dom-module id="action-link" assetpath="chrome://resources/" css-build="shadow">
  <template css-build="shadow">
    <style scope="action-link">[is='action-link'] {
  cursor: pointer;
        display: inline-block;
        text-decoration: none;
}

[is='action-link'], [is='action-link']:active, [is='action-link']:hover, [is='action-link']:visited {
  color: var(--cr-link-color);
}

[is='action-link'][disabled] {
  color: var(--paper-grey-600);  
        cursor: default;
        opacity: 0.65;
        pointer-events: none;
}

[is='action-link'].no-outline {
  outline: none;
}

</style>
  </template>
</dom-module>
<dom-module id="destination-dialog"><!--_html_template_start_-->
<template>
  <style include="print-preview-shared action-link md-select cr-hidden-style
      throbber" scope="destination-dialog">:host-context([dir=rtl]) #manageIcon {
  transform: scaleX(-1);
}

#dialog::part(dialog) {
  height: calc(100vh - 2 * var(--print-preview-dialog-margin));
      max-width: 640px;
      width:  calc(100vw - 2 * var(--print-preview-dialog-margin));
}

#dialog::part(wrapper) {
  height: calc(100vh - 2 * var(--print-preview-dialog-margin));
}

#dialog::part(body-container) {
  flex: 1;
}

print-preview-search-box {
  margin-bottom: 16px;
      margin-top: 6px;
}

.user-info {
  line-height: calc(20 / 15 * 1em);
      margin-bottom: 14px;
}

.user-info .md-select {
  width: auto;
}

#accountSelectLabel {
  color: var(--cr-primary-text-color);
      padding-inline-end: 18px;
}

cr-dialog [slot=body] {
  display: flex;
      flex-direction: column;
      height: 100%;
}

div[slot='button-container'] {
  justify-content: space-between;
}

cr-button {
  font-size: calc(12 / 13 * 1em);
}

.cancel-button {
  margin-inline-end: 0;
}

cr-button iron-icon {
  --iron-icon-fill-color: currentColor;
      margin-inline-start: 8px;
}

#warning-message {
  color: var(--cr-primary-text-color);
}

</style>
</template>
<!--_html_template_end_--></dom-module>
<dom-module id="destination-select"><!--_html_template_start_-->
<template>
  <style include="cr-shared-style" scope="destination-select">:host {
  --printer-icon-side-padding: 4px;
      --printer-icon-size: 20px;
}

select.md-select {
  background-position: var(--printer-icon-side-padding) center,
          calc(100% - var(--md-select-side-padding)) center;
      background-size: var(--printer-icon-size), var(--md-arrow-width);
      padding-inline-start: 32px;
}

:host-context([dir=rtl]) .md-select {
  background-position-x: calc(100% - var(--printer-icon-side-padding)),
          var(--md-select-side-padding);
}

.throbber-container {
  align-items: center;
      display: flex;
      overflow: hidden;
}

.destination-additional-info, .destination-additional-info div {
  height: 100%;
      min-height: 0;
}

.destination-status {
  color: var(--cr-secondary-text-color);
      font-size: calc(12/13 * 1em);
      padding: 4px 0;
}

</style>
</template>
<!--_html_template_end_--></dom-module>
</body></html>