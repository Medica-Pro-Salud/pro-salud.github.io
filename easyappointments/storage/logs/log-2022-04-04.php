<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-04-04 04:00:58 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2022-04-04 04:00:58 --> #0 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\libraries\Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Mexico_...')
#1 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\controllers\Appointments.php(490): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\pro-salud.github.io\easyappointments\index.php(342): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2022-04-04 04:32:53 --> Could not find the language line "log_outk"
ERROR - 2022-04-04 04:35:36 --> Could not find the language line "backend_sectin"
