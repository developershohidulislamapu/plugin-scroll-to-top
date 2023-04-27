<?php
/*
Plugin Name:       Simple Simple Minify Scroll To Top WP
Plugin URI:        https://www.codester.com/items/simple-minify-scroll-to-top-wp/
Description:       This a creative and simple Scroll To Top WP.
Version:           1.0.0
Requires at least: 5.2
Requires PHP:      7.2
Author:            wpdevapu
Author URI:        https://www.codester.com/wpdevapu/
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       smsttw 
*/


// Including CSS
function smsttw_enqueue_style(){

    wp_enqueue_style('smsttw-style',plugins_url('css/smsttw-plugin.css',__FILE__));
    wp_enqueue_style('smsttw-font-awesome-style','//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css');

}
add_action('wp_enqueue_scripts','smsttw_enqueue_style');



// Plugin Customization Settings 

add_action('customize_register','smsttw_minify_scroll_to_top_wp');

function smsttw_minify_scroll_to_top_wp($wp_customize){

      $wp_customize-> add_section('smsttw_minify_scroll_to_top_wp_section', array(
        'title' => __('Simple Minify Scroll To Top', 'smsttw'),
        'description' => 'Simple Minify Scroll To Top plugin will help you to enable Back to Top button to your WordPress website.',
      ));
    
      // CSS BG Color Change

      $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_bg_color', array(
        'default' => '#452598',
      ));
      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_bg_color', array(
          'label'   => 'Background Color',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'color',
      ));

      // CSS Icon Color Change

      $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_color', array(
        'default' => '#fff',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_color', array(
          'label'   => 'Icon Color',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'color',
      ));

       // Icon Hover Background Color

       $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_icon_hover_bg_color', array(
        'default' => '#130d59',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_icon_hover_bg_color', array(
          'label'   => 'Icon Hover Background Color',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'color',
      ));

      // Icon Hover Color

      $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_icon_hover_color', array(
        'default' => '#eeee22',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_icon_hover_color', array(
          'label'   => 'Icon Hover Color',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'color',
      ));

      // CSS Rounded Corner

      $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_rounded_corner', array(
        'default' => '5px',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_rounded_corner', array(
          'label'   => 'Rounded corner',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'text',
      ));


       // CSS Bottom Possition

       $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_possition', array(
        'default' => '30px',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_possition', array(
          'label'   => 'Bottom Space',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'text',
      ));

       // Font awesome

       $wp_customize ->add_setting('smsttw_minify_scroll_to_top_wp_icon', array(
        'default' => 'fa fa-angle-up',
      ));

      $wp_customize->add_control('smsttw_minify_scroll_to_top_wp_icon', array(
          'label'   => 'font awesome icon',
          'section' => 'smsttw_minify_scroll_to_top_wp_section',
          'type'    => 'text',
      ));


      // Position left or right

      $wp_customize->add_setting( 'smsttw_minify_scroll_to_top_wp_p_l_t', array(
        'default' => 'right',
    
    ) );

    $wp_customize->add_control( 'smsttw_minify_scroll_to_top_wp_p_l_t', array(
        'type' => 'radio',
        'section' => 'smsttw_minify_scroll_to_top_wp_section', // Add a default or your own section
        'label' => __( 'Position' ),
        'choices' => array(
            'right' => __( 'Right Side' ),
            '10px' => __( 'Left Side'),
        ),
    ) );

      // box shadow 

     $wp_customize->add_setting( 'smsttw_minify_scroll_to_top_wp_box_shadow', array(
        'default' => '0 1px 10px 0 rgba(0, 0, 0, 0.2)',
    
    ) );

    $wp_customize->add_control( 'smsttw_minify_scroll_to_top_wp_box_shadow', array(
        'type' => 'radio',
        'section' => 'smsttw_minify_scroll_to_top_wp_section', // Add a default or your own section
        'label' => __( 'Box Shadow' ),
        'choices' => array(
            '0 1px 10px 0 rgba(0, 0, 0, 0.2)' => __( 'On' ),
            'none' => __( 'Off' ),
        ),
    ) );



     
      
}

// Plugin Customization CSS

function smsttw_minify_scroll_to_top_wp_color_customize(){

    ?>
    <style>
        .topcontrol {
            background-color: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_bg_color")?>;
            color: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_color")?>;
            border-radius: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_rounded_corner")?>;
            margin-bottom: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_possition")?>;
            left:<?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_p_l_t")?>;
            box-shadow: 0 1px 10px 0 rgba(0, 0, 0, 0.2);
            box-shadow: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_box_shadow")?>;
        }

        .topcontrol > i{
            color: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_color")?>;
        }
        .topcontrol:hover {
            background: <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_icon_hover_bg_color")?>;
            
        }
        .topcontrol:hover > i{
            color:  <?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_icon_hover_color")?>;
        }

    </style>

    <?php

}

add_action("wp_head","smsttw_minify_scroll_to_top_wp_color_customize");


add_action("wp_footer","smsttw_minify_scroll_to_top_wp_script");

function smsttw_minify_scroll_to_top_wp_script(){
    ?>
          <script>
           var scrolltotop={
            //startline: Integer. Number of pixels from top of doc scrollbar is scrolled before showing control
            //scrollto: Keyword (Integer, or "Scroll_to_Element_ID"). How far to scroll document up when control is clicked on (0=top).
            setting: {startline:100, scrollto: 0, scrollduration:1000, fadeduration:[500, 100]},
            controlHTML: ' <i class="<?php echo get_theme_mod("smsttw_minify_scroll_to_top_wp_icon")?> scrolltop"></i>', //HTML for control, which is auto wrapped in DIV w/ ID="topcontrol"
            controlattrs: {offsetx:5, offsety:5}, //offset of control relative to right/ bottom of window corner
            anchorkeyword: '#top', //Enter href value of HTML anchors on the page that should also act as "Scroll Up" links

            state: {isvisible:false, shouldvisible:false},

            scrollup:function(){
                if (!this.cssfixedsupport) //if control is positioned using JavaScript
                    this.$control.css({opacity:0}) //hide control immediately after clicking it
                var dest=isNaN(this.setting.scrollto)? this.setting.scrollto : parseInt(this.setting.scrollto)
                if (typeof dest=="string" && jQuery('#'+dest).length==1) //check element set by string exists
                    dest=jQuery('#'+dest).offset().top
                else
                    dest=0
                this.$body.animate({scrollTop: dest}, this.setting.scrollduration);
            },

            keepfixed:function(){
                var $window=jQuery(window)
                var controlx=$window.scrollLeft() + $window.width() - this.$control.width() - this.controlattrs.offsetx
                var controly=$window.scrollTop() + $window.height() - this.$control.height() - this.controlattrs.offsety
                this.$control.css({left:controlx+'px', top:controly+'px'})
            },

            togglecontrol:function(){
                var scrolltop=jQuery(window).scrollTop()
                if (!this.cssfixedsupport)
                    this.keepfixed()
                this.state.shouldvisible=(scrolltop>=this.setting.startline)? true : false
                if (this.state.shouldvisible && !this.state.isvisible){
                    this.$control.stop().animate({opacity:1}, this.setting.fadeduration[0])
                    this.state.isvisible=true
                }
                else if (this.state.shouldvisible==false && this.state.isvisible){
                    this.$control.stop().animate({opacity:0}, this.setting.fadeduration[1])
                    this.state.isvisible=false
                }
            },
            
            init:function(){
                jQuery(document).ready(function($){
                    var mainobj=scrolltotop
                    var iebrws=document.all
                    mainobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest //not IE or IE7+ browsers in standards mode
                    mainobj.$body=(window.opera)? (document.compatMode=="CSS1Compat"? $('html') : $('body')) : $('html,body')
                    mainobj.$control=$('<div id="topcontrol" class="topcontrol">'+mainobj.controlHTML+'</div>')
                        .css({position:mainobj.cssfixedsupport? 'fixed' : 'absolute', bottom:mainobj.controlattrs.offsety, right:mainobj.controlattrs.offsetx, opacity:0, cursor:'pointer'})
                        .attr({title:''})
                        .click(function(){mainobj.scrollup(); return false})
                        .appendTo('body')
                    if (document.all && !window.XMLHttpRequest && mainobj.$control.text()!='') //loose check for IE6 and below, plus whether control contains any text
                        mainobj.$control.css({width:mainobj.$control.width()}) //IE6- seems to require an explicit width on a DIV containing text
                    mainobj.togglecontrol()
                    $('a[href="' + mainobj.anchorkeyword +'"]').click(function(){
                        mainobj.scrollup()
                        return false
                    })
                    $(window).bind('scroll resize', function(e){
                        mainobj.togglecontrol()
                    })
                })
            }
        }

        scrolltotop.init();
        </script>
    <?php
}