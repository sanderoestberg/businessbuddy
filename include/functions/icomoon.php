
    <?php
    /*=============================================
              = Icomoon select with icons =
    ===============================================*/
    function icoomon_field_contents( $field ){

            $field['type'] = 'select';
            $field['choices'] = array();
            $field['choices']['false']      = '';
            $field['choices']['icon-instagram']      = 'Instagram';
            $field['choices']['icon-linkedin']       = 'Linkedin';
            $field['choices']['icon-facebook']       = 'Facebook';
            $field['choices']['icon-quote-up']       = 'Quote - Venstre';
            $field['choices']['icon-quote-down']       = 'Quote - Højre';
            $field['choices']['icon-arrow-down']       = 'Pil - Ned';
            $field['choices']['icon-arrow-right']       = 'Pil - Højre';
            $field['choices']['icon-check']       = 'Flueben';
            $field['choices']['icon-coaching']       = 'Coaching';
            $field['choices']['icon-digitalisering']       = 'Digitalisering';
            $field['choices']['icon-forretningsudvikling']       = 'Forretningsudvikling';
            $field['choices']['icon-mail']       = 'Email';
            $field['choices']['icon-telefon']       = 'Telefon';
            $field['choices']['icon-pin']       = 'Lokationsnål';
            $field['choices']['icon-sortsnak']       = 'Sortsnak';
            $field['choices']['icon-sparring']       = 'Sparring';
            $field['choices']['icon-work-life']       = 'Work-Life';
            $field['choices']['icon-businessbuddy']       = 'BusinessBuddy';



            $field['wrapper']['class'] = 'icomoon-select-element';
            $field['ui'] = true;

        return $field;
    }

    add_filter('acf/load_field/name=icomoon', 'icoomon_field_contents');

    // enqueue admin js
    add_action( 'acf/input/admin_enqueue_scripts', 'bbh_icomoon_select2_scripts' );
    function bbh_icomoon_select2_scripts(){
        wp_enqueue_script('bbh_icomoon', get_stylesheet_directory_uri() . '/assets/scss/import/icomoon_standard/admin.js', array( 'jquery', 'select2' ) );
        wp_enqueue_style('icomoon', get_stylesheet_directory_uri() . '/assets/scss/import/icomoon_standard/style.css');
    }
    ?>
