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

  public function isMDP($field, $errorMsg = "")
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

  public function isUniq($field, $db, $table, $errorMsg)
   {
       $record = $db->query("SELECT * FROM $table WHERE $field = ?", [$this->getField($field)])->fetch();
       if ($record) {
           $this->errors[$field] = $errorMsg;
           return false;
       }
       return true;
   }

   public function isEmail($field, $errorMsg)
    {
        if (!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = $errorMsg;
            return false;
        }
        return true;
    }

    public function isValid()
    {
        return empty($this->errors);
    }

    public function getErrors()
    {
        return $this->errors;
    }

?>
