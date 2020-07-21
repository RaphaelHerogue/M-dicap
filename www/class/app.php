<?php
  class app
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

    static function getAuth()
    {
      return new auth(session::getInstance(), ['restriction_msg' => 'Lol tu es bloqué !']);
    }

    static function redirect($page)
    {
      header("Location: $page");
      exit();
    }
  }
?>
