<?php
class sesion {
  function __construct() {
     if(!isset($_SESSION))
      {
      session_start();
      } 
  }
  public function set($name, $value) {
     $_SESSION [$name] = $value;
  }
  public function get($name) {
     if (isset ( $_SESSION [$name] )) {
        return $_SESSION [$name];
     } else {
         return false;
     }
  }
  public function delete_variable($name) {
      unset ( $_SESSION [$name] );
  }
  public function end_sesion() {
      $_SESSION = array();
      session_destroy ();
  }
}
?>