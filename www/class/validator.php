<?php

  private $data;
  private $errors = [];

  public function __construct($data)
  {
      $this->data = $data;
  }

  private function getField($field)
  {
      if (!isset($this->data[$field])) {
          return null;
      }
      return $this->data[$field];
  }

  public function isMDP($field, $errorMsg)
  {
    if(preg_match('/^[a-z]+$/', $this->getField($field))
       && preg_match('/^[A-Z]+$/', $this->getField($field))
       && preg_match('/^[\d]+$/', $this->getField($field))
       && preg_match('/^[\W]+$/', $this->getField($field))
      )
    {
      $this->errors[$field] = $errorMsg;
      return false;
    }
    return true;
  }

  public function isAlpha($field, $errorMsg)
  {
    if(preg_match('/^[a-zA-Z]+$/', $this->getField($field))) 
    {
      $this->errors[$field] = $errorMsg;
      return false;
    }
    return true;
  }

?>
