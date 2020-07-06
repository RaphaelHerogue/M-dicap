<?php

  $serveur = "localhost";
  $dbName = "medicap";
  $users = "root";
  $mdp = "";
  $port = 3308;
  define("SQL_DSN", "mysql:dbname=$dbName;host=$serveur; port= $port");
  define("SQL_USERNAME", "$users");
  define("SQL_PASSWORD", $mdp);

        try
        {
          $_instance = new PDO(SQL_DSN, SQL_USERNAME, SQL_PASSWORD,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
          $_instance -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e)
        {
          echo $e;
          die();
        }
?>
