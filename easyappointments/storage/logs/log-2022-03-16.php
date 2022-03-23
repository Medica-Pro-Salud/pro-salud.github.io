<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-16 03:09:20 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2022-03-16 03:09:20 --> #0 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\libraries\Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Mexico_...')
#1 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\controllers\Appointments.php(490): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\pro-salud.github.io\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
ERROR - 2022-03-16 17:51:00 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2022-03-16 17:51:00 --> Severity: error --> Exception: Unable to connect to the database. C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\DB_driver.php 433
ERROR - 2022-03-16 17:55:03 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2022-03-16 17:55:03 --> Severity: error --> Exception: Unable to connect to the database. C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\DB_driver.php 433
ERROR - 2022-03-16 17:55:04 --> Severity: Warning --> mysqli::real_connect(): (HY000/2002): No se puede establecer una conexión ya que el equipo de destino denegó expresamente dicha conexión C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\drivers\mysqli\mysqli_driver.php 203
ERROR - 2022-03-16 17:55:04 --> Severity: error --> Exception: Unable to connect to the database. C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\database\DB_driver.php 433
ERROR - 2022-03-16 18:26:48 --> Email could not been sent. Mailer Error (Line 166): Could not instantiate mail function.
ERROR - 2022-03-16 18:26:48 --> #0 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\libraries\Notifications.php(94): EA\Engine\Notifications\Email->send_appointment_details(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text), 'America/Mexico_...')
#1 C:\xampp\htdocs\pro-salud.github.io\easyappointments\application\controllers\Appointments.php(490): Notifications->notify_appointment_saved(Array, Array, Array, Array, Array, false)
#2 C:\xampp\htdocs\pro-salud.github.io\easyappointments\vendor\codeigniter\framework\system\core\CodeIgniter.php(481): Appointments->ajax_register_appointment()
#3 C:\xampp\htdocs\pro-salud.github.io\easyappointments\index.php(341): require_once('C:\\xampp\\htdocs...')
#4 {main}
