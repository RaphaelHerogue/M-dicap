<?php
class Validator
{
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
    $patern = "~^(?=.{8,}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W).*$~";
    $str = $this->getField($field);
    $regex = preg_match($patern,$str);
    if(!$regex)
    {
      $this->errors[$field] = $errorMsg;
      return false;
    }
  return true;
  }

  public function isAlpha($field, $errorMsg)
  {
    $patern = "/^[a-zA-Z,]*$/";
    $str = $this->getField($field);
    $regex = preg_match($patern,$str);
    if(!$regex)
    {
      $this->errors[$field] = $errorMsg;
      return false;
    }
    return true;
  }

  public function isUniq($field, $db, $table, $errorMsg)
   {
       $record = $db->query("SELECT * FROM $table WHERE $field = ?", [$this->getField($field)])->fetch();
       if ($record)
       {
           $this->errors[$field] = $errorMsg;
           return false;
       }
       return true;
   }

  public function doublon($field, $field1, $field2, $db, $table, $errorMsg)
  {
    $firstname = $db->query("SELECT IDUSERS FROM $table WHERE $field = ?", [$this->getField($field)])->fetchAll();
    $name =  $db->query("SELECT IDUSERS FROM $table WHERE $field1 = ?", [$this->getField($field1)])->fetchAll();
    $date = $db->query("SELECT IDUSERS FROM $table WHERE $field2 = ?", [$this->getField($field2)])->fetchAll();

    $variableFirst = [];
    $variableName = [];
    $variableDate = [];

    for ($i=0, $size=count($firstname); $i<$size; $i++)
    {
      array_push($variableFirst, $firstname[$i]);
    }

    for ($i=0, $size=count($name); $i<$size; $i++)
    {
      array_push($variableName, $name[$i]);
    }

    for ($i=0, $size=count($date); $i<$size; $i++)
    {
      array_push($variableDate, $date[$i]);
    }

    for ($i=0, $size = count($variableFirst); $i < $size ; $i++)
    {
      $var1 = $variableFirst[$i];
      for ($j=0, $sizeName = count($variableName); $j < $sizeName; $j++)
      {
        $var2 = $variableName[$j];
        for ($k=0, $sizeDate = count($variableDate); $k < $sizeDate; $k++)
        {
          $var3 = $variableDate[$k];
          if($var3 == $var2 && $var1 == $var2)
          {
            $this->errors[$field . $field1 . $field2] = $errorMsg;
            return false;
          }
        return true;
        }
      }
    }
  }

   public function isEmail($field, $errorMsg)
    {
        if (!filter_var($this->getField($field), FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = $errorMsg;
            return false;
        }
        return true;
    }

    public function isConfirmed($field, $field1, $errorMsg = '')
    {
      similar_text($this->getField($field),$this->getField($field1),$perc);
      if($perc!=100)
      {
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
}
?>
