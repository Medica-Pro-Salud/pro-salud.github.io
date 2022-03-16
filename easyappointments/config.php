<?php
/* ----------------------------------------------------------------------------
 * Easy!Appointments - Open Source Web Scheduler
 *
 * @package     EasyAppointments
 * @author      A.Tselegidis <alextselegidis@gmail.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        http://easyappointments.org
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Easy!Appointments Configuration File
 *
 * Set your installation BASE_URL * without the trailing slash * and the database
 * credentials in order to connect to the database. You can enable the DEBUG_MODE
 * while developing the application.
 *
 * Set the default language by changing the LANGUAGE constant. For a full list of
 * available languages look at the /application/config/config.php file.
 *
 * IMPORTANT:
 * If you are updating from version 1.0 you will have to create a new "config.php"
 * file because the old "configuration.php" is not used anymore.
 */
class Config {

    // ------------------------------------------------------------------------
    // GENERAL SETTINGS
    // ------------------------------------------------------------------------
    //                      C:\xampp\htdocs\pro-salud.github.io\easyappointments
    const BASE_URL      = 'http://localhost/pro-salud.github.io/easyappointments';
    const LANGUAGE      = 'english';
    const DEBUG_MODE    = FALSE;

    // ------------------------------------------------------------------------
    // DATABASE SETTINGS
    // ------------------------------------------------------------------------

    const DB_HOST       = 'localhost';
    const DB_NAME       = 'easyappointments';
    const DB_USERNAME   = 'easyappointments';
    const DB_PASSWORD   = 'Easyappointment1';

    // ------------------------------------------------------------------------
    // GOOGLE CALENDAR SYNC
    // ------------------------------------------------------------------------

    const GOOGLE_SYNC_FEATURE   = TRUE; // Enter TRUE or FALSE
    const GOOGLE_PRODUCT_NAME   = 'Proyecto';
    const GOOGLE_CLIENT_ID      = '211942847801-ifngvhfsc3a2rpaej6qrucgk371t7cgj.apps.googleusercontent.com';
    const GOOGLE_CLIENT_SECRET  = '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';
    const GOOGLE_API_KEY        = 'AIzaSyARVEH6ApJLXRTQu9M8stZKwyVoPORHAf8';
}

/* End of file config.php */
/* Location: ./config.php */
