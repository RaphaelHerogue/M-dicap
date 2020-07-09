<?php
  class App
  {
    static $db = null;

    static function getDatabase()
    {
      if (!self::$db)
      {
        self::$db = new database("root", "", "medicap", "localhost", "3308");
      }  
      return self::$db;
    }
  }



?>
