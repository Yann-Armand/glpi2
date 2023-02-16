<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'YKOMOE';
   public $dbpassword = 'P%40%24%24w0rd%21';
   public $dbdefault = 'glpi';
   public $use_timezones = true;
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
