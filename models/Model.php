<?php
/**
 *
 */
class Model
{
  //@TODO remove the properties and put them inside a non commitable

  protected $dbconnect;
  protected $tableName;
  function __construct()
  {
    $this->dbconnect = new PDO('mysql:host=localhost;dbname=' . config::DB_NAME, config::USER, config::PASS);
  }
  public function getAll()
  {
    $request = $this->dbconnect->prepare('SELECT * FROM ' . $this->tableName);
    $request->execute();
    // $results = $request->fetchAll();
    $results = $request->fetchAll(PDO::FETCH_OBJ);
    foreach ($results as $result) {
      echo '<li><a href=/view/'. $result->title .'>' .$result->title.'</li><br/>';
    }
  }

  public function getOne($identifierKey, $identifierValue)
  {
    $request = $this->dbconnect->prepare('SELECT * FROM ' . $this->tableName . ' WHERE ' . $identifierKey . ' = "' . $identifierValue . '" LIMIT 1' );
    $request->execute();
    // $results = $request->fetchAll();
    $results = $request->fetchAll(PDO::FETCH_OBJ);
    return $results[0];
  }
}


?>
