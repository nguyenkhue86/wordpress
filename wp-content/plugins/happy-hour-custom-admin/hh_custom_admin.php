<?php
/**
 * Plugin Name: HH Customize Admin Screen
 * Plugin URI: http://tma.com
 * Description: Custome Login page
 * Version: 1.0
 * Author: Nguyen Tran
 * Author URI: http://facebook.com/o0nguyen0o
 */

 /**Function change display */
  if( !function_exists('hh_custom_admin') ){
      function hh_custom_admin() {
        ?>
        <style type="text/css">
            body {
                background-image: url( <?php echo plugins_url('images/background-2.jpg',__FILE__); ?>  ) !important;
            }
            .login #nav a,.login #backtoblog a {
                color:#ffffff !important;
                font-weight: bold;
                font-size:1em;
            }
            .login #nav a: hover,.login #backtoblog a: hover {
                color: #333 !important;
            }

            .login h1 a {
                background-image: url( <?php echo plugins_url('images/logo.png',__FILE__); ?>  ) !important;
                height: 160px !important;
                width:320px !important;
                background-size: 320px !important;
                max-width:90%;
            }
            .login form {
                background:none !important;
            }
            .login form p label,.login .privacy-policy-page-link a {
                color: #ffffff !important;
                font-size:1em !important;
            }

        </style>
        <?php
     }
      add_action('login_enqueue_scripts', 'hh_custom_admin');
  };