<?php
  class Database
  {
    private $pdo;

    public function __construct($users, $mdp, $dbName, $serveur, $port)
    {
      define("bddConnexion", "mysql:dbname=$dbName;host=$serveur; port= $port");
      define("user", $users);
      define("password", $mdp);

      try
      {
        $this ->pdo = new PDO(bddConnexion, user, password,[PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]);
        $this ->pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this ->pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
      }
        catch (PDOException $e)
        {
          echo $e;
          die();
        }
    }

    /**
    * @param $query
    * @param bool|array $params
    * @return PDOStatement
    */
    public function query($query, $params = false)
    {
      if($params)
      {
        $req = $this ->pdo ->prepare($query);
        $req ->execute($params);
      }
        else
        {
          $req = $this ->pdo ->query($query);
        }
      return $req;
    }

    public function lastInsertId()
    {
      return $this->pdo->lastInsertId();
    }
  }
?>
