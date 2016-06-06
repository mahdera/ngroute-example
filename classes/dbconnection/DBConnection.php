<?php
/**
 *  @author Mahder Neway <mahderalem@gmail.com>
 *
*/
  class DBConnection {

    public static function getDbInstance(){
      $server = "localhost";
      $username = "root";
      $password = "root";
      $database = "db_school";
      return new mysqli($server, $username, $password, $database);
    }
    public static function executeQuery($sql) {
      $dbInstance = self::getDbInstance();
      if ($dbInstance->connect_errno) {
        printf("Connection failed: %s\n", $dbInstance->connect_error);
        exit();
      }else
        return self::getDbInstance()->query($sql);
    }
    public static function read($sql) {
      $result = self::executeQuery($sql);
      return $result;
    }
    public static function save($sql) {
      $result = self::executeQuery($sql);
      return;
    }

  }//end class
?>
